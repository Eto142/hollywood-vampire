<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\WithdrawalController;

Route::get('/', function () {
    return view('auth.login');
});




// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('user.logout');
Route::get('/verify', [AuthController::class, 'showVerifyForm'])->name('verify.form');
Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');



// Route::get('/access-code', [AccessCodeController::class, 'show'])->name('access.code');
// Route::post('/access-code', [AccessCodeController::class, 'verify'])->name('access.code.verify');





// Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.form');
// Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.submit');

// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.submit');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/my-account', 'user.my-account')->name('my-account');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('/overview', [DashboardController::class, 'overview'])->name('overview');
    Route::get('/membership', [DashboardController::class, 'membership'])->name('membership');
    Route::view('/vip-membership', 'user.vip-membership')->name('vip-membership');
    Route::view('/vvip-membership', 'user.vvip-membership')->name('vvip-membership');
    Route::view('/platinum-membership', 'user.platinum-membership')->name('platinum-membership');
    Route::get('/plan', [DashboardController::class, 'plan'])->name('plan');
    Route::post('/investments', [\App\Http\Controllers\User\InvestmentController::class, 'store'])->name('user.investments.store');
    Route::get('/support', [\App\Http\Controllers\User\SupportController::class, 'index'])->name('support');
    Route::post('/support/send', [\App\Http\Controllers\User\SupportController::class, 'send'])->name('support.send');
    // Deposit routes
    Route::get('/deposit', [\App\Http\Controllers\User\DepositController::class, 'create'])->name('deposit.create');
    Route::post('/deposit', [\App\Http\Controllers\User\DepositController::class, 'store'])->name('deposit.store');
    Route::get('/deposit/{deposit}/details', [\App\Http\Controllers\User\DepositController::class, 'details'])->name('deposit.details');
    Route::get('/support/fetch', [\App\Http\Controllers\User\SupportController::class, 'fetch'])->name('support.fetch');
    Route::get('/activity-log', [DashboardController::class, 'activityLog'])->name('activity-log');
    Route::post('/withdrawal', [WithdrawalController::class, 'store'])->name('withdrawal.store');
});
