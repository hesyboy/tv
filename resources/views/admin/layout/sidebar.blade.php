<div class="bg-gray-50 dark:bg-slate-800 h-screen">
    <div class="flex flex-col items-center justify-center gap-3">
        {{-- Top Header --}}
        <div class="w-full flex items-center justify-start gap-3 py-3 px-2 bg-slate-900">
            <div class="flex items-center justify-center bg-white p-2 rounded-md shadow-md">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Logo_TV_2015.svg" class="w-8" :class="drawer ? 'w-10' : 'w-10' " alt="">
            </div>
            <div class="flex flex-col gap-1" :class="drawer ? '' : 'hidden' ">
                <div class=" text-lg text-gray-50">
                    شرکت آریاتک
                </div>
                <div class="text-xs text-slate-300">
                    حسام محمودی
                </div>
            </div>
        </div>

        {{-- Menus --}}
        <div class="w-full flex flex-col gap-1 py-2 px-2 items-start bg-gray-50">

            <a class="flex items-center gap-3 text-sm  rounded-md bg-gray-50
             duration-200  cursor-pointer font-semibold
              text-gray-900 hover:bg-gray-200 "
             :class="drawer ? 'w-full' : '' ">
                <ion-icon class="text-2xl text-slate-800 bg-gray-200 p-2 rounded-md" name="speedometer"></ion-icon>
                <span class="" x-show="drawer">
                    داشبورد
                </span>
            </a>

            <a class="flex items-center gap-3 text-sm rounded-md
             duration-200  cursor-pointer font-semibold
              text-gray-900 bg-gray-200 "
             :class="drawer ? 'w-full' : '' ">
                <ion-icon class="text-2xl text-slate-800 bg-gray-200 p-2 rounded-md" name="people"></ion-icon>
                <span class="" x-show="drawer">
                    کاربران سایت
                </span>
            </a>

            <a class="flex items-center gap-3 text-sm  rounded-md bg-gray-50
            duration-200  cursor-pointer font-semibold
             text-gray-900 hover:bg-gray-200 "
            :class="drawer ? 'w-full' : '' ">
               <ion-icon class="text-2xl text-indigo-800 bg-gray-200 p-2 rounded-md" name="speedometer"></ion-icon>
               <span class="" x-show="drawer">
                   داشبورد
               </span>
           </a>





            <div class=" relative" :class="drawer ? 'w-full' : '' " x-data="{'toggle':false}">
                <a @click="toggle=!toggle"    class="flex items-center   text-sm rounded-md
                duration-200  cursor-pointer
                font-semibold text-gray-800 hover:bg-gray-200"
                :class="[ drawer ? 'w-full justify-between gap-3' : 'justify-center gap-0' , toggle ? 'bg-gray-200' : 'bg-gray-50'] "
                >
                    <div class="flex items-center gap-4">
                        <ion-icon class="text-2xl text-indigo-800 bg-gray-200 p-2 rounded-md" name="reader"></ion-icon>
                        <span class="font-semibold" x-show="drawer">
                            مطالب سایت
                        </span>
                    </div>
                    <span class="flex items-center justify-center text-lg text-indigo-800"  >
                        <ion-icon name="caret-back" x-show="!toggle"></ion-icon>
                        <ion-icon name="caret-down" x-show="toggle"></ion-icon>
                    </span>
                </a>
                <div x-show="toggle" x-transition class="block bg-gray-50 py-2 px-1  rounded-md" :class="drawer ? '' : ' absolute right-16 top-0 w-56' ">
                    <div class="flex flex-col gap-1">
                        <a class="w-full cursor-pointer flex items-center gap-3 text-base p-1 rounded-md text-gray-200 hover:font-semibold hover:text-indigo-800 duration-100">
                            {{-- <ion-icon class="text-xs text-indigo-800" name="ellipse"></ion-icon> --}}
                            {{-- <span class="h-3 w-3 rounded-[5px] bg-indigo-200"></span> --}}
                            <ion-icon name="chevron-back-outline" class="bg-gray-200 text-indigo-800 p-0.5 rounded-md"></ion-icon>
                            <span class="text-xs text-gray-800 font-semibold">
                                همه مطالب
                            </span>
                        </a>
                        <a class="w-full cursor-pointer flex items-center gap-4 text-base p-1 rounded-md text-gray-200 hover:font-semibold hover:text-indigo-800 duration-100">
                            {{-- <ion-icon class="text-xs text-indigo-800" name="ellipse"></ion-icon> --}}
                            <ion-icon name="chevron-back-outline" class="bg-gray-200 text-indigo-800 p-0.5 rounded-md"></ion-icon>
                            <span class="text-xs text-gray-800 font-semibold">
                                افزودن مطلب جدید
                            </span>
                        </a>
                        <a class="w-full cursor-pointer flex items-center gap-4 text-base p-1 rounded-md text-gray-200 hover:font-semibold hover:text-indigo-800 duration-100">
                            {{-- <ion-icon class="text-xs text-indigo-800" name="ellipse"></ion-icon> --}}
                            <span class="h-3 w-3 rounded-[5px] bg-indigo-800"></span>
                            <span class="text-xs text-gray-800 font-semibold">
                                دسته بندی مطالب
                            </span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
