@include('user.header')
<div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
    <div class="container px-4 py-[3rem]">

        <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-5 space-y-3 mb-10">
            <h2 class="text-2xl font-semibold font-inter text-[#231813]">Transaction History</h2>
        </div>

        {{-- Tabs --}}
        <div class="flex space-x-2 mb-6 border-b border-gray-200">
            <button onclick="showTab('deposits')" id="tab-deposits"
                class="tab-btn px-5 py-2 text-sm font-semibold border-b-2 border-[#231813] text-[#231813] focus:outline-none">
                Deposits
            </button>
            <button onclick="showTab('withdrawals')" id="tab-withdrawals"
                class="tab-btn px-5 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-400 focus:outline-none">
                Withdrawals
            </button>
            <button onclick="showTab('investments')" id="tab-investments"
                class="tab-btn px-5 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-400 focus:outline-none">
                Investments
            </button>
        </div>

        {{-- Deposits Table --}}
        <div id="panel-deposits">
            <div class="bg-white rounded-xl border overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-left text-xs text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4">Method</th>
                            <th class="px-6 py-4">Txn ID</th>
                            <th class="px-6 py-4">Amount</th>
                            <th class="px-6 py-4">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($deposits as $deposit)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $deposit->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 capitalize">{{ $deposit->method }}</td>
                            <td class="px-6 py-4 text-gray-400 text-xs">{{ $deposit->txid ?? '—' }}</td>
                            <td class="px-6 py-4 font-semibold">${{ number_format($deposit->amount, 2) }}</td>
                            <td class="px-6 py-4">
                                @if($deposit->status == 1)
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#e6ffed;color:#10b981">Confirmed</span>
                                @elseif($deposit->status == 2)
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#fff1f1;color:#ef4444">Rejected</span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#FFFFED;color:#fcbe03">Pending</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-400">No deposit records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Withdrawals Table --}}
        <div id="panel-withdrawals" class="hidden">
            <div class="bg-white rounded-xl border overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-left text-xs text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4">Method</th>
                            <th class="px-6 py-4">Details</th>
                            <th class="px-6 py-4">Amount</th>
                            <th class="px-6 py-4">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($withdrawals as $withdrawal)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $withdrawal->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 capitalize">{{ $withdrawal->method }}</td>
                            <td class="px-6 py-4 text-xs text-gray-500">
                                @if($withdrawal->method === 'bank')
                                    <div>{{ $withdrawal->bank_name }}</div>
                                    <div class="capitalize">{{ $withdrawal->account_type }} · {{ $withdrawal->account_number }}</div>
                                    @if($withdrawal->routing_number)
                                        <div>Routing: {{ $withdrawal->routing_number }}</div>
                                    @endif
                                @else
                                    <div class="capitalize">{{ $withdrawal->crypto_method }}</div>
                                    <div class="truncate max-w-[10rem]">{{ $withdrawal->wallet_address }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-semibold">${{ number_format($withdrawal->amount, 2) }}</td>
                            <td class="px-6 py-4">
                                @if($withdrawal->status == 1)
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#e6ffed;color:#10b981">Approved</span>
                                @elseif($withdrawal->status == 2)
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#fff1f1;color:#ef4444">Rejected</span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#FFFFED;color:#fcbe03">Pending</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-400">No withdrawal records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Investments Table --}}
        <div id="panel-investments" class="hidden">
            <div class="bg-white rounded-xl border overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-left text-xs text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4">Plan</th>
                            <th class="px-6 py-4">Amount</th>
                            <th class="px-6 py-4">Duration</th>
                            <th class="px-6 py-4">Est. Return</th>
                            <th class="px-6 py-4">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($investments as $investment)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $investment->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 font-medium">{{ $investment->plan }}</td>
                            <td class="px-6 py-4 font-semibold">${{ number_format($investment->amount, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                @if($investment->status == 1)
                                    {{ $investment->created_at->format('M d, Y') }} — {{ $investment->created_at->addMonths(6)->format('M d, Y') }}
                                @else
                                    —
                                @endif
                            </td>
                            <td class="px-6 py-4">${{ $investment->status == 1 ? number_format($investment->amount * 1.1, 2) : '—' }}</td>
                            <td class="px-6 py-4">
                                @if($investment->status == 1)
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#e6ffed;color:#10b981">Active</span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background:#FFFFED;color:#fcbe03">Pending</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-gray-400">No investment records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
function showTab(tab) {
    ['deposits', 'withdrawals', 'investments'].forEach(function(t) {
        document.getElementById('panel-' + t).classList.add('hidden');
        var btn = document.getElementById('tab-' + t);
        btn.classList.remove('border-[#231813]', 'text-[#231813]');
        btn.classList.add('border-transparent', 'text-gray-400');
    });
    document.getElementById('panel-' + tab).classList.remove('hidden');
    var activeBtn = document.getElementById('tab-' + tab);
    activeBtn.classList.remove('border-transparent', 'text-gray-400');
    activeBtn.classList.add('border-[#231813]', 'text-[#231813]');
}
</script>

<div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
</main>

@include('user.footer')
</body>
</html>
