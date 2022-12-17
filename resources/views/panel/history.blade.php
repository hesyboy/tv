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
                        <span class="text-primary">تاریخچه معاملات</span>
                    </li>
                </ul>
            </div>

            <div>
                <a href="#" class="flex items-center gap-3 text-sm text-slate-400 bg-slate-800  py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                    <ion-icon name="timer" class="text-3xl"></ion-icon>
                    <span> از ابتدا تا اکنون</span>
                </a>
            </div>


        </div>
    </div>


        <div class="p-3 flex flex-col gap-5">

            <div class="grid grid-cols-12 gap-5">

                <div class="col-span-4 flex flex-col gap-1 items-center justify-between py-5 px-3 bg-slate-900 hover:bg-gray-900  rounded-xl text-slate-300  hover:scale-95 text-base transition-all duration-300">
                    <div class=" flex items-center gap-1 text-3xl">
                        <span>27،000،000 </span>
                        <span class="text-xs">تومان</span>
                    </div>
                    <div class=" text-slate-400 text-lg">
                        <span>مجموع معاملات من </span>
                    </div>
                </div>

                <div class="col-span-4 flex flex-col gap-1 items-center justify-between py-5 px-3 bg-slate-900 hover:bg-gray-900 rounded-xl text-slate-300  hover:scale-95 text-base transition-all duration-300">
                    <div class=" flex items-center gap-1 text-3xl">
                        <span>13،000،000 </span>
                        <span class="text-xs">تومان</span>
                    </div>
                    <div class=" text-slate-400 text-lg">
                        <span>خرید ها   </span>
                    </div>
                </div>

                <div class="col-span-4 flex flex-col gap-1 items-center justify-between py-5 px-3 bg-slate-900 hover:bg-gray-900 rounded-xl text-slate-300  hover:scale-95 text-base transition-all duration-300">
                    <div class=" flex items-center gap-1 text-3xl">
                        <span>14،000،000 </span>
                        <span class="text-xs">تومان</span>
                    </div>
                    <div class=" text-slate-400 text-lg">
                        <span>فروش ها   </span>
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
                          <th class="py-5 font-medium text-right"> مقدار تتر (USDT)</th>
                          <th class="py-3 font-medium text-right">تاریخ معامله</th>
                          <th class="py-3 font-medium text-right">مبلغ (تومان)</th>
                          <th class="py-3 font-medium text-right w-44"></th>
                        </tr>
                      </thead>
                      <tbody class="rounded-2xl overflow-hidden">
                        <!-- row 1 -->
                        <tr class="text-sm text-slate-300 hover:bg-slate-700 border-b-2 border-slate-900">
                          <th class="px-2 py-4 text-right">1</th>
                          <td class="px-1 py-2 text-right">خرید  </td>
                          <th class="px-2 py-4 text-right">100 </th>
                          <td class="px-1 py-2 text-right">امروز</td>
                          <td class="px-1 py-2 text-right">4،000،000 </td>
                          <td class="px-1 py-2 text-right">
                            <a href="#" class=" flex items-center justify-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4 rounded-xl hover:scale-95 transition-all duration-300">
                                <ion-icon name="receipt" class="text-xl"></ion-icon>
                                <span> مشاهده جزییات </span>
                            </a>
                          </td>
                        </tr>
                        <!-- row 2 -->
                        <tr class="text-sm text-slate-300 hover:bg-slate-700 border-b-2 border-slate-900">
                            <th class="px-2 py-4 text-right">1</th>
                            <td class="px-1 py-2 text-right">خرید  </td>
                            <th class="px-2 py-4 text-right">100 </th>
                            <td class="px-1 py-2 text-right">امروز</td>
                            <td class="px-1 py-2 text-right">4،000،000 </td>
                            <td class="px-1 py-2 text-right">
                              <a href="#" class=" flex items-center justify-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4 rounded-xl hover:scale-95 transition-all duration-300">
                                  <ion-icon name="receipt" class="text-xl"></ion-icon>
                                  <span> مشاهده جزییات </span>
                              </a>
                            </td>
                          </tr>

                          <tr class="text-sm text-slate-300 hover:bg-slate-700 border-b-2 border-slate-900">
                            <th class="px-2 py-4 text-right">1</th>
                            <td class="px-1 py-2 text-right">خرید  </td>
                            <th class="px-2 py-4 text-right">100 </th>
                            <td class="px-1 py-2 text-right">امروز</td>
                            <td class="px-1 py-2 text-right">4،000،000 </td>
                            <td class="px-1 py-2 text-right">
                              <a href="#" class=" flex items-center justify-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4 rounded-xl hover:scale-95 transition-all duration-300">
                                  <ion-icon name="receipt-outline" class="text-xl"></ion-icon>
                                  <span> مشاهده جزییات </span>
                              </a>
                            </td>
                          </tr>

                          <tr class="text-sm text-slate-300 hover:bg-slate-700 border-b-2 border-slate-900">
                            <th class="px-2 py-4 text-right">1</th>
                            <td class="px-1 py-2 text-right">خرید  </td>
                            <th class="px-2 py-4 text-right">100 </th>
                            <td class="px-1 py-2 text-right">امروز</td>
                            <td class="px-1 py-2 text-right">4،000،000 </td>
                            <td class="px-1 py-2 text-right">
                              <a href="#" class=" flex items-center justify-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4 rounded-xl hover:scale-95 transition-all duration-300">
                                  <ion-icon name="receipt-outline" class="text-xl"></ion-icon>
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
