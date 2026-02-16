@include('user.header')
    <div class="lg:pl-[5rem] lg:p-4 lg:ml-64 bg-[#7c573a12]">
      <div class="container px-4 py-[3rem]">
        <div class="bg-gradient-to-r from-[#7c573a] to-[#231813] h-[12rem] right-0 top-0 absolute w-full ">

        
        </div>
        <div class="mb-10 mt-[10rem]">
          <div class="flex items-center space-x-1">
            <h2 class="text-3xl font-bold font-inter text-[#231813]">
              {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}           </h2>
          </div>

          <div class="flex space-x-6 mt-5">
            <div>
              <span class="text-xs">Membership</span>
              <p class="text-xl font-semibold">{{ Auth::user()->membership_type ?? 'Regular' }}</p>
            </div>
            <div>
              <span class="text-xs">Account ID</span>
              <p class="text-xl font-semibold">{{ Auth::user()->usertag ?? 'N/A' }}</p>
            </div>
          </div>
          <div class="mt-6 flex gap-4">
            <a href="#" class="bg-[#7c573a] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#231813]">Edit Profile</a>
            <a href="#" class="bg-[#231813] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#7c573a]">Change Password</a>
          </div>
        </div>

        <div class="">
          <div class="max-w-4xl">
            <div class="h-fit mt-16">
              <div class="container mx-auto my-8">
                <form class="space-y-6" action="#" method="POST">
                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-4 lg:space-x-8">
                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">First Name</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->first_name }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>

                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">Last Name</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->last_name }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>
                  </div>

                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-4 lg:space-x-8">
                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">Email</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->email }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>

                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">Phone No.</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->phone ?? '' }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>
                  </div>

                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-4 lg:space-x-8">
                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">Country</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->country ?? '' }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>

                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">City</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->city ?? '' }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>
                  </div>

                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-4 lg:space-x-8">
                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">Address</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->address ?? '' }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>

                    <div>
                      <label class="block text-xs font-medium leading-6 text-gray-900">Postal code</label>
                      <div class="mt-1">
                        <input type="text" disabled value="{{ Auth::user()->postal_code ?? '' }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
                      </div>
                    </div>
                  </div>

                  <div></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div></div>

    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
  </main>

  <script src="dist/flowbite.js"></script>

  <script src="assets/core.js"></script>



</body>

</html>