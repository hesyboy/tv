<div class=" flex flex-col gap-5">

    <ul class="menu bg-slate-800 w-full p-5 rounded-box">
        <li>
          <a class="@if (request()->routeIs('panel.index'))
            bg-gray-900  flex items-center
          @endif text-base text-slate-300" href={{route('panel.index')}}>
          <ion-icon name="id-card-outline" class="text-4xl"></ion-icon>
          <span>داشبورد</span>
          </a>
        </li>

        <hr class="my-3">

        {{-- <li>
            <a href="{{route('panel.index')}}"
            class="@if (request()->routeIs('panel.*')) bg-slate-900 text-primary  @endif text-base text-slate-300">
              <ion-icon name="bag-add-outline"  class="text-4xl"></ion-icon>
              خریدهای من
            </a>
          </li>
          <li>
            <a href="{{route('panel.index')}}"
            class="@if (request()->routeIs('panel.*')) bg-slate-900 text-primary  @endif text-base text-slate-300">
              <ion-icon name="bag-remove-outline"  class="text-4xl"></ion-icon>
              فروش های من
            </a>
          </li> --}}

          <li>
            <a href="{{route('panel.history')}}"
            class="@if (request()->routeIs('panel.history')) bg-slate-900  @endif text-base text-slate-300">
              <ion-icon name="reader-outline"  class="text-4xl"></ion-icon>
              سبد خرید
            </a>
          </li>

        <li>
          <a href="{{route('panel.history')}}"
          class="@if (request()->routeIs('panel.history')) bg-slate-900  @endif text-base text-slate-300">
            <ion-icon name="reader-outline"  class="text-4xl"></ion-icon>
            تاریخچه معاملات
          </a>
        </li>
        {{-- <li>
            <a href="{{route('admin.instagram.page.category.index')}}"
            class="@if (request()->routeIs('admin.instagram.page.category.*')) bg-gray-800 text-white @endif">
            <ion-icon name="speedometer-outline" class="text-3xl"></ion-icon>
               پکیج افزایش یازدید
            </a>
          </li> --}}




          <li>
            <a href="{{route('panel.wallet')}}"
            class="@if (request()->routeIs('admin.wallet')) bg-slate-900 @endif text-base text-slate-300">
            <ion-icon name="wallet-outline" class="text-3xl"></ion-icon>
                کیف پول
            </a>
          </li>


          <li>
            <a href="{{route('panel.wallet')}}"
            class="@if (request()->routeIs('admin.wallet')) bg-slate-900 @endif text-base text-slate-300">
            <ion-icon name="swap-horizontal-outline" class="text-3xl"></ion-icon>
                تبدیل ارز
            </a>
          </li>



          <li>
            <a href="{{route('admin.index')}}"
            class="@if (request()->routeIs('admin.3*')) bg-gray-900  @endif text-base text-slate-300">
            <ion-icon name="diamond-outline" class="text-3xl"></ion-icon>
                کسب امتیاز
            </a>
          </li>



          <hr class="my-3">

          <li>
            <a href="{{route('admin.index')}}"
            class="@if (request()->routeIs('admin.3*')) bg-gray-900  @endif text-base text-slate-300">
            <ion-icon name="exit-outline" class="text-3xl"></ion-icon>
                خروج
            </a>
          </li>

      </ul>



</div>
