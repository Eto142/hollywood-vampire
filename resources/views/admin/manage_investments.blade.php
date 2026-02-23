
@include('admin.header')
@include('admin.navbar')
				<!-- Sidebar wrapper end -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Main header starts -->
					<div class="main-header d-flex align-items-center justify-content-between position-relative">
						<div class="d-flex align-items-center justify-content-center">
							<div class="page-icon">
								<i class="bi bi-window-split"></i>
							</div>
							<div class="page-title d-none d-md-block">
								<h5>Data Tables</h5>
							</div>
						</div>

					</div>
					<!-- Main header ends -->

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gx-3">
	<div class="col-sm-12 col-12">
		<!-- Card start -->
		<div class="card">
			<div class="card-header">
				<div class="card-title">Investment History</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="highlightRowColumn" class="table custom-table">
						<thead>
							<tr>
								<th>User</th>
								<th>Plan</th>
								<th>Amount (USD)</th>
								<th>Status</th>
								<th>Date</th>
								<th>Action</th>
								</tr>
								</thead>
						<tbody>
							@foreach($user_investment as $investment)
							<tr>
								<td>{{ $investment->user ? $investment->user->first_name . ' ' . $investment->user->last_name : 'N/A' }}</td>
								<td>{{ $investment->plan }}</td>
								<td>${{ number_format($investment->amount, 2, '.', ',') }}</td>
								<td>
									@if($investment->status == 0)
										<span class="badge bg-warning">Pending</span>
									@elseif($investment->status == 1)
										<span class="badge bg-success">Approved</span>
									@else
										<span class="badge bg-secondary">Unknown</span>
									@endif
								</td>
								<td>{{ $investment->created_at ? $investment->created_at->format('D, M j, Y g:i A') : '' }}</td>
								<td>
									@if($investment->status == 0)
									<form action="{{ route('admin.investments.approve', $investment->id) }}" method="POST" style="display:inline-block;">
										@csrf
										<button type="submit" class="btn btn-success btn-sm">Approve</button>
									</form>
									<form action="{{ route('admin.investments.decline', $investment->id) }}" method="POST" style="display:inline-block; margin-left: 5px;">
										@csrf
										<button type="submit" class="btn btn-danger btn-sm">Decline</button>
									</form>
									@else
									<span class="text-muted">No Action</span>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Card end -->
	</div>
</div>


						

						
								<!-- Card end -->

								<!-- Card end -->
							</div>
						</div>
				
						</div>
				<!-- Content wrapper scroll end -->

				

				@include('admin.footer')