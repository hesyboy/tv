<!DOCTYPE html>
<html lang="en"  data-theme="mytheme" dir="rtl">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('site.layouts.headertags')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @livewireStyles

</head>
<body class="bg-white text-neutral">

    <div class="bg-slate-50 shadow-lg">
        <div class=" ">
            @include('site.layouts.header')
        </div>
    </div>

    <div>
        @yield('body')
        {{-- {{ $slot }} --}}
    </div>

    <div class="bg-primary py-5">
        <div class="container mx-auto">
            قیمن و نومودار های نحظه ای
        </div>
    </div>

    <div class="bg-slate-900">
        <div class="container mx-auto py-10">
            @include('site.layouts.footer')
        </div>

    </div>

    <div>
        @include('site.layouts.scripts')
        @livewireScripts
    </div>
</body>
</html>
