<!DOCTYPE html>
<html lang="en"  data-theme="halloween" dir="rtl">
<head>
    @include('site.layouts.headertags')
    @livewireStyles

</head>
<body class="bg-slate-900">

    <div class="bg-slate-100">
        <div class=" ">
            @include('site.layouts.header')
        </div>
    </div>

    <div>
        @yield('body')
    </div>

    <div class="bg-slate-800 py-5">
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
