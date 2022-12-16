<!DOCTYPE html>
<html lang="en"  x-data="{dark:false}" class="" :class="dark ? 'dark' : ''">
<head>
    {{-- Head Tags --}}
        @include('admin.layout.head')
        @yield('head')

</head>
<body dir="rtl">
    <section class="bg-gray-200 h-screen w-full flex duration-300 transition-all" x-data="{drawer:true}">
        <section :class="drawer ? 'w-2/12' : 'w-max-auto'">
            @include('admin.layout.sidebar')
        </section>
        <section  :class="drawer ? 'w-10/12' : 'w-full'">
            <section class=" bg-gray-50">
                @include('admin.layout.header')
            </section>
            <section class=" bg-gray-200 dark:bg-red-900">
                @yield('content')
            </section>
        </section>
    </section>





    {{-- Script Section --}}
        @include('admin.layout.scripts')
        @yield('scripts')

</body>
</html>
