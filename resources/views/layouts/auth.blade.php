<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">

<head>
    @include('layouts.meta')
    <link href="/css/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    {{-- Dark Mode --}}
    @include('layouts.dark')
    {{-- End Dark Mode --}}


    <main class="form-signin w-100 m-auto">
        {{ $slot }}
    </main>
    <script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>
