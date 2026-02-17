@include('user.header')
    <div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
      <div class="container px-4 py-[3rem]">
        <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-5 space-y-3 mb-10">
          <h2 class="text-2xl font-semibold font-inter text-[#231813]">
            Your Membership
          </h2>

          <div class="rounded-lg py-2 pl-4 lg:pl-4 bg-[#F6EEE7] pr-3 flex items-center justify-between"><div class="flex items-center space-x-2">
              <img src="assets/img/exclamation2.svg" class="w-8 lg:w-7" />
              @php
                $approvedUpgrade = \App\Models\MembershipUpgrade::where('user_id', Auth::id())->where('status', 1)->orderByDesc('id')->first();
                $currentMembership = $approvedUpgrade->new_membership ?? (Auth::user()->membership_type ?? 'basic');
              @endphp
              <h2 class="text-sm font-medium lg:text-base text-tertiary">
                You’re on a {{ $currentMembership }} membership plan
              </h2>
            </div> </div>          <div></div>
        </div>

        <div class="pt-6">
          <div class="">
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:w-fit mb-4">
                <div class="border pb-3 h-fit w-full xl:w-[22rem] rounded-lg bg-gray-50">
                <div class="bg-[rgb(15,98,134,0.1)] p-2">
                  <div class="font-medium text-white bg-[#AFAFAF] w-fit px-3 py-2 rounded-md">
                    <h2 class="">VIP Membership</h2>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">1</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <p class="text-sm">
                      VIPs get all the perks of a basic membership.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">2</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      Special Deals on Merch:
                    </h2>
                    <p class="text-sm">
                      Enjoy exclusive savings on celebrity gear to showcase your fandom.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">3</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      First Dibs on Tickets:
                    </h2>
                    <p class="text-sm">
                      Gain early access to event tickets for prime seating options.
                    </p>
                  </div>
                </div>
                <div class="px-3">
                  @php
                    $hasVip = \App\Models\MembershipUpgrade::where('user_id', Auth::id())->where('new_membership', 'VIP')->where('status', 1)->exists();
                  @endphp
                  @if(!$hasVip)
                  <a href="{{ url('vip-membership') }}"> <button class="bg-gradient-to-r from-[#1D1B1A] to-[#670505] w-full text-white px-16 py-3.5 mx-auto mt-5 font-medium rounded-lg">
                      Switch to VIP
                    </button> </a>
                  @endif
                </div>

                <div></div>
              </div>

              <div class="border pb-3 h-fit w-full xl:w-[22rem] rounded-lg bg-gray-50">
                <div class="bg-[rgb(193,160,63,0.1)] p-2">
                  <div class="font-medium text-white bg-gradient-to-r from-[#B49139] to-[#CDAF45] w-fit px-3 py-2 rounded-md">
                    <h2 class="">VVIP Membership</h2>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">1</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      All VIP Perks Included:
                    </h2>
                    <p class="text-sm">
                      VVIPs unlock everything from basic and VIP plans.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">2</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">Behind-the-Scenes Pass:</h2>
                    <p class="text-sm">
                      Explore backstage at select events for an insider experience.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">3</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      Star Photo Sessions:
                    </h2>
                    <p class="text-sm">
                      Capture moments with the celebrity at special events or shoots.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">4</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      Premium Content Access:
                    </h2>
                    <p class="text-sm">
                      Dive into exclusive videos, interviews, and unreleased goodies.
                    </p>
                  </div>
                </div>
                <div class="px-3">
                  @php
                    $hasVvip = \App\Models\MembershipUpgrade::where('user_id', Auth::id())->where('new_membership', 'VVIP')->where('status', 1)->exists();
                  @endphp
                  @if(!$hasVvip)
                  <a href="{{ url('vvip-membership') }}">
                    <button class="bg-gradient-to-r from-[#1D1B1A] to-[#670505] w-full text-white px-16 py-3.5 mx-auto mt-5 font-medium rounded-lg">
                      Switch to VVIP
                    </button> </a>
                  @endif
                </div>

                <div></div>
              </div>

              <div class="border pb-3 h-fit w-full xl:w-[22rem] rounded-lg bg-gray-50">
                <div class="bg-[rgb(145,105,81,0.2)] p-2">
                  <div class="font-medium text-white bg-gradient-to-r from-[#652E13] to-[#D9C8B6] w-fit px-3 py-2 rounded-md">
                    <h2 class="">Platinum Membership</h2>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">1</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      All VVIP Perks Included:
                    </h2>
                    <p class="text-sm">
                      Platinum members get everything from basic, VIP, and VVIP tiers.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">2</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      Exclusive Star Meetups:
                    </h2>
                    <p class="text-sm">
                      Enjoy private, one-on-one time with the celebrity for a unique connection.
                    </p>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">3</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      Private Jet Adventures
                    </h2>
                  </div>
                </div>

                <div class="flex mt-5 px-4 space-x-4">
                  <div class="px-4 py-2 h-10 bg-slate-200 rounded-md">
                    <h2 class="text-sm font-semibold">4</h2>
                  </div>
                  <div class="pr-10 align-self">
                    <h2 class="text-sm font-semibold">
                      Top-Tier Event Access:
                    </h2>
                    <p class="text-sm">
                      Get elite entry to special premieres and celebrity-linked parties.
                    </p>
                  </div>
                </div>
                <div class="px-3">
                  @php
                    $hasPlatinum = \App\Models\MembershipUpgrade::where('user_id', Auth::id())->where('new_membership', 'Platinum')->where('status', 1)->exists();
                  @endphp
                  @if(!$hasPlatinum)
                  <a href="{{ url('platinum-membership') }}"> <button class="bg-gradient-to-r from-[#1D1B1A] to-[#670505] w-full text-white px-16 py-3.5 mx-auto mt-5 font-medium rounded-lg">
                      Switch to Platinum
                    </button> </a>
                  @endif
                </div>

                <div></div>
              </div>            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
  </main>

@include('user.footer')
</body>

</html>