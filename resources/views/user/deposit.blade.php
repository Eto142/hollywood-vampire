@extends('user.header')
@section('content')
<div class="container mx-auto max-w-lg py-10">
    <div class="bg-white rounded-lg shadow p-8">
        <h2 class="text-2xl font-bold mb-4">Deposit Funds</h2>
        <form method="POST" action="{{ route('deposit.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Amount</label>
                <input type="number" name="damount" min="1" required class="w-full border rounded px-3 py-2" placeholder="Enter amount">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Select Payment Method</label>
                <select name="doption" required class="w-full border rounded px-3 py-2">
                    <option value="">Select</option>
                    <option value="bitcoin">Bitcoin (BTC)</option>
                    <option value="ethereum">Ethereum (ETH)</option>
                    <option value="usdt">USDT (Tether)</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-[#3E2D1C] text-white py-2 rounded font-semibold">Continue</button>
        </form>
    </div>
</div>
@endsection
