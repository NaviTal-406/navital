<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    @include('includes.meta')

    <!-- title -->
    <title>Medical | @yield('title', 'Home')</title>

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body class="flex flex-col min-h-full">

    {{-- @include('sweetalert::alert') --}}

    <!-- Fixed navbar with proper spacing -->
    <header class="fixed top-0 left-0 right-0 z-50">
        @include('includes.navbar')
    </header>

    <!-- Main content with padding for fixed navbar -->
    <main class="flex-grow pt-16">
        @yield('content')
    </main>

    <!-- Footer always at bottom -->
    <footer>
        @include('includes.footer')
    </footer>

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>

</html>
