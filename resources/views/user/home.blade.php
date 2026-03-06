



@include('user.header')
    <div class="xl:pl-[5rem] lg:p-4 lg:ml-64">
      <div class="container px-4 py-[3rem]">
        <div style="background: rgba(0,0,0,0.22); border-radius: 0.5rem; padding: 1rem 1.5rem; display: inline-block;">
          <h2 class="text-red-500" style="color: #741414;">Welcome back,</h2>
          <h2 class="text-2xl font-bold font-inter text-white">
            <span id="greeting"> Good morning </span>, {{ Auth::user()->first_name ?? Auth::user()->name ?? 'User' }}!
          </h2>
        </div>

        <script>
          // Get the current hour
          const currentHour = new Date().getHours();

          // Get the greeting based on the time of day
          let greeting;
          if (currentHour >= 5 && currentHour < 12) {
            greeting = 'Good morning';
          } else if (currentHour >= 12 && currentHour < 18) {
            greeting = 'Good afternoon';
          } else {
            greeting = 'Good evening';
          }

          // Display the greeting on the webpage
          document.getElementById('greeting').textContent = greeting;
        </script>
        <div class="flex lg:flex-row pt-6">
          <div class="lg:border-r-2 pr-3 border-gray-200 overflow-hidden lg:overflow-visible">

            <div class="flex flex-row items-center space-x-4 h-[14.5rem] w-full lg:w-fit mb-4 overflow-x-scroll lg:overflow-visible">
              <div class="w-full h-full sm:w-[22rem] md:w-[23.5rem] max-w-full rounded-lg px-6 py-8 relative" style="background: url('/images/RED_VELVET.jpg') center center/cover no-repeat;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.55); border-radius: 0.5rem; z-index: 1;"></div>
                <div class="flex flex-col justify-between h-full text-white relative z-10">
                  <div class="flex flex-col items-start w-full mb-2">
                    <img src="/images/VAMPIRE_TEETH_WEBSITE.png" alt="Vampire Teeth Logo" style="width: 38px; height: 26px; object-fit: contain; margin-bottom: 0.5rem; margin-left: 0;" />
                  </div>
                  <div class="flex items-center w-full">
                    <p class="text-sm flex gap-x-2 items-center">Balance</p>
                    <button id="balanceToggle">
                   <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.2273 13L10.3636 10.3221C9.96591 10.4736 9.51705 10.5899 9.01705 10.671C8.51705 10.7522 8.01136 10.7928 7.5 10.7928C5.84091 10.7928 4.33523 10.3519 2.98295 9.47004C1.63068 8.58822 0.636364 7.40616 0 5.92385C0.227273 5.36122 0.542614 4.81211 0.946023 4.27653C1.34943 3.74095 1.84091 3.22971 2.42045 2.74282L0.272727 0.697878L0.988636 0L13.892 12.2859L13.2273 13ZM7.5 8.6829C7.65909 8.6829 7.82955 8.66937 8.01136 8.64232C8.19318 8.61527 8.34659 8.5747 8.47159 8.5206L4.77273 4.99875C4.71591 5.12859 4.6733 5.27466 4.64489 5.43695C4.61648 5.59925 4.60227 5.76155 4.60227 5.92385C4.60227 6.70287 4.88636 7.35747 5.45455 7.88764C6.02273 8.41781 6.70455 8.6829 7.5 8.6829ZM12.2386 9.33209L10.0398 7.23845C10.1534 7.06534 10.2415 6.86246 10.304 6.62984C10.3665 6.39721 10.3977 6.16188 10.3977 5.92385C10.3977 5.15564 10.1165 4.50375 9.55398 3.96816C8.99148 3.43258 8.30682 3.16479 7.5 3.16479C7.25 3.16479 7.00568 3.19184 6.76705 3.24594C6.52841 3.30004 6.3125 3.3866 6.11932 3.50562L4.24432 1.70412C4.64205 1.531 5.15057 1.37953 5.76989 1.24969C6.3892 1.11985 6.99432 1.05493 7.58523 1.05493C9.21023 1.05493 10.696 1.49584 12.0426 2.37765C13.3892 3.25947 14.375 4.44153 15 5.92385C14.7045 6.61631 14.3239 7.24927 13.858 7.82272C13.392 8.39617 12.8523 8.89929 12.2386 9.33209ZM9.28977 6.52434L6.86932 4.21973C7.19886 4.10071 7.53977 4.07636 7.89205 4.14669C8.24432 4.21702 8.55114 4.3712 8.8125 4.60924C9.07386 4.85809 9.25568 5.1367 9.35795 5.44507C9.46023 5.75343 9.4375 6.11319 9.28977 6.52434Z" fill="#C8B2A1"/>
</svg>


                    </button>


                  </div>

                  <div class="">
                    <h2 class="text-[2rem] text-white font-bold" id="balanceAmount">
                      ${{ number_format((float)($balance->wallet_balance ?? 0)) }}.00
                    </h2>
                  </div>

                  <div class="align-bottom flex justify-between items-center">
                    <p class="font-medium text-white" id="creditCardNumber">
                      {{ Auth::user()->phone_number }}                    </p>
                    <div>
                      <button id="withdrawTrigger" class="px-3.5 py-1.5 rounded duration-200 bg-[#ffffff43] hover:bg-[#FFFFFF10] text-[10px] font-semibold text-[#ffffff89] hover:text-[#ffffff89] border border-[#ffffff16]"> Withdraw </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Withdraw Modal copied from overview.blade.php -->
                <div id="withdraw-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                  <div class="relative w-full max-w-lg mx-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] overflow-y-auto" style="max-height: 90vh;">
                      @if(session('modal_alert'))
                      <div class="alert-class mb-3 px-4 py-2 rounded text-center text-sm font-semibold">
                        {{ session('modal_alert') }}
                      </div>
                      @endif
                          <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                              <div>
                                  <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                      Create Withdrawal request
                                  </h3>
                                  <p class="text-xs">Withdraw directly from your account</p>
                              </div>
                              <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="withdraw-modal" id="closeWithdrawModal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <div class="p-4 md:p-5">
                              <style>
                                  .alert-class {
                                      background-color: #231813;
                                      color: #fefefe;
                                  }
                              </style>
                                <form class="space-y-4" id="yourFormId" method="post" action="{{ route('withdrawal.store') }}">
                                  @csrf
                                  <div class="relative">
                                      <input type="number" name="wamount" required id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                      <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                      <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                  </div>
                                    <div class="relative">
                                      <p class="text-xs px-5 mt-1.5 font-semibold text-[#000000ca] mb-2">Withdrawal method</p>
                                      <div class="flex space-x-2">
                                        <div class="flex items-center space-x-2 text-xs px-5 text-[#231813] font-semibold  bg-white border border-[#0f62867a] rounded-md py-2.5 ">
                                          <input type="radio" name="woption" required value="bank" id="bankRadio" class="justify-center items-center gap-x-4" />
                                          <span> Bank Account</span>
                                        </div>
                                        <div class="flex items-center space-x-2 text-xs px-5 text-[#C98C61] font-semibold  border border-[#c98c6176] rounded-md py-2.5">
                                          <input type="radio" name="woption" required value="crypto" id="cryptoRadio" class="" />
                                          <span>Crypto Wallet</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Bank Details Fields -->
                                    <div id="bankDetails" class="hidden">
                                      <div class="relative mb-4">
                                        <label class="block text-xs font-medium leading-6 text-gray-900">Bank Name</label>
                                        <input type="text" name="bank_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="Enter your bank name" />
                                      </div>
                                      <div class="relative mb-4">
                                        <label class="block text-xs font-medium leading-6 text-gray-900 mb-1">Account Type</label>
                                        <div class="flex space-x-2">
                                          <div class="flex items-center space-x-2 text-xs px-4 text-[#231813] font-semibold bg-white border border-[#0f62867a] rounded-md py-2.5">
                                            <input type="radio" name="account_type" value="checking" id="checkingRadio" required />
                                            <span>Checking</span>
                                          </div>
                                          <div class="flex items-center space-x-2 text-xs px-4 text-[#231813] font-semibold bg-white border border-[#0f62867a] rounded-md py-2.5">
                                            <input type="radio" name="account_type" value="savings" id="savingsRadio" />
                                            <span>Savings</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="relative mb-4">
                                        <label class="block text-xs font-medium leading-6 text-gray-900">Routing Number</label>
                                        <input type="text" name="routing_number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="Enter your routing number" />
                                      </div>
                                      <div class="relative mb-4">
                                        <label class="block text-xs font-medium leading-6 text-gray-900">Account Number</label>
                                        <input type="text" name="account_number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="Enter your account number" />
                                      </div>
                                    </div>
                                    <!-- Crypto Details Fields -->
                                    <div id="cryptoDetails" class="hidden">
                                      <div class="relative mb-4">
                                        <label class="block text-xs font-medium leading-6 text-gray-900">Select Crypto Method</label>
                                        <select name="crypto_method" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                                          <option value="">Select</option>
                                          <option value="bitcoin">Bitcoin</option>
                                          <option value="ethereum">Ethereum</option>
                                          <option value="usdt">USDT</option>
                                        </select>
                                      </div>
                                      <div class="relative mb-4">
                                        <label class="block text-xs font-medium leading-6 text-gray-900">Wallet Address</label>
                                        <input type="text" name="wallet_address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="Enter your wallet address" />
                                      </div>
                                    </div>
                                  <div class="relative mb-10">
                                      <input type="text" disabled value="${{ number_format($balance->wallet_balance ?? 0, 2) }}" id="balance_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full  text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                      <p class="text-xs px-5 mt-1.5 font-semibold text-[#C98C61]">*Please ensure your balance is unlocked</p>
                                      <label for="balance_filled" class="px-4 absolute text-sm  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Account Balance (Available)</label>
                                  </div>
                                  <div class="pt-6">
                                      <button type="submit" name="sub-wit" class="w-full text-[#FFF0E0] bg-[#3E2D1C] duration-200 hover:bg-[#3e2d1cd6] font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Place request</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var withdrawTrigger = document.getElementById('withdrawTrigger');
                  var withdrawModal = document.getElementById('withdraw-modal');
                  var closeWithdrawModal = document.getElementById('closeWithdrawModal');
                  var bankRadio = document.getElementById('bankRadio');
                  var cryptoRadio = document.getElementById('cryptoRadio');
                  var bankDetails = document.getElementById('bankDetails');
                  var cryptoDetails = document.getElementById('cryptoDetails');

                  withdrawTrigger.addEventListener('click', function() {
                    withdrawModal.classList.remove('hidden');
                  });
                  closeWithdrawModal.addEventListener('click', function() {
                    withdrawModal.classList.add('hidden');
                  });
                  withdrawModal.addEventListener('click', function(e) {
                    if (e.target === withdrawModal) {
                      withdrawModal.classList.add('hidden');
                    }
                  });

                  function toggleDetails() {
                    if (bankRadio.checked) {
                      bankDetails.classList.remove('hidden');
                      cryptoDetails.classList.add('hidden');
                    } else if (cryptoRadio.checked) {
                      cryptoDetails.classList.remove('hidden');
                      bankDetails.classList.add('hidden');
                    } else {
                      bankDetails.classList.add('hidden');
                      cryptoDetails.classList.add('hidden');
                    }
                  }
                  bankRadio.addEventListener('change', toggleDetails);
                  cryptoRadio.addEventListener('change', toggleDetails);
                  // On modal open, reset details
                  withdrawTrigger.addEventListener('click', function() {
                    bankRadio.checked = false;
                    cryptoRadio.checked = false;
                    bankDetails.classList.add('hidden');
                    cryptoDetails.classList.add('hidden');
                  });

                  // AJAX form submission
                  var withdrawForm = document.getElementById('yourFormId');
                  if (withdrawForm) {
                    withdrawForm.addEventListener('submit', function(e) {
                      e.preventDefault();
                      var formData = new FormData(withdrawForm);
                      fetch('{{ route('withdrawal.store') }}', {
                        method: 'POST',
                        headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': withdrawForm.querySelector('input[name="_token"]').value },
                        body: formData
                      })
                      .then(function(res) { return res.json(); })
                      .then(function(data) {
                        withdrawModal.classList.add('hidden');
                        if (data.status === 'success') {
                          Swal.fire({ title: 'Request Submitted', text: data.message, icon: 'success' });
                          withdrawForm.reset();
                          bankDetails.classList.add('hidden');
                          cryptoDetails.classList.add('hidden');
                        } else {
                          Swal.fire({ title: 'Error!', text: data.message || 'Something went wrong.', icon: 'error' });
                        }
                      })
                      .catch(function() {
                        Swal.fire({ title: 'Error!', text: 'An error occurred. Please try again.', icon: 'error' });
                      });
                    });
                  }
                });
              </script>


              <!-- Your existing HTML code -->

              <!-- Your existing HTML code -->

              <script>
                const balanceAmount = document.getElementById('balanceAmount');
                const creditCardNumber = document.getElementById('creditCardNumber');
                const balanceToggle = document.getElementById('balanceToggle');

                let isBalanceHidden = false;

                balanceToggle.addEventListener('click', () => {
                  if (!isBalanceHidden) {
                    // Initial click, add a small delay
                    setTimeout(() => {
                      isBalanceHidden = !isBalanceHidden;
                      toggleBalance();
                    }, 50); // Adjust the delay as needed
                  } else {
                    // Subsequent clicks, toggle immediately
                    isBalanceHidden = !isBalanceHidden;
                    toggleBalance();
                  }
                });

                function toggleBalance() {
                  if (isBalanceHidden) {
                    balanceAmount.textContent = '********';
                    creditCardNumber.textContent = '**** **** **** ****';
                  } else {
                    // Show the real balance with commas and no decimals
                    let realBalance = {{ (float)($balance->wallet_balance ?? 0) }};
                    balanceAmount.textContent = `$${realBalance.toLocaleString('en-US', { maximumFractionDigits: 0 })}`;
                    creditCardNumber.textContent = `{{ Auth::user()->phone_number }}`;
                  }
                }
              </script>




              
              <div id="membershipCard" class="lg:block card-container h-full w-[23.5rem] rounded-lg px-4 py-8 shadow-xl relative" style="background: url('/holly.jpeg') center center/cover no-repeat;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.55); border-radius: 0.5rem; z-index: 1;"></div>
                <div class="flex space-x-10 relative z-10 text-white">
                  <div class="w-screen lg:w-[21rem]">
                    <div>
                      <div class="px-4 py-0.5 bg-black rounded-sm ">
                        <h2 class="text-[#b2b6bb] font-stark font-semibold uppercase">
                          {{ Auth::user()->first_name }}    {{ Auth::user()->last_name }}                      </h2>
                      </div>
                      <h2 class="text-[0.55rem] font-card mt-1 ">NAME</h2>
                    </div>

                    <h2 class="text-[1.5rem] font-card tracking-wider font-bold my-2 ">
                      MEMBERSHIP CARD
                    </h2>

                    <div class="flex gap-4 mb-3">
                      <div>
                        <div class="px-4 py-0.5 bg-black">
                          <h2 class="text-[#b2b6bb] text-sm font-stark font-semibold">
                            {{ Auth::user()->usertag }}                         </h2>
                        </div>
                        <h2 class="text-[0.55rem] font-card mt-1 ">
                          MEMBER NO
                        </h2>
                      </div>
                      <div>
                        <div class="px-4 py-0.5 bg-black">
                          <h2 class="text-[#b2b6bb] text-[#b2b6bb] text-sm font-stark font-semibold">
                            {{ Auth::user()->created_at->format('Y') }}
                          </h2>
                        </div>
                        <h2 class="text-[0.55rem] font-card mt-1 ">SINCE</h2>
                      </div>
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                      <div class="flex items-center text-[0.55rem] font-card space-x-1  ">
                        <h2 class="text-[0.6rem] ">THE HV CLUB</h2>
                        <div>
                          <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.42218 1.14744L1.29524 1.40461C1.21649 1.56416 1.06355 1.6741 0.887225 1.69792L0.528993 1.7463C0.118472 1.80175 -0.075896 2.28272 0.180843 2.60782L0.274507 2.72642C0.376875 2.85605 0.4135 3.02544 0.374937 3.18605C0.228198 3.79719 0.0181865 4.72527 0.0181865 4.94597C0.0181865 5.16675 0.963804 4.49879 1.62416 3.99503C1.79376 3.86564 2.02329 3.84557 2.21098 3.94697L2.37367 4.03486C2.7841 4.25661 3.25937 3.87605 3.13274 3.42706C3.08309 3.25103 3.12809 3.06183 3.25168 2.927L3.59169 2.55608C3.90615 2.21302 3.6628 1.65982 3.19742 1.65982H2.96675C2.76318 1.65982 2.57725 1.54425 2.48715 1.3617L2.38139 1.14744C2.18519 0.749943 1.61837 0.749942 1.42218 1.14744Z" fill="#010101" />
                          </svg>
                        </div>
                        <h2 class="text-[0.6rem] ">61 STEVE BEVERLY HILLS</h2>
                        <h2 class="text-[0.6rem] ml-2 ">JD</h2>
                      </div>
                      <div><button id="viewCardDetailsButton" class="px-2 py-1 rounded-md duration-200 bg-[#b6eafa48] hover:bg-[#95c2d048] text-[10px] font-semibold text-[#00000054] hover:text-[#2f606e] border border-[#ffffff16]"> view card details </button></div>
                    </div>
                  </div>


                </div>
              </div>



              <div id="alternateCard" class="hidden lg:block card-container border h-full lg:w-[23.5rem] rounded-lg px-4 py-3 relative" style="background: url('/vamp.jpeg') center center/cover no-repeat; display: none;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.55); border-radius: 0.5rem; z-index: 1;"></div>
                <div class="relative z-10 text-white">
                  <div class="w-full">
                    <div class="flex justify-between">
                      <h2 class="font-bold text-xs uppercase ">Hollywood Vampires Portal</h2>
                      <h2 class="font-bold text-xs ">JO0052023</h2>
                    </div>

                    <div class="h-8 mt-2 mb-2">
                      <img src="assets/img/Rectangle-5.svg" />
                    </div>
                    <div class="flex space-x-3 items-center">
                      <div class="">
                        <div>
                          <h2 class="text-[1.3rem] font-card ">
                            2867 6768 3918 8902                           </h2>
                        </div>

                        <div class="flex space-x-4 mt-2">
                          <div>
                            <h2 class="text-[0.5rem] font-card font-semibold ">
                              VALID THRU
                            </h2>
                            <h2 class="text-xl font-card ">11/28</h2>
                          </div>

                          <div>
                            <h2 class="text-[0.5rem] font-card font-semibold ">
                              SEC
                            </h2>
                            <h2 class="text-xl font-card ">815</h2>
                          </div>

                          <div>
                            <h2 class="text-[0.5rem] font-card font-semibold ">
                              ACTIVE
                            </h2>
                            <h2 class="text-xl font-card ">2024</h2>
                          </div>
                        </div>

                        <div class="mt-1">
                          <img src="assets/img/barcode.svg" class="w-[10rem]" />
                        </div>
                      </div>
                      
                    </div>

                    <div class="flex justify-between items-center mb-3">
                      <h2 class="font-bold text-[0.7rem] uppercase mt-1 ">
                      thehollywoodvampiresportal.com
                      </h2>
                      <div><button id="backToOriginalButton" class=" px-2 py-1 rounded-md duration-200 bg-[#b6eafa48] hover:bg-[#95c2d048] text-[10px] font-semibold text-[#00000054] hover:text-[#2f606e] border border-[#ffffff16]"> view card details </button></div>
                    </div>
                  </div>
                </div>
              </div>


              <script>
                // Initial state
                let isAlternateCardVisible = false;

                // Function to toggle between cards
                function toggleCards() {
                  const membershipCard = document.getElementById('membershipCard');
                  const alternateCard = document.getElementById('alternateCard');

                  // Toggle opacity for a smooth transition
                  membershipCard.style.opacity = isAlternateCardVisible ? 1 : 0;
                  alternateCard.style.opacity = isAlternateCardVisible ? 0 : 1;

                  // Toggle visibility of the cards after the transition ends
                  setTimeout(() => {
                    membershipCard.style.display = isAlternateCardVisible ? 'none' : 'block';
                    alternateCard.style.display = isAlternateCardVisible ? 'block' : 'none';
                  }, 500); // Set the timeout to match the transition duration
                  isAlternateCardVisible = !isAlternateCardVisible;
                }

                // Event listener for the "View Card Details" button
                document.getElementById('viewCardDetailsButton').addEventListener('click', toggleCards);

                // Event listener for the "Back to Original Card" button
                document.getElementById('backToOriginalButton').addEventListener('click', toggleCards);
              </script>
            </div>
            <div class="h-fit rounded-lg py-3 pl-4 lg:pl-6 bg-[#F6EEE7] pr-3 flex items-center justify-between mt-7 mb-3">
              <div class="flex items-center space-x-2">
              
              <svg class="w-10"  viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="27.5" cy="27.5" r="27.5" fill="#FF7A7A"/>
<path d="M27.377 20.6505V31.0099" stroke="#FEF2F2" stroke-width="2.15259" stroke-linecap="round"/>
<circle cx="27.3771" cy="34.1939" r="1.07629" fill="#FEF2F2"/>
<circle cx="27.5568" cy="27.5568" r="11.4805" stroke="#FEF2F2" stroke-width="2.15259"/>
</svg>

              
                <h2 class="text-sm font-medium lg:text-base text-tertiary">
                  You have a regular membership access only
                </h2>
              </div>
              <div>
                <a href="membership"> <button class="hidden lg:block bg-secondary hover:bg-[#601c1c]  duration-200 text-primary px-16 py-3 font-medium rounded-lg">
                    Upgrade membership
                  </button></a>
              </div>
            </div>

            <a href="membership"> <button class="lg:hidden bg-secondary hover:bg-[#4b3227] duration-200 text-primary px-16 w-full py-3 font-medium rounded-lg">
  Upgrade membership
</button> </a>            
       

            <div class="h-fit rounded-lg p-6 lg:p-8 border bg-white mt-7 flex flex-wrap ">
              <div class="flex items-center space-x-2">
              <svg class="w-5" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect y="0.846191" width="18" height="17.3077" rx="3" fill="#231813"/>
<path d="M4 7.70933H13.9997L10.1763 5.35645" stroke="white" stroke-width="1.17644" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 9.9999H4.00026L7.82369 12.3528" stroke="white" stroke-width="1.17644" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


                <h2 class="font-semibold text-xl text-dark">Activity</h2>
                </div>
                <hr class="border-2 my-4 w-full " />
                <div class="overflow-x-auto w-full ">
                 @forelse($activities as $activity)
                  <div class="flex gap-x-5 lg:px-5 justify-between w-fit overflow-auto lg:overflow-visible mb-2">
                     <div class="lg:w-[30rem] ">
                       <h2 class="text-base text-dark font-medium whitespace-normal w-[18rem] ">{{ $activity->description }}</h2>
                       <span class="text-sm">{{ $activity->time }}</span>
                     </div>
                     <div class="flex items-center gap-x-2">
                       <h2 class="font-semibold">{{ ucfirst($activity->status) }}</h2>
                       @if($activity->status === 'deposited')
                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <rect width="24" height="24" rx="4" fill="#009E40" fill-opacity="0.1"/>
                         <path d="M14.1429 17L7 17M7 17L7 9.85714M7 17L17 7" stroke="#009E40" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                       @endif
                     </div>
                  </div>
                  <hr class="border my-3 w-screen lg:w-full" />
                 @empty
                  <div class="text-gray-500 px-5 py-3">No recent activities.</div>
                 @endforelse
                </div>
            </div>
          </div>
          <div class="pb-3 px-3 hidden lg:block">
            <div class="w-[22rem] pt-8 pb-4 h-fit border rounded-xl bg-[#F6EEE7]">
              <div><img src="assets/img/cards.png" class="shaodow-xl" /></div>
                <div class="flex">
                  <a href="membership" class="bg-gradient-to-r from-[#6c2828] to-[#231813] hover:bg-[#6c5042] duration-200 text-white px-20 mx-auto  py-3 font-medium rounded-lg">
                    Upgrade membership
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
  </main>
@include('user.footer')
</body>

</html>