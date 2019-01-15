<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.elements.header')
<body>
    <div id="app">
        @include('partials.elements.navbar')
        <main class="py-4">
            @include('partials.elements.errors')
            @yield('content')
        </main>
    </div>
</body>
</html>
