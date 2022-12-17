@extends('site.layouts.master')

@section('body')

<div class="bg-slate-900">




    <div class=" container w-full mx-auto my-5 ">
      <div class="relative flex items-center justify-between bg-gray-800 rounded-xl p-5">




        <div class="flex items-center gap-3">
            {{-- <div class="radial-progress bg-slate-900 text-slate-500 border-8 border-slate-900 rounded-lg" style="--value:70; --size:5rem; --thickness: 8px;">
                <span class="text-slate-400">70%</span>
            </div> --}}

            <div class="bg-gray-900 w-40 py-3 px-5 rounded-xl">
                <div class="flex flex-col items-center text-slate-300 gap-2">
                    <div class="text-4xl">10/100</div>
                    <div class="text-slate-400 text-base flex items-center text-base justify-center gap-2 ">
                        <ion-icon name="diamond" class="text-3xl"></ion-icon>
                        <span>امتیاز کاربری</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-2 text-gray-300 ">
                <div class="text-2xl text-slate-300 ">
                    <span>خوش آمدی </span>
                    <span>حسام عزیز</span>
                </div>
                <div class="text-sm text-slate-400">
                    70% اطلاعات کاربری تکمیل شده است
                </div>
            </div>
        </div>

        <div class="flex gap-8 items-center justify-center ">
            <div class="hidden sm:block sm:ml-6">
              <div class="flex gap-2 ">


                <div class=" transition-all duration-500 text-white px-3 py-2 rounded-md text-sm  flex flex-col justify-center items-center">
                    <span class="flex gap-2 items-center text-2xl text-slate-300">
                        <span>10%</span>
                    </span>
                    <div class="text-gray-400 flex flex-col items-center justify-center gap-2">
                        <span  class="text-slate-400 text-lg">درصد تخفیف شما </span>
                        <a href="#" class="flex items-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4 rounded-xl hover:scale-95 transition-all duration-300">
                            <ion-icon name="diamond" class="text-3xl"></ion-icon>
                            <span> تخفیف بیشتر</span>
                        </a>
                    </div>
                </div>

                <div class="divider divider-horizontal"></div>

                <div class=" transition-all duration-500 text-white px-3 py-2 rounded-md text-sm  flex flex-col justify-center items-center">
                    <span class="flex gap-2 items-center  text-2xl text-slate-300">
                        <span> 2،000،000 تومان </span>
                    </span>
                    <div class="flex flex-col items-center justify-center gap-2">
                        <span class="text-slate-400 text-lg">موجودی کیف پول  </span>
                        <a href="#" class="flex items-center gap-3 text-sm text-slate-400 bg-slate-900 hover:bg-gray-900 py-2 px-4  rounded-xl hover:scale-95 transition-all duration-300">
                            <ion-icon name="wallet" class="text-3xl"></ion-icon>
                            <span> کیف پول </span>
                        </a>
                    </div>
                </div>


              </div>
            </div>
          </div>

      </div>
    </div>





</div>





<div class="container mx-auto pb-5">
    <div class="flex gap-5">
        <div class="w-1/4">
            @include('panel.layouts.sidebar')
        </div>
        <div class="w-3/4">
            @yield('body1')
        </div>
    </div>
</div>


{{-- Page Cointent --}}


@endsection






