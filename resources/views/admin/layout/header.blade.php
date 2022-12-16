<div class="p-3">
    <div class="flex justify-between p-2">
        <div class="flex gap-3 items-center">
            <span @click="drawer=!drawer" class="flex items-center justify-center text-2xl p-2 rounded-md" 
            :class="drawer ? 'bg-gray-200 text-slate-800' : 'bg-slate-800 text-gray-200' ">
                <ion-icon name="eye-outline" x-show="!drawer" ></ion-icon>
                <ion-icon name="eye-off" x-show="drawer"></ion-icon>
            </span>
            <div class="flex gap-3">
                <div x-data="{dropdown:false}" class="relative">
                    <a x-on:click="dropdown=!dropdown" 
                    class="flex items-center justify-center text-2xl p-2 bg-gray-200 rounded-md text-indigo-800"
                    :class="dropdown ? 'bg-slate-800 text-gray-200' : 'bg-gray-200 text-slate-800' ">
                        <ion-icon name="notifications" x-show="!dropdown"></ion-icon>
                        <ion-icon name="notifications-outline" x-show="dropdown"></ion-icon>

                    </a>
                    <div x-show="dropdown" class="w-60 absolute top-12 right-0 bg-gray-50 p-2 rounded-md shadow-md mt-4">
                        salam yasi
                    </div>

                </div>
                <a class="flex items-center justify-center text-2xl p-2 rounded-md" 
                @click="dark = !dark" :class="dark ? 'bg-slate-800 text-gray-200' : 'bg-gray-200 text-slate-800' ">
                    <ion-icon x-show="dark" class="" name="sunny-outline"></ion-icon> 
                    <ion-icon x-show="!dark" name="moon" class=""></ion-icon> 
                </a>
            </div>
            <span class="bg-gray-200 p-1 rounded-md flex items-center" >
                <ion-icon name="search" class="text-xl text-gray-400"></ion-icon>
                <input type="text" class="bg-gray-200 p-1 rounded-md  focus:outline-none w-72 " placeholder="جستجو کنید...">
            </span>

        </div>
        <div>
            <div class="flex items-center">
                <div class="flex gap-2 items-center p-2 bg-slate-800 text-gray-100 rounded-md">
                    <span class="flex items-center justify-center text-2xl " href="">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="">حسام محمودی</span>
                    <ion-icon name="caret-down"></ion-icon>
                </div>
                {{-- <div class="flex gap-3">
                    <a class="flex items-center justify-center text-2xl p-2 bg-gray-200 rounded-md" href="">
                        <ion-icon name="notifications-outline"></ion-icon>
                    </a>
                    <a class="flex items-center justify-center text-2xl p-2 bg-gray-200 rounded-md" href="">
                        <ion-icon name="moon-outline"></ion-icon>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
