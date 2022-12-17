@extends('panel.layouts.master')

@section('body1')


<div class="">






    <div class="mb-3 bg-white shadow rounded p-3">
        <div class="flex justify-between items-center">
            <div class="text-xl font-bold py-3">
                <span> آگهی های فروش پیج اینستاگرام</span>
                {{-- <span class="text-sm">( مجموع : {{count($Advertises)}} )</span> --}}
            </div>
            <div class="flex gap-3 items-center">

                <div>
                    <a class="text-base text-center py-2 px-4 bg-slate-800 text-white rounded hover:bg-orange-600 transition-all duration-500"
                 href="{{route('panel.page.create')}}">افزودن آگهی جدید</a>
                </div>

            </div>
        </div>
    </div>

    <div>
        @if (session('msg'))
            <div class="" x-data="{notify:true}">
                <div class=" mb-3" x-show="notify" x-transition>
                    <div class="p-3 text-sm bg-indigo-800 rounded border-b border-gray-200 text-white flex items-center gap-3 justify-between">
                        <div class=" flex items-center gap-3">
                            <ion-icon class="text-3xl p-2 bg-gray-100 rounded text-gray-800 " name="notifications-outline"></ion-icon>
                            <div class="">
                                {{session('msg')}}
                            </div>
                        </div>
                        <ion-icon @click="notify=false" class="text-3xl cursor-pointer text-gray-100" name="close"></ion-icon>
                    </div>
                </div>
            </div>
        @endif
    </div>


    <div class="grid grid-cols-4">
        @foreach ($pages as $item)
            <x-panel.page-card/>
        @endforeach
    </div>


</div>




@endsection
