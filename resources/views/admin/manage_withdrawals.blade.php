
@include('admin.header')
@include('admin.navbar')

<!-- Page Header -->
<div class="page-header">
    <div>
        <nav class="breadcrumb">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="separator">/</span>
            <span class="current">Manage Withdrawals</span>
        </nav>
        <h1 class="page-title">Manage Withdrawals</h1>
        <p class="page-subtitle">View and manage all withdrawal requests</p>
    </div>
    <div class="page-header-actions">
        <a href="{{ route('admin.dashboard') }}" class="btn-admin btn-admin-secondary">
            <i class="bi bi-arrow-left"></i>
            Back to Dashboard
        </a>
    </div>
</div>

<!-- Withdrawals Table -->
<div class="admin-card">
    <div class="admin-card-header">
        <h3 class="admin-card-title">
            <i class="bi bi-wallet2"></i>
            Withdrawal Requests
        </h3>
        <span style="color: var(--admin-text-muted); font-size: 14px;">
            {{ count($withdrawals) }} withdrawals found
        </span>
    </div>
    <div class="admin-card-body" style="padding: 0;">
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Requested At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $withdrawal->id }}</td>
                        <td>
                            @if($withdrawal->user)
                                @if(!empty($withdrawal->user->first_name) || !empty($withdrawal->user->last_name))
                                    {{ trim($withdrawal->user->first_name . ' ' . $withdrawal->user->last_name) }}
                                @else
                                    {{ $withdrawal->user->email }}
                                @endif
                            @else
                                N/A
                            @endif
                        </td>
                        <td><strong>${{ number_format($withdrawal->amount, 2) }}</strong></td>
                        <td>
                            @if($withdrawal->status == 'pending' || $withdrawal->status == 0)
                                <span class="status-badge pending">Pending</span>
                            @elseif($withdrawal->status == 'approved' || $withdrawal->status == 1)
                                <span class="status-badge active">Approved</span>
                            @elseif($withdrawal->status == 'declined' || $withdrawal->status == 2)
                                <span class="status-badge inactive">Declined</span>
                            @else
                                <span class="status-badge">Unknown</span>
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('M j, Y g:i A') }}</td>
                        <td>
                            @if($withdrawal->status == 'pending' || $withdrawal->status == 0)
                            <form action="{{ route('admin.withdrawal.approve', $withdrawal->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>
                            <form action="{{ route('admin.withdrawal.decline', $withdrawal->id) }}" method="POST" style="display:inline-block; margin-left: 5px;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                            </form>
                            @else
                            <span class="text-muted">No actions</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="bi bi-wallet2"></i>
                                </div>
                                <div class="empty-state-title">No withdrawals found</div>
                                <div class="empty-state-text">There are no withdrawal requests yet.</div>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.footer')
