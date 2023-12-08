<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">

<head>
    @include('layouts.meta')
</head>

<body class="bg-body-tertiary">

    {{-- Dark Mode --}}
    @include('layouts.dark')
    {{-- End Dark Mode --}}

    {{-- Navbar --}}
    <x-navbar></x-navbar>
    {{-- End Navbar --}}

    {{-- Content --}}

    <main class="container">
        <div class="row">
            <div class="col-md-12">
                {{ $slot }}
            </div>
        </div>
    </main>
    {{-- End Content --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- End Footer --}}
</body>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/offcanvas-navbar.js"></script>

</html>
