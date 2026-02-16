@include('user.header')
    <div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
      <div class="container px-4 py-[3rem]">
        <div class="mb-10">
          <div class="flex items-center space-x-1">
            <h2 class="text-2xl font-semibold font-inter text-[#231813]">
              Activity Log
            </h2>

          </div>
          <p class="text-xs text-zinc-500">
            Know what's going on in your account
          </p>
        </div>

        <div class="">
          <div class="max-w-4xl">
            <div class="h-fit rounded-lg p-6 lg:p-8 border bg-white mt-7">
              <div class="flex items-center space-x-2">
                <img src="assets/img/transaction.svg" class="w-6" />

                <h2 class="font-semibold text-xl text-dark">Activity</h2>
              </div>
              <hr class="border-2 my-4 w-full" />
              <div>
                @forelse($activities as $activity)
                    <div class="lg:px-5 mb-2 flex justify-between items-start">
    <div>
        <h2 class="text-base text-dark font-medium">{{ $activity->description }}</h2>
        <span class="text-sm block mb-1">{{ $activity->time }}</span>
    </div>
    <div class="flex items-center gap-x-2 mt-1">
        <h2 class="font-semibold">{{ $activity->status }}</h2>
        @if(strtolower($activity->status) === 'deposited' || strtolower($activity->type) === 'inflow')
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="4" fill="#009E40" fill-opacity="0.1"/>
                <path d="M14.1429 17L7 17M7 17L7 9.85714M7 17L17 7" stroke="#009E40" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        @elseif(strtolower($activity->type) === 'outflow')
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="4" fill="#dc3545" fill-opacity="0.1"/>
                <path d="M9.857 7L17 7M17 7L17 14.143M17 7L7 17" stroke="#dc3545" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        @endif
    </div>
</div>
                    <hr class="border my-3 w-full" />
                @empty
                    <div class="text-center text-zinc-500 py-6">No activities found.</div>
                @endforelse
            </div>
        </div>
    </div>

   
    </div>

    <div></div>

    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
  </main>

  <script src="dist/flowbite.js"></script>

  <script src="assets/core.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#example").DataTable({
        paging: true, // Disable pagination if needed
        searching: true, // Disable search box if needed
        info: false, // Disable showing info (e.g., "Showing 1 to 2 of 2 entries")
        lengthChange: false,
        ordering: false,
      });
    });
  </script>
</body>

</html>