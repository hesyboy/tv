<div class="bg-gray-300 dark:bg-slate-800 h-screen">
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
        <div class="w-full flex flex-col gap-3 py-2 px-2 items-center">

            <a class="flex items-center gap-6 text-base p-2 rounded-md bg-gray-50
             hover:scale-95 duration-200  cursor-pointer
             font-semibold text-gray-800 shadow-lg hover:bg-gray-100 duration-200 "
             :class="drawer ? 'w-full' : '' ">
                <ion-icon class="text-2xl text-indigo-800" name="speedometer"></ion-icon>
                <span class="font-semibold" x-show="drawer">
                    داشبورد
                </span>
            </a>

            <a class="flex items-center gap-6 text-base p-2 rounded-md bg-gray-50 
            hover:scale-95 duration-200  cursor-pointer
            font-semibold text-gray-800 shadow-lg hover:bg-gray-100 duration-200 "
            :class="drawer ? 'w-full' : '' ">
               <ion-icon class="text-2xl text-indigo-800" name="people"></ion-icon>
               <span class="font-semibold" x-show="drawer">
                کاربران سایت
            </span>
           </a>

            <a class="w-full shadow-md flex items-center gap-4 text-base p-2 rounded-md
             text-gray-800 bg-gray-100 hover:bg-gray-100 hover:text-indigo-800 duration-200" 
             :class="drawer ? 'w-full' : '' ">
                <ion-icon class="text-2xl text-indigo-800" name="people"></ion-icon>
                <span class="font-semibold"  x-show="drawer">
                    کاربران سایت
                </span>
            </a>
{{-- 
            <a class="w-full shadow-md flex items-center gap-4 text-base p-2 rounded-md text-gray-800 bg-gray-100 hover:bg-gray-100 hover:text-indigo-800 duration-200">
                <ion-icon class="text-2xl text-indigo-800" name="people"></ion-icon>
                <span class="font-semibold">
                    کاربران سایت
                </span>
            </a>

            <div class="w-full shadow-md bg-gray-50 rounded-md text-gray-800">
                <a class="w-full flex items-center justify-between text-base p-2 rounded-md text-gray-800 bg-gray-100 font-semibold duration-200">
                    <div class="flex items-center gap-4">
                        <ion-icon class="text-2xl text-indigo-800" name="reader"></ion-icon>
                        <span class="font-semibold">
                            مطالب سایت
                        </span>
                    </div>
                    <span class="flex items-center justify-center text-lg text-indigo-800">
                        <ion-icon name="caret-forward"></ion-icon>
                        <ion-icon name="caret-down"></ion-icon>
                    </span>
                </a>
                <div class="">
                    <hr>
                    <div class="flex flex-col gap-1 mr-4 my-2">
                        <a class="w-full cursor-pointer flex items-center gap-4 text-base p-1 rounded-md text-gray-200 hover:font-semibold hover:text-indigo-800 duration-100">
                            <ion-icon class="text-xs text-indigo-800" name="ellipse"></ion-icon>
                            <span class="text-sm text-gray-800 font-semibold">
                                همه مطالب
                            </span>
                        </a>
                        <a class="w-full cursor-pointer flex items-center gap-4 text-base p-1 rounded-md text-gray-200 hover:font-semibold hover:text-indigo-800 duration-100">
                            <ion-icon class="text-xs text-indigo-800" name="ellipse"></ion-icon>
                            <span class="text-sm text-gray-800 font-semibold">
                                افزودن مطلب جدید
                            </span>
                        </a>
                        <a class="w-full cursor-pointer flex items-center gap-4 text-base p-1 rounded-md text-gray-200 hover:font-semibold hover:text-indigo-800 duration-100">
                            <ion-icon class="text-xs text-indigo-800" name="ellipse"></ion-icon>
                            <span class="text-sm text-gray-800 font-semibold">
                                دسته بندی مطالب
                            </span>
                        </a>
                    </div>
                </div>

            </div> --}}

        </div>

    </div>
</div>
