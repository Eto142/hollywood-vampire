@include('user.header')
        <div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
            <div class="container px-4 py-[3rem]">
                <div class="flex flex-col lg:flex-row items-center lg:space-x-5 space-y-3 mb-10">
                    <h2 class="text-2xl font-bold font-inter text-[#231813]">
                        Upgrade Membership
                    </h2>

                </div>
                <div class="pt-6">
                    <div class="">
                        <div class="flex lg:w-full mb-4">
                            <div class=" max-w-3xl lg:py-10 lg:px-20 mx-auto">
                                                                  <div class="lg:w-[27rem]">

                                    <div class="flex items-center gap-x-6 rounded-xl py-6  px-10 bg-gradient-to-r from-[#B49137] to-[#CDAF45]">
                                        <div><svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="46.25" cy="46.25" r="46.25" fill="white" fill-opacity="0.2"/>
                                        <path d="M41.8514 27.4126C43.2359 23.1516 49.2641 23.1515 50.6486 27.4126L52.4803 33.0498C53.0994 34.9554 54.8752 36.2456 56.8789 36.2456H62.8062C67.2865 36.2456 69.1494 41.9788 65.5247 44.6123L60.7294 48.0962C59.1084 49.274 58.4301 51.3615 59.0493 53.2671L60.8809 58.9043C62.2654 63.1654 57.3884 66.7087 53.7638 64.0752L48.9685 60.5913C47.3475 59.4135 45.1525 59.4135 43.5315 60.5913L38.7362 64.0752C35.1116 66.7087 30.2346 63.1654 31.6191 58.9043L33.4507 53.2672C34.0699 51.3615 33.3916 49.274 31.7706 48.0962L26.9753 44.6123C23.3507 41.9788 25.2135 36.2456 29.6938 36.2456H35.6211C37.6248 36.2456 39.4006 34.9554 40.0197 33.0498L41.8514 27.4126Z" fill="#B49138"/>
                                        </svg>
                                        
                                        
                                        </div>



                                        <div class="text-left text-white"><span class="text-xs">Membership Level</span>
                                            <h2 class="text-4xl font-semibold">VVIP</h2>
                                        </div>

                                    </div>

                                    <div class="mt-3 items-center gap-x-6 rounded-xl py-6  px-10 border ">
                                        <div>
                                            <h2 class=" text-lg font-semibold">Membership Upgrade</h2>
                                            <p class="text-[0.75rem]">User tag - HV6759953</p>
                                            <hr class="border-2 mt-3" />
                                        </div>

                                        <div class="mt-10">
                                            <h2 class="text-xs text-[#1d1b1aa0]">Email</h2>
                                            <p class="text-[0.9rem]">{{ Auth::user()->email }}</p>
                                        </div>

                                        <div class="mt-4">
                                            <h2 class="text-xs text-[#1d1b1aa0]">Type:</h2>
                                            <p class="text-[0.9rem]"><span class="font-semibold">Regular</span> to <span class="font-semibold">VVIP</span></p>
                                        </div>

                                        <div class="mt-4">
                                            <h2 class="text-xs text-[#1d1b1aa0]">Due today:</h2>
                                            <p class="text-[0.9rem]">$45,000.00</p>
                                        </div>

                                    </div>

                                    <div class="mt-3">
                                    <form method="get" action="/upgrade-account.php"> 
                                    
                                    <input type="hidden" name="option" value="VVIP" />
                                    <input type="hidden" name="token" value="4gsf12" />
                                        <button name="sub-mem" type="submit" class=" w-full bg-gradient-to-r from-[#7B9CCE] to-[#231813] hover:bg-[#4b3227] duration-200 text-[#F6E9DD] px-16 py-4 font-medium rounded-lg">
                                            Upgrade my membership
                                        </button>
</form>

                                        <a href="membership"> <button class="mt-2 w-full bg-gradient-to-r from-[#ECECEC] hover:bg-[#a8a7a7] duration-200 text-[#9C9995] px-16 py-4 font-medium rounded-lg">
                                            Go back
                                        </button> </a>
                                    </div>
                                </div>
                            </div>

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