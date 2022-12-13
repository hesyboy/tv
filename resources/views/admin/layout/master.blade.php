<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Head Tags --}}
        @include('admin.layout.head')
        @yield('head')

</head>
<body dir="rtl" >

    <section class="bg-gray-200 h-screen w-full flex">
        <section class="w-2/12 bg-gray-100">
            @include('admin.layout.sidebar')
        </section>
        <section class="w-10/12 ">
            <section class=" bg-gray-100">
                @include('admin.layout.header')
            </section>
            <section class=" bg-gray-200">
                @yield('content')
            </section>
        </section>
    </section>





    {{-- Script Section --}}
        @include('admin.layout.scripts')
        @yield('scripts')

</body>
</html>
