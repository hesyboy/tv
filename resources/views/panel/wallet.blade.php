@extends('panel.layouts.master')

@section('body1')




{{-- Page Cointent --}}



<div class=" bg-slate-800 w-full p-2 rounded-box">


    <div class="p-3 ">
        <div class="p-4 bg-slate-900 rounded-xl flex justify-between items-center">

            <div class="text-base">
                <ul class="flex gap-1 text-gray-400 items-center">
                    <li>
                        <span>پنل کاربری</span>
                    </li>
                    <li class="flex items-center justify-center text-gray-500">
                        <ion-icon name="chevron-forward-outline"></ion-icon>                    </li>
                    <li>
                        <span class="text-primary">کیف پول </span>
                    </li>
                </ul>
            </div>

            <div class="flex gap-3">
                <a href="#" class="flex items-center gap-3 text-sm text-slate-400 bg-slate-800  py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                    <ion-icon name="bag-add" class="text-3xl"></ion-icon>

                    <span> شارژ کیف پول</span>
                </a>
                <a href="#" class="flex items-center gap-3 text-sm text-slate-400 bg-slate-800  py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                    <ion-icon name="bag-remove" class="text-3xl"></ion-icon>
                    <span> برداشت از کیف پول   </span>
                </a>
                <a href="#" class="flex items-center gap-3 text-sm text-slate-400 bg-slate-800  py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                    <ion-icon name="arrow-redo" class="text-3xl"></ion-icon>
                    <span> واریز به دیگران  </span>
                </a>
            </div>


        </div>
    </div>


        <div class="p-3 flex flex-col gap-5">

            <div class="flex gap-5">

                <div class="w-2/5 flex flex-col items-center justify-center gap-2">

                    <a href="#" class="w-full flex justify-between items-center gap-5 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                        <div class="flex flex-col gap-2">
                            <span class="text-base">Toman / تومان</span>
                            <span class="text-3xl text-slate-400"> 2,000,000</span>
                        </div>
                        <ion-icon name="wallet" class="text-5xl"></ion-icon>
                    </a>

                    <a href="#" class="w-full flex justify-between items-center gap-5 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                        <div class="flex flex-col gap-2">
                            <span class="text-base">USDT / تـتر</span>
                            <span class="text-3xl text-slate-400"> 153</span>
                        </div>
                        <ion-icon name="wallet" class="text-5xl"></ion-icon>
                    </a>
                </div>

                <div class="divider divider-horizontal"></div>


                <div class="w-3/5 flex flex-col gap-1 items-center justify-between ">
                    <div class="w-full flex justify-between items-center py-2 px-4 bg-slate-900 hover:bg-gray-900  rounded-xl text-slate-400  text-base transition-all duration-300">
                        <div class="flex flex-col gap-3">
                            <div class="text-sm">
                                لینک واریز به کیف پول شما
                            </div>
                            <div>
                                <div>
                                    http://127.0.0.1:8000/panel/wallet
                                </div>
                            </div>
                        </div>
                        <div class="tooltip cursor-pointer" data-tip="Copy Link">
                            <ion-icon name="copy-outline" class="text-3xl"></ion-icon>
                        </div>
                    </div>
                </div>








            </div>


            <div class="flex flex-col gap-2">

                <div class=" rounded-box border-slate-900 overflow-hidden ">
                    <table class=" w-full  rounded-2xl">
                      <!-- head -->
                      <thead class="bg-slate-900 font-medium text-sm text-slate-400 ">
                        <tr>
                          <th class="py-3 font-medium text-right"></th>
                          <th class="py-5 font-medium text-right"> عملیات</th>
                          <th class="py-5 font-medium text-right"> مقدار</th>
                          <th class="py-5 font-medium text-right">موجودی</th>
                          <th class="py-3 font-medium text-right">تاریخ </th>
                          <th class="py-3 font-medium text-right"> وضعیت</th>
                          <th class="py-3 font-medium text-right w-44"></th>
                        </tr>
                      </thead>
                      <tbody class="rounded-2xl overflow-hidden">
                        <!-- row 1 -->
                        <tr class="text-sm text-slate-400 font-medium hover:bg-slate-700 border-b-2 border-slate-900">
                          <th class="px-2 py-4 text-right font-medium">1</th>
                          <td class="px-1 py-2 text-right font-medium">شارژ کیف پول  </td>
                          <th class="px-2 py-4 text-right font-medium">100 </th>
                          <th class="px-2 py-4 text-right font-medium">
                            <div>
                                2،000،000 تومان
                            </div>
                            <div>
                                12 تتر
                            </div>
                          </th>
                          <td class="px-1 py-2 text-right font-medium">امروز</td>
                          <td class="px-1 py-2 text-right font-medium">تکمیل شده </td>
                          <td class="px-1 py-2 text-right font-medium">
                            <a href="#" class=" flex items-center justify-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4 rounded-xl hover:scale-95 transition-all duration-300">
                                <ion-icon name="receipt" class="text-xl"></ion-icon>
                                <span> مشاهده جزییات </span>
                            </a>
                          </td>
                        </tr>


                      </tbody>
                    </table>
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
