        <!-- Success Modal for Plan Page -->
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Success',
                        text: @json(session('success')),
                        icon: 'success',
                        background: '#7F1D1D',
                        color: '#fff',
                        confirmButtonColor: '#7F1D1D',
                        customClass: {
                            popup: 'swal2-border-radius'
                        }
                    });
                });
            </script>
        @endif
@include('user.header')
        <div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
            <div class="container">

            </div>
            <div class="container px-4 pt-2 pb-[3rem] ">
                <div class="">
                    <div class=" py-12 px-9 rounded-lg bg-[rgba(134,15,15,0.1)]">
                        <div class="flex items-center space-x-1 mb-2">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.625 17C4.23611 17 3.89583 16.8796 3.60417 16.6388C3.3125 16.3979 3.11806 16.0863 3.02083 15.7038L2.08333 11.9H12.9167L11.9792 15.7038C11.8819 16.0863 11.6875 16.3979 11.3958 16.6388C11.1042 16.8796 10.7639 17 10.375 17H4.625ZM7.5 5.1C7.5 3.68333 7.98611 2.47917 8.95833 1.4875C9.93056 0.495833 11.1111 0 12.5 0C12.5 1.275 12.1042 2.38 11.3125 3.315C10.5208 4.25 9.52778 4.81667 8.33333 5.015V6.8H15V9.35C15 9.8175 14.8368 10.2177 14.5104 10.5506C14.184 10.8835 13.7917 11.05 13.3333 11.05H1.66667C1.20833 11.05 0.815972 10.8835 0.489583 10.5506C0.163194 10.2177 0 9.8175 0 9.35V6.8H6.66667V5.015C5.47222 4.81667 4.47917 4.25 3.6875 3.315C2.89583 2.38 2.5 1.275 2.5 0C3.88889 0 5.06944 0.495833 6.04167 1.4875C7.01389 2.47917 7.5 3.68333 7.5 5.1Z" fill="#0F6286"/>
</svg>


                            <h2 class="text-2xl font-semibold font-inter text-[#460e0e]">
                                Investments

                            </h2>

                        </div>
                        <p class="text-xs text-zinc-500">
                            View, select or upgrade your investments plan
                        </p>
                    </div>

                    <div class=" py-12 px-9  ">
                        <div class="flex items-center space-x-1 mb-2">


                            <h2 class="text-3xl font-bold font-inter text-[#460e0e]">
                                Investment Plans

                            </h2>

                        </div>
                        <p class="text-xs text-zinc-500">
                            These are the available plans, you can invest and get monthly/yearly
                        </p>
                    </div>
                </div>
                <div class=" ">
                    <div class="  rounded-xl">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-x-3 gap-y-4">
                            <!-- Plan 1 -->
                            <div class="border rounded-md">

                                <div class=" text-center py-4 bg-[rgba(134,15,15,0.11)]">
                                    <h2 class="text-[rgba(84,41,41,0.8)] font-semibold">Regular</h2>
                                </div>

                                <div class="flex mt-5 py-3  justify-center text-[rgba(41,69,84,0.82)]">
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">10%</h2>
                                        <p class="text-xs"> ROI</p>
                                    </div>
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">6 Months</h2>
                                        <p class="text-xs">Term </p>
                                    </div>
                                </div>

                                <div class="px-10 text-[rgba(84,41,41,0.8)] ">
                                    <hr class="mt-3 mb-5" />
                                    <div class="flex justify-between ">
                                        <p class="text-xs">Min Deposit</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> $5,000 </p>
                                    </div>



                                    <hr class="mt-3 mb-3" />

                                    <div class="flex justify-between">
                                        <p class="text-xs">Capital Return</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> Each Month </p>
                                    </div>


                                </div>
                                <div class="mt-4 px-1.5 py-1.5">
                                    <button data-modal-target="plan-modal" data-modal-toggle="plan-modal" class="bg-[#460e0e] rounded-md text-sm font-semibold text-white text-center py-4 border w-full">
                                        Choose plan
                                    </button>


                                    <!-- Main modal -->
                                    <div id="plan-modal" tabindex="-1" aria-hidden="true" class="px-4 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
                                        <div class="relative w-screen  max-w-lg">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] ">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                                                    <div>
                                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                            Subscribe to plan
                                                        </h3>
                                                        <p class="text-xs">Please fill in the fields to place order</p>
                                                    </div>
                                                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="plan-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                                                                        <style>
                                                        .alert-class {
                                                            background-color: #052634;
                                                            color: #fefefe;
                                                            /* Add any other styles you want to customize */
                                                        }
                                                    </style>
                                                    <script id="your-custom-svg" type="text/template">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#your-desired-color">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 6L9 17l-5-5" fill="currentColor"/>
  </svg>
</script>


                                                    <form class="space-y-4" method="post" action="{{ route('user.investments.store') }}">
                                                        @csrf
                                                        <div class="relative">
                                                            <input type="number" name="amount" id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required min="5000" />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                                            <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                        </div>

                                                        <input type="text" name="plan" value="Regular" readonly class="block rounded-lg px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 border appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                                        <input type="hidden" name="status" value="0">

                                                        <div class="relative mb-10">
                                                            <input type="text" disabled value="${{ number_format($balance->wallet_balance ?? 0, 2) }}" id="balance_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full  text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#C98C61]">*Please ensure your balance is unlocked</p>
                                                            <label for="balance_filled" class="px-4 absolute text-sm  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Account Balance (Available)</label>
                                                        </div>
                                                        <div class="pt-6">
                                                            <button type="submit" name="inv-subr" class="w-full text-white bg-[#460e0e] duration-200 hover:bg-[#0F6286d6] font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Place request</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <!-- /Plan 1 -->



                            <!-- Plan 2 -->
                            <div class="border rounded-md">

                                <div class=" text-center py-4 bg-[rgba(134,15,15,0.11)]">
                                    <h2 class="text-[rgba(84,41,41,0.8)] font-semibold">Silver</h2>
                                </div>

                                <div class="flex mt-5 py-3  justify-center text-[rgba(41,69,84,0.82)]">
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">15%</h2>
                                        <p class="text-xs"> ROI</p>
                                    </div>
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">1 Year</h2>
                                        <p class="text-xs">Term</p>
                                    </div>
                                </div>

                                <div class="px-10 text-[rgba(84,41,41,0.8)] ">
                                    <hr class="mt-3 mb-5" />
                                    <div class="flex justify-between ">
                                        <p class="text-xs">Min Deposit</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> $25,000 </p>
                                    </div>



                                    <hr class="mt-3 mb-3" />

                                    <div class="flex justify-between">
                                        <p class="text-xs">Capital Return</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> Each Month </p>
                                    </div>


                                </div>
                                <div class="mt-4 px-1.5 py-1.5">
                                    <button data-modal-target="plan-modal2" data-modal-toggle="plan-modal2" class="bg-[#460e0e] rounded-md text-sm font-semibold text-white text-center py-4 border w-full">
                                        Choose plan
                                    </button>


                                    <!-- Main modal -->
                                    <div id="plan-modal2" tabindex="-1" aria-hidden="true" class="px-4 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
                                        <div class="relative w-screen  max-w-lg">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] ">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                                                    <div>
                                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                            Subscribe to plan
                                                        </h3>
                                                        <p class="text-xs">Please fill in the fields to place order</p>
                                                    </div>
                                                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="plan-modal2">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                                                                        <style>
                                                        .alert-class {
                                                            background-color: #052634;
                                                            color: #fefefe;
                                                            /* Add any other styles you want to customize */
                                                        }
                                                    </style>
                                                    <script id="your-custom-svg" type="text/template">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#your-desired-color">
<path d="M0 0h24v24H0z" fill="none"/>
<path d="M20 6L9 17l-5-5" fill="currentColor"/>
</svg>
</script>


                                                    <form class="space-y-4" method="post" action="{{ route('user.investments.store') }}">
                                                        @csrf
                                                        <div class="relative">
                                                            <input type="number" name="amount" id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required min="25000" />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                                            <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                        </div>

                                                        <input type="text" name="plan" value="Silver" readonly class="block rounded-lg px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 border appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                                        <input type="hidden" name="status" value="0">

                                                        <div class="relative mb-10">
                                                            <input type="text" disabled value="${{ number_format($balance->wallet_balance ?? 0, 2) }}" id="balance_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full  text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#C98C61]">*Please ensure your balance is unlocked</p>
                                                            <label for="balance_filled" class="px-4 absolute text-sm  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Account Balance (Available)</label>
                                                        </div>
                                                        <div class="pt-6">
                                                            <button type="submit" name="inv-subs" class="w-full text-white bg-[#460e0e] duration-200 hover:bg-[#0F6286d6] font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Place request</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <!-- /Plan 2 -->




                            <!-- Plan 3 -->
                            <div class="border rounded-md">

                                <div class=" text-center py-4 bg-[rgba(134,15,15,0.11)]">
                                    <h2 class="text-[rgba(84,41,41,0.8)] font-semibold">Gold</h2>
                                </div>

                                <div class="flex mt-5 py-3  justify-center text-[rgba(41,69,84,0.82)]">
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">20%</h2>
                                        <p class="text-xs"> ROI</p>
                                    </div>
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">2 Years</h2>
                                        <p class="text-xs">Term</p>
                                    </div>
                                </div>

                                <div class="px-10 text-[rgba(84,41,41,0.8)] ">
                                    <hr class="mt-3 mb-5" />
                                    <div class="flex justify-between ">
                                        <p class="text-xs">Min Deposit</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> $50,000 </p>
                                    </div>



                                    <hr class="mt-3 mb-3" />

                                    <div class="flex justify-between">
                                        <p class="text-xs">Capital Return</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> Each Month </p>
                                    </div>


                                </div>
                                <div class="mt-4 px-1.5 py-1.5">
                                    <button data-modal-target="plan-modal3" data-modal-toggle="plan-modal3" class="bg-[#460e0e] rounded-md text-sm font-semibold text-white text-center py-4 border w-full">
                                        Choose plan
                                    </button>


                                    <!-- Main modal -->
                                    <div id="plan-modal3" tabindex="-1" aria-hidden="true" class="px-4 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
                                        <div class="relative w-screen  max-w-lg">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] ">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                                                    <div>
                                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                            Subscribe to plan
                                                        </h3>
                                                        <p class="text-xs">Please fill in the fields to place order</p>
                                                    </div>
                                                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="plan-modal3">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                                                                        <style>
                                                        .alert-class {
                                                            background-color: #052634;
                                                            color: #fefefe;
                                                            /* Add any other styles you want to customize */
                                                        }
                                                    </style>
                                                    <script id="your-custom-svg" type="text/template">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#your-desired-color">
<path d="M0 0h24v24H0z" fill="none"/>
<path d="M20 6L9 17l-5-5" fill="currentColor"/>
</svg>
</script>


                                                    <form class="space-y-4" method="post" action="{{ route('user.investments.store') }}">
                                                        @csrf
                                                        <div class="relative">
                                                            <input type="number" name="amount" id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required min="50000" />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                                            <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                        </div>

                                                        <input type="text" name="plan" value="Gold" readonly class="block rounded-lg px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 border appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                                        <input type="hidden" name="status" value="0">

                                                        <div class="relative mb-10">
                                                            <input type="text" disabled value="${{ number_format($balance->wallet_balance ?? 0, 2) }}" id="balance_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full  text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#C98C61]">*Please ensure your balance is unlocked</p>
                                                            <label for="balance_filled" class="px-4 absolute text-sm  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Account Balance (Available)</label>
                                                        </div>
                                                        <div class="pt-6">
                                                            <button type="submit" name="inv-subg" class="w-full text-white bg-[#460e0e] duration-200 hover:bg-[#0F6286d6] font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Place request</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <!-- /Plan 3 -->



                            <!-- Plan 4 -->
                            <div class="border rounded-md">

                                <div class=" text-center py-4 bg-[rgba(134,15,15,0.11)]">
                                    <h2 class="text-[rgba(84,41,41,0.8)] font-semibold">Platinum</h2>
                                </div>

                                <div class="flex mt-5 py-3  justify-center text-[rgba(41,69,84,0.82)]">
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">25%</h2>
                                        <p class="text-xs"> ROI</p>
                                    </div>
                                    <div class="px-3">
                                        <h2 class="text-[1.4rem] font-bold">5 Years</h2>
                                        <p class="text-xs">Term</p>
                                    </div>
                                </div>

                                <div class="px-10 text-[rgba(84,41,41,0.8)] ">
                                    <hr class="mt-3 mb-5" />
                                    <div class="flex justify-between ">
                                        <p class="text-xs">Min Deposit</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> $150,000 </p>
                                    </div>



                                    <hr class="mt-3 mb-3" />

                                    <div class="flex justify-between">
                                        <p class="text-xs">Capital Return</p>
                                        <p class="text-xs"> - </p>
                                        <p class="text-xs"> Each Month </p>
                                    </div>


                                </div>
                                <div class="mt-4 px-1.5 py-1.5">
                                    <button data-modal-target="plan-modal4" data-modal-toggle="plan-modal4" class="bg-[#460e0e] rounded-md text-sm font-semibold text-white text-center py-4 border w-full">
                                        Choose plan
                                    </button>


                                    <!-- Main modal -->
                                    <div id="plan-modal4" tabindex="-1" aria-hidden="true" class="px-4 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
                                        <div class="relative w-screen  max-w-lg">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] ">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                                                    <div>
                                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                            Subscribe to plan
                                                        </h3>
                                                        <p class="text-xs">Please fill in the fields to place order</p>
                                                    </div>
                                                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="plan-modal4">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                                                                        <style>
                                                        .alert-class {
                                                            background-color: #052634;
                                                            color: #fefefe;
                                                            /* Add any other styles you want to customize */
                                                        }
                                                    </style>
                                                    <script id="your-custom-svg" type="text/template">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#your-desired-color">
<path d="M0 0h24v24H0z" fill="none"/>
<path d="M20 6L9 17l-5-5" fill="currentColor"/>
</svg>
</script>


                                                    <form class="space-y-4" method="post" action="{{ route('user.investments.store') }}">
                                                        @csrf
                                                        <div class="relative">
                                                            <input type="number" name="amount" id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required min="150000" />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                                            <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                        </div>

                                                        <input type="text" name="plan" value="Platinum" readonly class="block rounded-lg px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 border appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                                        <input type="hidden" name="status" value="0">

                                                        <div class="relative mb-10">
                                                            <input type="text" disabled value="${{ number_format($balance->wallet_balance ?? 0, 2) }}" id="balance_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full  text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <p class="text-xs px-5 mt-1.5 font-semibold text-[#C98C61]">*Please ensure your balance is unlocked</p>
                                                            <label for="balance_filled" class="px-4 absolute text-sm  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Account Balance (Available)</label>
                                                        </div>
                                                        <div class="pt-6">
                                                            <button type="submit" name="inv-subp" class="w-full text-white bg-[#460e0e] duration-200 hover:bg-[#0F6286d6] font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Place request</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <!-- /Plan 4 -->






                        </div>


                    </div>


                </div>
            </div>
        </div>

        <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
    </main>

    <script src="dist/flowbite.js"></script>

    <script src="assets/core.js"></script>
</body>

</html>