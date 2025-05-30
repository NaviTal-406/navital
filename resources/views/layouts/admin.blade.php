<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <!-- title -->
    <title>Medical | Admin</title>

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body>

    <header
        class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full bg-white transition-all py-3.5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        {{-- <img src="/assets/images/logo-dark.png" class="h-8 logo-dark" alt="Logo Dark">
                        <img src="/assets/images/logo-light.png" class="h-8 logo-light" alt="Logo Light"> --}}
                        <img src="/assets/images/logonavital.png" alt="logonavital" class="w-10">
                        <h1 class="text-biru text-2xl font-bold">
                            navital
                        </h1>
                    </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block mx-auto grow">
                    <ul id="navbar-navlist"
                        class="grow flex flex-col lg:flex-row lg:items-center lg:justify-center mt-4 lg:mt-0">
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-black hover:text-biru"
                                href="{{ route('dashboard.dashboard') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <rect id="Rectangle-7" fill="currentColor" x="4" y="4" width="7"
                                                height="7" rx="1.5"></rect>
                                            <path
                                                d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-black hover:text-biru transition-all"
                                href="{{ route('dashboard.category.index') }}">
                                <span class="shrink-0 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M28 10H4a2.002 2.002 0 0 1-2-2V4a2.002 2.002 0 0 1 2-2h24a2.002 2.002 0 0 1 2 2v4a2.002 2.002 0 0 1-2 2M4 4v4h24V4zm24 26H4a2.002 2.002 0 0 1-2-2v-4a2.002 2.002 0 0 1 2-2h24a2.002 2.002 0 0 1 2 2v4a2.002 2.002 0 0 1-2 2M4 24v4h24v-4zm24-4H4a2.002 2.002 0 0 1-2-2v-4a2.002 2.002 0 0 1 2-2h24a2.002 2.002 0 0 1 2 2v4a2.002 2.002 0 0 1-2 2M4 14v4h24v-4z"/>
                                    </svg>
                                </span>
                                <span class="grow">Category</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-black hover:text-biru transition-all"
                                href="{{ route('dashboard.hospital.index') }}">
                                <span class="shrink-0 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                        <g fill="none">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="4" d="M11 26v18h26V26L24 13z"/>
                                            <path fill="currentColor" d="M3.586 21.586a2 2 0 1 0 2.828 2.828zM24 4l1.414-1.414a2 2 0 0 0-2.828 0zm17.586 20.414a2 2 0 1 0 2.828-2.828zm-35.172 0l19-19l-2.828-2.828l-19 19zm16.172-19l19 19l2.828-2.828l-19-19z"/>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 31h10m-5-5v10"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">Health Facility</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-black hover:text-biru transition-all"
                                href="{{ route('dashboard.layanan.index') }}">
                                <span class="shrink-0 me-2">
                                    <!-- Ikon Layanan -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="24" height="24">
                                        <path d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
                                    </svg>
                                </span>
                                <span class="grow">Layanan</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-black hover:text-biru transition-all"
                                href="{{ route('dashboard.dokter.index') }}">
                                <span class="shrink-0 me-2">
                                    <!-- Ikon Dokter -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="22" height="22">
                                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1l0 50.8c27.6 7.1 48 32.2 48 62l0 40c0 8.8-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l0-24c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 24c8.8 0 16 7.2 16 16s-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16l0-40c0-29.8 20.4-54.9 48-62l0-57.1c-6-.6-12.1-.9-18.3-.9l-91.4 0c-6.2 0-12.3 .3-18.3 .9l0 65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7l0-59.1zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/>
                                    </svg>
                                </span>
                                <span class="grow">Dokter</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-black hover:text-biru transition-all"
                                href="{{ route('dashboard.user.index') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                                        <g fill="none">
                                            <path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/>
                                            <path fill="currentColor" d="M6 7a5 5 0 1 1 10 0A5 5 0 0 1 6 7m-1.178 7.672C6.425 13.694 8.605 13 11 13c.447 0 .887.024 1.316.07a1 1 0 0 1 .72 1.557A5.968 5.968 0 0 0 12 18c0 .92.207 1.79.575 2.567a1 1 0 0 1-.89 1.428L11 22c-2.229 0-4.335-.14-5.913-.558c-.785-.208-1.524-.506-2.084-.956C2.41 20.01 2 19.345 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69ZM16 18a1 1 0 0 1 1-1h.99c.558 0 1.01.452 1.01 1.01v2.124A1 1 0 0 1 18.5 22h-.49A1.01 1.01 0 0 1 17 20.99V19a1 1 0 0 1-1-1m2-4a1 1 0 0 0-.117 1.993l.119.007a1 1 0 0 0 .117-1.993z"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">User</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>

                <div class="block grow ms-auto lg:shrink me-4 lg:me-0">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-end lg:justify-center">
                        <!-- Inner Page Dropdown -->
                        <li class="nav-item">
                            <a href="javascript:void(0);"
                                class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                                data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                                data-fc-placement="bottom">
                                <div class="flex items-center">
                                    <div class="shrink">
                                        {{-- <div class="h-8 w-8 me-2">
                                            <img src="/assets/images/avatars/img-1.jpg"
                                                class="avatar h-full w-full rounded-full me-2" alt="">
                                        </div> --}}
                                    </div>
                                    <div class="hidden lg:block grow ms-1 leading-normal">
                                        <span class="block text-sm text-biru font-medium">{{  Auth::user()->name  }}</span>
                                        <span class="block text-gray-400 text-xs">{{ Auth::user()->roles  }}</span>
                                    </div>
                                </div>
                            </a>

                            <div id="innerPageDropdownMenu"
                                class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-blue-50 transition-all">
                                    <a class="flex items-center text-black hover:text-biru !p-2" href="{{ route('dashboard.dashboard') }}">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings icon icon-xxs me-1 icon-dual">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </div>
                                <hr class="-mx-2 my-2">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-red-50 transition-all">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="text-black !p-2 flex items-center hover:text-red-700" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-unlock icon icon-xxs me-1 icon-dual">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                            </svg>
                                            Sign Out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                        <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- footer start -->
    <section class="bg-white py-6 relative">
        <div class="container">
            <div class="flex items-center flex-wrap">
                <div class="grow">
                    <div class="flex items-center gap-3">
                        <div>
                            <a href="https://www.facebook.com/fathi.adlikhalafah">
                                <svg class="w-5 h-5 text-gray-500 hover:text-biru transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/fathikhlfh/?hl=en">
                                <svg class="w-5 h-5 text-gray-500 hover:text-biru transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8"/><path d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m17.5 6.51l.01-.011">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://www.linkedin.com/in/fathiadlikhalafah/">
                                <svg class="w-5 h-5 text-gray-500 hover:text-biru transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-biru text-sm font-bold">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        © Navital. All rights reserved. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>

</html>
