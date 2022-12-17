@extends('panel.layouts.master')

@section('body1')




{{-- Page Cointent --}}



<div class=" bg-slate-800 w-full p-2 rounded-box">

    <div class=" p-3 ">
        <div class="p-4 bg-slate-900 rounded-xl">
            <div class="text-sm">
                <ul class="flex gap-1 text-gray-400 items-center">
                    <li>
                        <span>پنل کاربری</span>
                    </li>
                    <li class="flex items-center justify-center text-gray-500">
                        <ion-icon name="chevron-forward-outline"></ion-icon>                    </li>
                    <li>
                        <span class="text-primary">داشبورد</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>


        <div class="p-3 flex flex-col gap-5">

            <div class="grid grid-cols-4 gap-5">

                <div class="relative flex flex-col gap-3 items-center justify-between py-5 px-3 bg-slate-900  rounded-xl text-slate-300  hover:scale-95 text-base transition-all duration-300">
                    <ion-icon name="person-add" class="text-5xl text-emerald-600"></ion-icon>
                    <div class="flex items-center text-slate-400 ">
                        <span>عضویت در سایت    </span>
                    </div>
                    <div class="text-emerald-600 flex items-center gap-1 text-sm bg-slate-800 px-4 py-2 rounded-xl">
                        <span>انجام شده</span>
                    </div>
                    <div class="absolute top-0 left-0 p-1">
                        <div class="bg-slate-800 text-emerald-600 rounded-xl py-1 px-2 text-xs">
                            <span>10 امتیاز</span>
                        </div>
                    </div>
                </div>



                <div class="flex flex-col gap-3 items-center justify-between py-5 px-3 bg-slate-900  rounded-xl text-slate-300 hover:scale-95 text-base transition-all duration-300">
                    <ion-icon name="shield-checkmark" class="text-5xl"></ion-icon>
                    <div class="flex items-center text-slate-400">
                        <span>تایید قوانین سایت  </span>
                    </div>
                    <div class=" flex items-center gap-1 text-sm bg-slate-800 px-4 py-2 rounded-xl text-slate-400">
                        <span>انجام نشده</span>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-center justify-between py-5 px-3 bg-slate-900  rounded-xl text-slate-300 hover:scale-95 text-base transition-all duration-300">
                    <ion-icon name="chatbox-ellipses" class="text-5xl text-primary"></ion-icon>
                    <div class="flex items-center text-slate-400">
                        <span>تایید شماره همراه</span>
                    </div>
                    <div class="text-primary flex items-center gap-1 text-sm bg-slate-800 px-4 py-2 rounded-xl">
                        <span>در انتظار تایید </span>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-center justify-between py-5 px-3 bg-slate-900  rounded-xl text-slate-300 hover:scale-95 text-base transition-all duration-300">
                    <ion-icon name="finger-print" class="text-5xl"></ion-icon>
                    <div class="flex items-center text-slate-400">
                        <span>احراز هویت فردی  </span>
                    </div>
                    <div class=" flex items-center gap-1 text-sm bg-slate-800 px-4 py-2 rounded-xl text-slate-400">
                        <span>انجام شده</span>
                    </div>
                </div>




            </div>


            <div class="flex flex-col gap-2">

                <div class="bg-slate-900 p-3 rounded-xl flex gap-3 items-center">
                    <div class="flex w-28 items-center gap-3 text-slate-300  py-2 px-4 bg-slate-800 rounded-xl">
                        <ion-icon name="notifications-outline" class="text-3xl"></ion-icon>
                        <span class="text-sm">اطلاعیه</span>
                    </div>
                    <div class="text-slate-300 text-sm">
                        10% تخفیف به مناسبت افتتاح سایت به مدت 10 روز
                    </div>
                </div>

                <div class="bg-slate-900 p-3 rounded-xl flex gap-3 items-center">
                    <div class="flex w-28 items-center gap-3 text-slate-300  py-2 px-4 bg-slate-800 rounded-xl">
                        <ion-icon name="warning-outline" class="text-3xl"></ion-icon>
                        <span class="text-sm">توجه</span>
                    </div>
                    <div class="text-slate-300 text-sm">
                        10% تخفیف به مناسبت افتتاح سایت به مدت 10 روز
                    </div>
                </div>
            </div>

            {{-- <div class="w-full" dir="ltr">
                <ul class="steps w-full">
                    <li class="step step-primary">
                        <a href=""  class=" step-primary">
                            <span class="text-sm">تایید شماره همراه</span>
                        </a>
                    </li>
                    <li class="step">
                        <a href=""  class=" step-primary">
                            <span class="text-sm">تایید شماره همراه</span>
                        </a>
                    </li>
                    <li class="step">Choose plan</li>
                    <li class="step">Purchase</li>
                    <li class="step">Receive Product</li>
                </ul>
            </div> --}}

        </div>
</div>





@endsection
