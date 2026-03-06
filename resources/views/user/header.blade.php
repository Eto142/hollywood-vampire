




<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Overview - Dashboard</title>
  <link href="dist/output.css" rel="stylesheet" />
  <link href="dist/main.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/vintage-display" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background: url('/images/227787735_xl.jpg') center center/cover repeat; background-size: cover; min-width: 100vw;">
  <main class="font-inter">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
    </button>
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-[19rem] h-full pt-[4.5rem] transition-transform -translate-x-full lg:translate-x-0 md:pt-[3rem] overflow-y-auto" aria-label="Sidebar" style="background: url('/images/WEBSITE_BKGRND_MUSIC.jpg') center center/cover no-repeat;">
    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.55);"></div>
    <div class="px-3 pl-14 pb-10 relative" style="position: relative; z-index: 1;">
        <img src="/images/HV_LOGO_RED_HORIZONTAL.png" class="w-[10rem] rounded-lg" />
    </div>
    <div class="h-full pb-4 overflow-y-auto dark:bg-gray-800 relative z-10">
        <ul class="space-y-2">
            <span class="text-white text-xs pl-14 px-8">My tools</span>
            <li>
                <a href="{{ route('home') }}" class="">
                    <div class="flex items-center rounded-lg  px-7 pl-14 py-3.5 text-white bg-[#ffffff33] font-semibold  hover:bg-[#ffffff15] duration-200">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.85" d="M9.85148 0.204175C9.67846 0.0818122 9.4471 0.0818121 9.27407 0.204175L0.818718 6.1839C0.686203 6.27762 0.607422 6.42983 0.607422 6.59213V18.5C0.607422 18.7761 0.831279 19 1.10742 19H5.70452C5.98066 19 6.20452 18.7761 6.20452 18.5V12.1111C6.20452 11.835 6.42838 11.6111 6.70452 11.6111H12.421C12.6972 11.6111 12.921 11.835 12.921 12.1111V18.5C12.921 18.7761 13.1449 19 13.421 19H18.0181C18.2943 19 18.5181 18.7761 18.5181 18.5V6.59213C18.5181 6.42983 18.4394 6.27762 18.3068 6.1839L9.85148 0.204175Z" fill="white"/>
                        </svg>
                        <span class="ms-3">Overview</span>
                    </div>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('my-account') }}" class="">
                    <div class="flex items-center rounded-lg px-7 pl-14 py-3.5 text-white hover:bg-[#ffffff15] duration-200">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="white" fill-opacity="0.2"/>
                            <path d="M10 11.5C12.4853 11.5 14.5 13.5147 14.5 16H5.5C5.5 13.5147 7.51472 11.5 10 11.5ZM10 10C11.3807 10 12.5 8.88071 12.5 7.5C12.5 6.11929 11.3807 5 10 5C8.61929 5 7.5 6.11929 7.5 7.5C7.5 8.88071 8.61929 10 10 10Z" fill="white"/>
                        </svg>
                        <span class="ms-3">My Account</span>
                    </div>
                </a>
            </li> --}}

            <li>
                <a href="{{ route('membership') }}" class="">
                    <div class="flex items-center rounded-lg px-7 py-3.5 pl-14 text-white  hover:bg-[#ffffff15]  duration-200">

<svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.45454C0 1.09894 1.09894 0 2.45455 0H24.5455C25.9011 0 27 1.09894 27 2.45455V14.7273C27 16.0829 25.9011 17.1818 24.5455 17.1818H2.45455C1.09894 17.1818 0 16.0829 0 14.7273V2.45454ZM6.4533 4.72256C6.62619 4.19047 7.37896 4.19047 7.55185 4.72256L8.25061 6.87313C8.32793 7.11109 8.54968 7.2722 8.79988 7.2722H11.0611C11.6206 7.2722 11.8532 7.98812 11.4006 8.31698L9.57121 9.6461C9.36879 9.79317 9.28409 10.0538 9.3614 10.2918L10.0602 12.4424C10.2331 12.9745 9.62405 13.4169 9.17142 13.0881L7.34204 11.759C7.13962 11.6119 6.86553 11.6119 6.66311 11.759L4.83373 13.0881C4.3811 13.4169 3.7721 12.9745 3.94498 12.4424L4.64374 10.2918C4.72106 10.0538 4.63636 9.79317 4.43394 9.6461L2.60456 8.31698C2.15194 7.98812 2.38456 7.2722 2.94403 7.2722H5.20527C5.45547 7.2722 5.67722 7.11109 5.75454 6.87313L6.4533 4.72256ZM14.666 3.76471C14.1137 3.76471 13.666 4.21242 13.666 4.76471C13.666 5.31699 14.1137 5.76471 14.666 5.76471H22.896C23.4482 5.76471 23.896 5.31699 23.896 4.76471C23.896 4.21242 23.4482 3.76471 22.896 3.76471H14.666ZM13.666 8.8075C13.666 8.25521 14.1137 7.8075 14.666 7.8075H22.896C23.4482 7.8075 23.896 8.25521 23.896 8.8075C23.896 9.35978 23.4482 9.8075 22.896 9.8075H14.666C14.1137 9.8075 13.666 9.35978 13.666 8.8075ZM14.666 11.7059C14.1137 11.7059 13.666 12.1536 13.666 12.7059C13.666 13.2582 14.1137 13.7059 14.666 13.7059H22.896C23.4482 13.7059 23.896 13.2582 23.896 12.7059C23.896 12.1536 23.4482 11.7059 22.896 11.7059H14.666Z" fill="white"/>
</svg>

                        <span class="ms-3">Membership</span>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('support') }}" class="">
                    <div class="flex items-center rounded-lg px-7 py-3.5 pl-14 text-white  hover:bg-[#ffffff15]  duration-200">

<svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.85" d="M10.8 20V18.3333H21V9.88889C21 8.81481 20.75 7.78241 20.25 6.79167C19.75 5.80093 19.08 4.92593 18.24 4.16667C17.4 3.40741 16.44 2.80093 15.36 2.34722C14.28 1.89352 13.16 1.66667 12 1.66667C10.84 1.66667 9.72 1.89352 8.64 2.34722C7.56 2.80093 6.6 3.40741 5.76 4.16667C4.92 4.92593 4.25 5.80093 3.75 6.79167C3.25 7.78241 3 8.81481 3 9.88889V16.6667H2.4C1.74 16.6667 1.175 16.4491 0.705 16.0139C0.235 15.5787 0 15.0556 0 14.4444V12.2222C0 11.7963 0.11 11.4213 0.33 11.0972C0.55 10.7731 0.84 10.5093 1.2 10.3056L1.29 8.83333C1.47 7.48148 1.885 6.25926 2.535 5.16667C3.185 4.07407 3.995 3.14815 4.965 2.38889C5.935 1.62963 7.025 1.04167 8.235 0.625C9.445 0.208333 10.7 0 12 0C13.32 0 14.585 0.208333 15.795 0.625C17.005 1.04167 18.09 1.63426 19.05 2.40278C20.01 3.1713 20.815 4.09722 21.465 5.18056C22.115 6.26389 22.53 7.47222 22.71 8.80556L22.8 10.25C23.16 10.4167 23.45 10.662 23.67 10.9861C23.89 11.3102 24 11.6667 24 12.0556V14.6111C24 15.0185 23.89 15.3796 23.67 15.6944C23.45 16.0093 23.16 16.25 22.8 16.4167V18.3333C22.8 18.7917 22.6237 19.184 22.2712 19.5104C21.9187 19.8368 21.495 20 21 20H10.8ZM8.4 11.9444C8.16 11.9444 7.95 11.8611 7.77 11.6944C7.59 11.5278 7.5 11.3287 7.5 11.0972C7.5 10.8657 7.59 10.6713 7.77 10.5139C7.95 10.3565 8.165 10.2778 8.415 10.2778C8.665 10.2778 8.875 10.3576 9.045 10.5174C9.215 10.6771 9.3 10.875 9.3 11.1111C9.3 11.3333 9.21375 11.5278 9.04125 11.6944C8.86875 11.8611 8.655 11.9444 8.4 11.9444ZM15.6 11.9444C15.36 11.9444 15.15 11.8611 14.97 11.6944C14.79 11.5278 14.7 11.3287 14.7 11.0972C14.7 10.8657 14.79 10.6713 14.97 10.5139C15.15 10.3565 15.365 10.2778 15.615 10.2778C15.865 10.2778 16.075 10.3576 16.245 10.5174C16.415 10.6771 16.5 10.875 16.5 11.1111C16.5 11.3333 16.4137 11.5278 16.2412 11.6944C16.0688 11.8611 15.855 11.9444 15.6 11.9444ZM4.83 10.5C4.75 9.40741 4.915 8.41667 5.325 7.52778C5.735 6.63889 6.285 5.88426 6.975 5.26389C7.665 4.64352 8.46 4.16667 9.36 3.83333C10.26 3.5 11.16 3.33333 12.06 3.33333C13.88 3.33333 15.41 3.86574 16.65 4.93056C17.89 5.99537 18.65 7.32407 18.93 8.91667C17.05 8.89815 15.395 8.43056 13.965 7.51389C12.535 6.59722 11.43 5.40741 10.65 3.94444C10.33 5.44444 9.655 6.77315 8.625 7.93056C7.595 9.08796 6.33 9.94444 4.83 10.5Z" fill="white"/>
</svg>


                        <span class="ms-3">Support</span>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('activity-log') }}" class="">
                    <div class="flex items-center rounded-lg px-7 py-3.5 pl-14 text-white  hover:bg-[#ffffff15]  duration-200">

<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.85">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.87997C0 1.28941 1.2894 0 2.87997 0H21.12C22.7106 0 24 1.2894 24 2.87997V4.56V5.55264C24 6.33726 23.5433 7.0501 22.8304 7.37799L22.442 7.55666C20.8952 8.2682 21.0524 10.5157 22.6833 11.005C23.4648 11.2394 24 11.9588 24 12.7747V13.68V15.36C24 16.9506 22.7106 18.24 21.12 18.24H2.87997C1.28941 18.24 0 16.9506 0 15.36V13.68V12.6864C0 11.9149 0.484944 11.2268 1.21142 10.9673C2.69477 10.4376 2.85576 8.40387 1.47423 7.64732L1.05906 7.41996C0.406032 7.06235 0 6.37707 0 5.63254V4.56V2.87997ZM5.27974 6.72C5.27974 5.92472 5.92445 5.28002 6.71973 5.28002H17.2797C18.075 5.28002 18.7197 5.92472 18.7197 6.72C18.7197 7.51528 18.075 8.15998 17.2797 8.15998H6.71973C5.92445 8.15998 5.27974 7.51528 5.27974 6.72ZM6.71973 10.08C5.92445 10.08 5.27974 10.7247 5.27974 11.52C5.27974 12.3153 5.92445 12.96 6.71973 12.96H17.2797C18.075 12.96 18.7197 12.3153 18.7197 11.52C18.7197 10.7247 18.075 10.08 17.2797 10.08H6.71973Z" fill="white"/>
</g>
</svg>



                        <span class="ms-3">Activity Log</span>

                    </div>
                </a>
            </li>

            <li>

                <button aria-controls="dropdown" data-collapse-toggle="dropdown" class="flex items-center w-full pl-14 px-7 py-3.5 text-white  hover:bg-[#ffffff15]  duration-200">

<svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.625 17C4.23611 17 3.89583 16.8796 3.60417 16.6388C3.3125 16.3979 3.11806 16.0863 3.02083 15.7038L2.08333 11.9H12.9167L11.9792 15.7038C11.8819 16.0863 11.6875 16.3979 11.3958 16.6388C11.1042 16.8796 10.7639 17 10.375 17H4.625ZM7.5 5.1C7.5 3.68333 7.98611 2.47917 8.95833 1.4875C9.93056 0.495833 11.1111 0 12.5 0C12.5 1.275 12.1042 2.38 11.3125 3.315C10.5208 4.25 9.52778 4.81667 8.33333 5.015V6.8H15V9.35C15 9.8175 14.8368 10.2177 14.5104 10.5506C14.184 10.8835 13.7917 11.05 13.3333 11.05H1.66667C1.20833 11.05 0.815972 10.8835 0.489583 10.5506C0.163194 10.2177 0 9.8175 0 9.35V6.8H6.66667V5.015C5.47222 4.81667 4.47917 4.25 3.6875 3.315C2.89583 2.38 2.5 1.275 2.5 0C3.88889 0 5.06944 0.495833 6.04167 1.4875C7.01389 2.47917 7.5 3.68333 7.5 5.1Z" fill="#E2ECF0"/>
</svg>




                    <span class="ms-3">Investments</span>
                    <svg class="ml-6 w-5 text-white" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L7.5 7.5L13 2" stroke="#C8B2A1" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                </button>
                <ul id="dropdown" class="hidden pl-9 py-2 space-y-2">
                    <li>
                        <a href="{{ route('overview') }}" class="flex items-center rounded-lg px-7 pl-14  py-2 text-white  hover:bg-[#ffffff15]  duration-200">Overview</a>
                    </li>
                    <li>
                        <a href="{{ route('plan') }}" class="flex items-center rounded-lg px-7 pl-14 py-2 text-white  hover:bg-[#ffffff15]  duration-200">Plans</a>
                    </li>
                    <li>
                        <a href="{{ route('history') }}" class="flex items-center rounded-lg px-7 pl-14 py-2 text-white  hover:bg-[#ffffff15]  duration-200">History</a>
                    </li>

                </ul>

            </li>

        </ul>



        <ul class="mt-[3.2rem]">
            <li>
                <a href="my-account" class="">
                    <div class="flex items-center rounded-lg px-7 py-2 pl-14 text-white  hover:bg-[#ffffff33]  duration-200">

                        <img src="assets/img/profile.svg" class="w-10" />
                        <span class="ms-3 text-sm">My account</span>

                    </div>
                </a>
            </li>
            <li>
                <div class="rounded-lg px-7 py-2 pl-14 text-[#ffffff79]">
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center px-3 py-2 bg-[#ffffff15] rounded w-fit text-white">
                            <span class="ms-3 text-sm flex items-center gap-2">Logout
                                <svg class="w-5" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 5H12.5" stroke="white" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 0.5H1V9.5H6" stroke="white" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 3L12.5 5L10 7" stroke="white" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</aside>