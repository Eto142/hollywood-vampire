@include('user.header')
        <div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
            <div class="container">

            </div>
            <div class="container px-4 pt-2 pb-[3rem] ">
                <div class="">
                    <div class=" py-12 px-9 rounded-lg bg-[rgba(15,98,134,0.1)]">
                        <div class="flex items-center space-x-1 mb-2">
                            <svg class="w-[1.2rem] mr-1" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.625 17C4.23611 17 3.89583 16.8796 3.60417 16.6388C3.3125 16.3979 3.11806 16.0863 3.02083 15.7038L2.08333 11.9H12.9167L11.9792 15.7038C11.8819 16.0863 11.6875 16.3979 11.3958 16.6388C11.1042 16.8796 10.7639 17 10.375 17H4.625ZM7.5 5.1C7.5 3.68333 7.98611 2.47917 8.95833 1.4875C9.93056 0.495833 11.1111 0 12.5 0C12.5 1.275 12.1042 2.38 11.3125 3.315C10.5208 4.25 9.52778 4.81667 8.33333 5.015V6.8H15V9.35C15 9.8175 14.8368 10.2177 14.5104 10.5506C14.184 10.8835 13.7917 11.05 13.3333 11.05H1.66667C1.20833 11.05 0.815972 10.8835 0.489583 10.5506C0.163194 10.2177 0 9.8175 0 9.35V6.8H6.66667V5.015C5.47222 4.81667 4.47917 4.25 3.6875 3.315C2.89583 2.38 2.5 1.275 2.5 0C3.88889 0 5.06944 0.495833 6.04167 1.4875C7.01389 2.47917 7.5 3.68333 7.5 5.1Z" fill="#231813" />
                            </svg>

                            <h2 class="text-2xl font-semibold font-inter text-[#231813]">
                                Investments

                            </h2>

                        </div>
                        <p class="text-xs text-zinc-500">
                            View, select or upgrade your investments plan
                        </p>
                    </div>

                    <div class=" py-12 flex flex-col md:flex-row gap-x-6">
                        <div class=" bg-[#d3935218] items-center space-x-1 mb-2  pl-8 w-full py-6 rounded-md">


                            <h2 class="text-lg font-bold font-inter text-[#3E2D1C]">
                                Investment Account

                            </h2>

                            <h2 class="text-3xl font-bold font-inter text-[#3E2D1C] mt-4">
                                $10,000.00
                            </h2>
                            <p class="text-sm text-[#4b4b4ba4]">Gained Profits</p>


                            <div class="flex gap-x-3 mt-5">
                                <button data-modal-target="withdraw-modal" data-modal-toggle="withdraw-modal" class=" px-4 py-2 text-sm font-semibold rounded-md bg-[#FBD6B7] text-[#8C7864]"> Withdraw Funds</button>
                                <!-- Main modal -->
                                <div id="withdraw-modal" tabindex="-1" aria-hidden="true" class="px-2 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
                                    <div class="relative w-screen  max-w-lg">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] ">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                                                <div>
                                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                        Create Withdrawal request
                                                    </h3>
                                                    <p class="text-xs">Withdraw directly from your account</p>
                                                </div>
                                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="withdraw-modal">
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
                                                        background-color: #231813;
                                                        color: #fefefe;
                                                        /* Add any other styles you want to customize */
                                                    }
                                                </style>
                                                <form class="space-y-4" id="yourFormId" method="post" action="">
                                                    <div class="relative">
                                                        <input type="number" name="wamount" required id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                        <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                                        <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                    </div>

                                                    <div class="relative">
                                                        <p class="text-xs px-5 mt-1.5 font-semibold text-[#000000ca] mb-2">Withdrawal method</p>
                                                        <div class="flex space-x-2">
                                                            <!-- Button 1 -->
                                                            <div class="flex items-center space-x-2 text-xs px-5 text-[#231813] font-semibold  bg-white border border-[#0f62867a] rounded-md py-2.5 ">
                                                                <input type="radio" name="woption" required value="bank" class=" justify-center items-center gap-x-4" />
                                                                <span> Bank Account</span>
                                                            </div>

                                                            <!-- Button 2 -->
                                                            <div class="flex items-center space-x-2 text-xs px-5 text-[#C98C61] font-semibold  border border-[#c98c6176] rounded-md py-2.5">
                                                                <input type="radio" name="woption" required value="crypto" class="" />
                                                                <span>Crypto Wallet</span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="relative mb-10">
                                                        <input type="text" disabled value="$10,000" id="balance_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full  text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
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
                                <button data-modal-target="deposit-modal" data-modal-toggle="deposit-modal" class="border border-[#543729dd] px-4 py-2 text-sm font-semibold rounded-md text-[#8C7864]"> Deposit</button>
                                <div id="deposit-modal" tabindex="-1" aria-hidden="true" class="px-2 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
                                    <div class="relative w-screen  max-w-lg">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-3 py-[0.4rem] ">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">
                                                <div>
                                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                        Fund your account
                                                    </h3>
                                                    <p class="text-xs">Top up your account balance</p>
                                                </div>
                                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deposit-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                                                                <form class="space-y-4" method="post" action="">
                                                    <div class="relative">
                                                        <input type="number" name="damount" required id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                        <p class="text-xs px-5 mt-1.5 font-semibold text-[#0000007d]">*Your balance will be deducted upon confirmation</p>
                                                        <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                    </div>

                                                    <div class="relative">
                                                        <p class="text-xs px-5 mt-1.5 font-semibold text-[#000000ca] mb-2">Select Payment method</p>
                                                        <div class="relative">
                                                            <select name="doption" required id="floating_filled" class="block rounded-lg border px-5 pb-2.5 pt-6 w-full text-sm font-semibold text-gray-900 bg-gray-50 dark:bg-gray-700   appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                                                <option value="btc"> Bitcoin (BTC) </option>
                                                            </select>

                                                            <label for="floating_filled" class="px-4 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Enter amount</label>
                                                        </div>
                                                        <p class="text-xs px-5 mt-1.5 font-semibold text-[#C98C61]">*Your request will be received and placed under review</p>
                                                    </div>


                                                    <div class="pt-6">
                                                        <button type="submit" name="sub-depo" class="w-full text-[#FFF0E0] bg-[#3E2D1C] duration-200 hover:bg-[#3e2d1cd6] font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Place request</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=" bg-[#d3935218] items-center space-x-1 mb-2  pl-8 w-full py-6 rounded-md">


                            <h2 class="text-lg font-bold font-inter text-[#3E2D1C]">
                                Active Investments

                            </h2>
                            
                            <h2 class="text-3xl font-bold font-inter text-[#3E2D1C] mt-4">
                                $16,000                            </h2>
                            <p class="text-sm text-[#4b4b4ba4]">Amount currently invested</p>


                            <div class="flex gap-x-3 mt-5">
                                <a href="history" class=" px-4 py-2 text-sm font-semibold rounded-md bg-[#f8e5d4] text-[#8C7864]"> History </a>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="w-full  px-2 md:px-8  py-7 rounded-md ">
                    <div class="mb-10 px-4 ">
                        <h2 class="text-xl font-bold">Subscription History</h2>
                        <p class="text-sm">See the ongoing investments on your account </p>
                    </div>
                    <div class="overflow-x-scroll">
                        <table class="min-w-full bg-white  rounded-md overflow-hidden">
                            <thead class="">
                                <tr class=" text-left ">
                                    <th class="py-2 px-4 ">Plan</th>
                                    <th class="py-2 px-4 ">Status</th>
                                    <th class="py-2 px-4 ">Duration</th>
                                    <th class="py-2 px-4 ">Amount</th>
                                    <th class="py-2 px-4 ">Return</th>

                                </tr>
                            </thead>
                            <tbody>
                                  <tr class="text-sm  border-b ">
                          <td class="py-4 px-4 "><span>Regular</span> </td>
                          <td class="py-4 px-4  "><span style="background-color:#FFFFED; color:#fcbe03" class="px-4 py-2  rounded-md font-medium bg-[#fcad03]">Pending approval</span></td>
                          <td class="py-4 px-4  whitespace-nowrap">
                              <div class="flex gap-x-3 items-center">
                                  <div>
                                      <p>Start</p>
                                      <p class="font-semibold">Oct 09, 2025 </p>
                                  </div>

                                  <p class="font-semibold">-</p>


                                  <div>
                                      <p>End</p>
                                      <p class="font-semibold">Apr 09, 2026 </p>
                                  </div>
                              </div>
                          </td>
                          <td class="py-4 px-4 whitespace-nowrap">6,000 USD</td>
                          <td class="py-4 px-4 whitespace-nowrap">6,600 USD</td>

                      </tr>  <tr class="text-sm  border-b ">
                          <td class="py-4 px-4 "><span>Regular</span> </td>
                          <td class="py-4 px-4  "><span style="background-color:#FFFFED; color:#fcbe03" class="px-4 py-2  rounded-md font-medium bg-[#fcad03]">Pending approval</span></td>
                          <td class="py-4 px-4  whitespace-nowrap">
                              <div class="flex gap-x-3 items-center">
                                  <div>
                                      <p>Start</p>
                                      <p class="font-semibold">Oct 09, 2025 </p>
                                  </div>

                                  <p class="font-semibold">-</p>


                                  <div>
                                      <p>End</p>
                                      <p class="font-semibold">Apr 09, 2026 </p>
                                  </div>
                              </div>
                          </td>
                          <td class="py-4 px-4 whitespace-nowrap">10,000 USD</td>
                          <td class="py-4 px-4 whitespace-nowrap">11,000 USD</td>

                      </tr>

                            </tbody>
                        </table>
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