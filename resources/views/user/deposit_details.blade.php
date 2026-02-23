@extends('user.header')
@section('content')
<div class="container mx-auto max-w-lg py-10">
    <div class="bg-white rounded-lg shadow p-8">
        <h2 class="text-2xl font-bold mb-4">Deposit Details</h2>
        <div class="mb-4">
            <span class="font-semibold">Amount:</span> ${{ number_format($deposit->amount, 2) }}
        </div>
        <div class="mb-4">
            <span class="font-semibold">Payment Method:</span> {{ ucfirst($deposit->method) }}
        </div>
        <div class="mb-6">
            <span class="font-semibold">Status:</span> @if($deposit->status == 0) <span class="text-yellow-600">Pending</span> @else <span class="text-green-600">Completed</span> @endif
        </div>
        @if($deposit->method === 'bitcoin')
            <div class="mb-4">
                <span class="font-semibold">Send BTC to:</span>
                <div class="bg-gray-100 rounded p-2 select-all">1BitcoinAddressExample...</div>
            </div>
        @elseif($deposit->method === 'ethereum')
            <div class="mb-4">
                <span class="font-semibold">Send ETH to:</span>
                <div class="bg-gray-100 rounded p-2 select-all">0xEthereumAddressExample...</div>
            </div>
        @elseif($deposit->method === 'usdt')
            <div class="mb-4">
                <span class="font-semibold">Send USDT to:</span>
                <div class="bg-gray-100 rounded p-2 select-all">TetherUSDTAddressExample...</div>
            </div>
        @endif
        <div class="mt-6">
            <a href="{{ route('overview') }}" class="text-blue-600 hover:underline">Back to Overview</a>
        </div>
    </div>
</div>
@endsection
