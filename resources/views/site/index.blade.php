@extends('site.layouts.master')

@section('body')

<div class="">

    {{-- <div class="absolute -top-40 w-full z-0">
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
            .path-0{
              animation:pathAnim-0 4s;
              animation-timing-function: linear;
              animation-iteration-count: infinite;
            }
            @keyframes pathAnim-0{
              0%{
                d: path("M 0,400 C 0,400 0,200 0,200 C 32.566690650584896,152.26056928374345 65.13338130116979,104.5211385674869 95,125 C 124.86661869883021,145.4788614325131 152.03316544590578,234.17601501379585 186,266 C 219.96683455409422,297.82398498620415 260.73395691520716,272.7748013773296 290,237 C 319.26604308479284,201.22519862267043 337.03100689326567,154.72477947688589 370,141 C 402.96899310673433,127.27522052311413 451.1420155117304,146.32608071512698 485,152 C 518.8579844882696,157.67391928487302 538.400931059813,149.9708976626063 565,175 C 591.599068940187,200.0291023373937 625.2542602490174,257.79032863444786 666,265 C 706.7457397509826,272.20967136555214 754.5820279441172,228.86778779960216 785,199 C 815.4179720558828,169.13221220039784 828.4176279745136,152.73852016714352 859,162 C 889.5823720254864,171.26147983285648 937.7474601578281,206.17813153182385 969,214 C 1000.2525398421719,221.82186846817615 1014.5925313941732,202.54895370556105 1046,203 C 1077.4074686058268,203.45104629443895 1125.8824142654796,223.62605364593207 1162,221 C 1198.1175857345204,218.37394635406793 1221.8778115439095,192.9468317107106 1247,173 C 1272.1221884560905,153.0531682892894 1298.6063395588828,138.58661951122554 1331,144 C 1363.3936604411172,149.41338048877446 1401.6968302205587,174.70669024438723 1440,200 C 1440,200 1440,400 1440,400 Z");
              }
              25%{
                d: path("M 0,400 C 0,400 0,200 0,200 C 29.38249977236957,223.2420064247691 58.76499954473914,246.48401284953823 92,234 C 125.23500045526086,221.51598715046177 162.32250159341302,173.30595502661623 197,161 C 231.67749840658698,148.69404497338377 263.94499408160874,172.29216704399693 296,204 C 328.05500591839126,235.70783295600307 359.897522080152,275.5253767973962 389,273 C 418.102477919848,270.4746232026038 444.4649175977835,225.60632576641848 479,228 C 513.5350824022165,230.39367423358152 556.242807528714,280.04932013692974 588,262 C 619.757192471286,243.9506798630703 640.5638522873606,158.1963936858627 674,141 C 707.4361477126394,123.8036063141373 753.5017833218434,175.1651051196195 785,198 C 816.4982166781566,220.8348948803805 833.4290144252658,215.14318583565924 860,196 C 886.5709855747342,176.85681416434076 922.7821589770938,144.26215153774342 954,133 C 985.2178410229062,121.7378484622566 1011.442349666359,131.8082080133671 1043,166 C 1074.557650333641,200.1917919866329 1111.4484423574709,258.50501640878815 1145,250 C 1178.5515576425291,241.49498359121185 1208.763880903758,166.17172635148012 1241,163 C 1273.236119096242,159.82827364851988 1307.4960340274977,228.80807818529138 1341,247 C 1374.5039659725023,265.1919218147086 1407.2519829862513,232.5959609073543 1440,200 C 1440,200 1440,400 1440,400 Z");
              }
              50%{
                d: path("M 0,400 C 0,400 0,200 0,200 C 23.677017669370166,205.53701975512672 47.35403533874033,211.0740395102534 79,200 C 110.64596466125967,188.9259604897466 150.26087631440888,161.24086171411307 184,153 C 217.73912368559112,144.75913828588693 245.60245940362427,155.96251363329432 282,173 C 318.39754059637573,190.03748636670568 363.3292860710942,212.9090837527096 393,240 C 422.6707139289058,267.0909162472904 437.0803963119991,298.4011513558672 467,273 C 496.9196036880009,247.59884864413274 542.3491286809095,165.48631082382136 581,157 C 619.6508713190905,148.51368917617864 651.5230889643626,213.6536053488473 678,244 C 704.4769110356374,274.3463946511527 725.5585154616401,269.89926778078933 757,266 C 788.4414845383599,262.10073221921067 830.2428491890767,258.74932352799556 861,246 C 891.7571508109233,233.25067647200444 911.4700877820534,211.10343810722844 947,191 C 982.5299122179466,170.89656189277156 1033.8767996827096,152.8369240430907 1066,144 C 1098.1232003172904,135.1630759569093 1111.0227134871088,135.54886572040868 1141,146 C 1170.9772865128912,156.45113427959132 1218.0323463688553,176.9676130752746 1250,186 C 1281.9676536311447,195.0323869247254 1298.84790103747,192.58068197849295 1328,193 C 1357.15209896253,193.41931802150705 1398.576049481265,196.7096590107535 1440,200 C 1440,200 1440,400 1440,400 Z");
              }
              75%{
                d: path("M 0,400 C 0,400 0,200 0,200 C 34.61125876776516,181.03443793995714 69.22251753553032,162.0688758799143 98,176 C 126.77748246446968,189.9311241200857 149.72118862564392,236.7589344203 179,240 C 208.27881137435608,243.2410655797 243.89272796189408,202.89538643888562 277,188 C 310.1072720381059,173.10461356111438 340.7078995267797,183.65951982415746 377,186 C 413.2921004732203,188.34048017584254 455.27567393098695,182.46653426448444 486,182 C 516.724326069013,181.53346573551556 536.1894047492723,186.4743431179048 561,210 C 585.8105952507277,233.5256568820952 615.9667070719241,275.6360932638963 658,273 C 700.0332929280759,270.3639067361037 753.9437669630312,222.98128382650978 785,198 C 816.0562330369688,173.01871617349022 824.258225075951,170.43877143006452 846,168 C 867.741774924049,165.56122856993548 903.0233327331648,163.26363045323214 946,173 C 988.9766672668352,182.73636954676786 1039.6484439913895,204.50670675700684 1071,207 C 1102.3515560086105,209.49329324299316 1114.3828913012771,192.70954251874045 1141,198 C 1167.6171086987229,203.29045748125955 1208.8199908035024,230.65512316803142 1246,217 C 1283.1800091964976,203.34487683196858 1316.3371454847136,148.66996480913386 1348,139 C 1379.6628545152864,129.33003519086614 1409.831427257643,164.66501759543308 1440,200 C 1440,200 1440,400 1440,400 Z");
              }
              100%{
                d: path("M 0,400 C 0,400 0,200 0,200 C 32.566690650584896,152.26056928374345 65.13338130116979,104.5211385674869 95,125 C 124.86661869883021,145.4788614325131 152.03316544590578,234.17601501379585 186,266 C 219.96683455409422,297.82398498620415 260.73395691520716,272.7748013773296 290,237 C 319.26604308479284,201.22519862267043 337.03100689326567,154.72477947688589 370,141 C 402.96899310673433,127.27522052311413 451.1420155117304,146.32608071512698 485,152 C 518.8579844882696,157.67391928487302 538.400931059813,149.9708976626063 565,175 C 591.599068940187,200.0291023373937 625.2542602490174,257.79032863444786 666,265 C 706.7457397509826,272.20967136555214 754.5820279441172,228.86778779960216 785,199 C 815.4179720558828,169.13221220039784 828.4176279745136,152.73852016714352 859,162 C 889.5823720254864,171.26147983285648 937.7474601578281,206.17813153182385 969,214 C 1000.2525398421719,221.82186846817615 1014.5925313941732,202.54895370556105 1046,203 C 1077.4074686058268,203.45104629443895 1125.8824142654796,223.62605364593207 1162,221 C 1198.1175857345204,218.37394635406793 1221.8778115439095,192.9468317107106 1247,173 C 1272.1221884560905,153.0531682892894 1298.6063395588828,138.58661951122554 1331,144 C 1363.3936604411172,149.41338048877446 1401.6968302205587,174.70669024438723 1440,200 C 1440,200 1440,400 1440,400 Z");
              }
            }</style><path d="M 0,400 C 0,400 0,200 0,200 C 32.566690650584896,152.26056928374345 65.13338130116979,104.5211385674869 95,125 C 124.86661869883021,145.4788614325131 152.03316544590578,234.17601501379585 186,266 C 219.96683455409422,297.82398498620415 260.73395691520716,272.7748013773296 290,237 C 319.26604308479284,201.22519862267043 337.03100689326567,154.72477947688589 370,141 C 402.96899310673433,127.27522052311413 451.1420155117304,146.32608071512698 485,152 C 518.8579844882696,157.67391928487302 538.400931059813,149.9708976626063 565,175 C 591.599068940187,200.0291023373937 625.2542602490174,257.79032863444786 666,265 C 706.7457397509826,272.20967136555214 754.5820279441172,228.86778779960216 785,199 C 815.4179720558828,169.13221220039784 828.4176279745136,152.73852016714352 859,162 C 889.5823720254864,171.26147983285648 937.7474601578281,206.17813153182385 969,214 C 1000.2525398421719,221.82186846817615 1014.5925313941732,202.54895370556105 1046,203 C 1077.4074686058268,203.45104629443895 1125.8824142654796,223.62605364593207 1162,221 C 1198.1175857345204,218.37394635406793 1221.8778115439095,192.9468317107106 1247,173 C 1272.1221884560905,153.0531682892894 1298.6063395588828,138.58661951122554 1331,144 C 1363.3936604411172,149.41338048877446 1401.6968302205587,174.70669024438723 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#1e293bff" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path></svg>
    </div> --}}







    <div class="p-2">

        <div class="container mx-auto my-5">

            <div class="flex gap-3 justify-between  py-8 rounded-2xl items-center">
                <div class=" w-3/6 flex flex-col gap-6 py-3">


                    <div>
                        <div class=" w-full text-4xl text-slate-200 font-bold">
                            Google Ads
                        </div>
                        <h1 class="text-5xl  font-bold">
                            تبلیغات در گوگل
                        </h1>
                    </div>

                    <p class=" text-3xl leading-10 font-semibold">
                        <span> تبلیغات در گوگل ادوردز  با  </span>
                        <span class="text-primary">تلوینو ادز </span>
                    </p>
                    <p class=" text-lg leading-10">
                        با تبلیغات در گوگل سایتتان را به کاربران درست در زمان درست نشان دهید. افراک پریمیر
                        پارتنر گوگل در ایران، کسب و کارها را در بهترین جایگاه به تمام کاربران گوگل نشان خواهد داد.
                    </p>
                    <div class="flex gap-3">
                        {{-- <span class="bg-secondary font-normal text-lg p-2 rounded-md text-white leading-none flex items-center">
                            Google Ads Marketing
                        </span> --}}
                        <a class="btn  btn-secondary font-normal justify-between gap-2 flex items-center text-lg">
                            <span>مشاوره رایگان     </span>
                            <ion-icon name="arrow-forward-outline" class="text-2xl"></ion-icon>
                        </a>
                        <a class="btn  btn-primary font-normal justify-between gap-2 flex items-center text-lg">
                            <span>شروع تبلیغ در گوگل  </span>
                            <ion-icon name="arrow-forward-outline" class="text-2xl"></ion-icon>
                        </a>

                    </div>
                    {{-- <ul class="flex flex-col gap-2 text-sm mt-6 ">
                        <li class="flex items-center gap-3">
                            <ion-icon name="pulse-outline" class="text-3xl text-primary p-1 rounded-xl"></ion-icon>
                            <span class="text-gray-600">قیمت لحظه ای و آنلاین با کمترین درصد کارمزد (Online Price)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <ion-icon name="swap-horizontal-outline" class="text-3xl text-primary p-1 rounded-xl"></ion-icon>
                            <span class="text-gray-600">انتقال فوری تتر به آدرس کیف پول  (Fast Delivery)   </span>
                        </li>
                        <li class="flex items-center gap-3">
                            <ion-icon name="people-outline" class="text-3xl text-primary p-1 rounded-xl"></ion-icon>
                            <span class="text-gray-300">پشتیبانی آنلاین و تلفنی 24 ساعته (24/7 Support) </span>
                        </li>
                    </ul> --}}
                </div>
                <div class="w-3/6">
                    <img src="https://afrak.com/wp-content/uploads/2022/03/Bita-Ads-min.png" alt="" srcset="">
                </div>
            </div>

        </div>




    </div>

<div class="p-2  my-5  bg-white" style="width: 100%;
background-image: url(https://novinmarketing.com/wp-content/themes/novin/images/bg-light-two.png);
background-repeat: no-repeat;
background-size: cover;
min-height: 450px;">

    <div class="container mx-auto">
        <div class="my-5 ">
            <div class=" w-full text-center text-4xl text-slate-200 font-bold">
                Why Google Ads With Telwino
            </div>
            <div class="text-3xl font-bold flex justify-center gap-2">
                <span> چرا تبلیغات در گوگل را با  </span>
                <span class="text-primary">تلوینو ادز </span>
                <span>شروع کنم؟</span>
            </div>

        </div>
        <div class="swiper">
            <div class="swiper-wrapper py-5 px-2">

                <div class="swiper-slide h-auto  flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                    <span class="text-5xl flex items-center text-primary">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <h2 class="text-lg font-bold">
                        مشاوره تخصصی رایگان
                    </h2>
                    <p class="text-sm leading-6">
                        برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                    </p>
                </div>

                    <div class="swiper-slide h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                        <span class="text-5xl flex items-center text-primary">
                            <ion-icon name="gift-outline"></ion-icon>
                        </span>
                        <h2 class="text-lg font-bold">
                            هزینه راه اندازی رایگان
                        </h2>
                        <p class="text-sm leading-6">
                            در نوین مارکتینگ تعرفه تبلیغات گوگل شامل هزینه راه‌اندازی تبلیغ نمی‌شود و هزینه راه اندازی کمپین‌های تبلیغات در گوگل  رایگان می‌باشد.
                        </p>
                    </div>

                    <div class="swiper-slide h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                        <span class="text-5xl flex items-center text-primary">
                            <ion-icon name="speedometer-outline"></ion-icon>
                        </span>
                        <h2 class="text-lg font-bold">
                            راه اندازی سریع و آنی
                        </h2>
                        <p class="text-sm leading-6">
                            برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                        </p>
                    </div>
                    <div class="swiper-slide h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                        <span class="text-5xl flex items-center text-primary">
                            <ion-icon name="trending-down-outline"></ion-icon>
                        </span>
                        <h2 class="text-lg font-bold">
                            کمترین نرخ کارمزد
                        </h2>
                        <p class="text-sm leading-6">
                            برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                        </p>
                    </div>

            </div>

        </div>

        <script>
                const swiper = new Swiper('.swiper', {
                    loop:true,
                    slidesPerView: 4,
                    spaceBetween: 30,
                });
        </script>

    </div>
</div>





<div class="bg-primary py-5 shadow-lg">
    <div class="container mx-auto">
        <div class="p-3 text-white flex justify-between">
            <div class="flex items-center gap-3">
                <span class="text-3xl">
                    مشاوره رایگان :
                </span>
                <span>
                    با تبلیغات در گوگل سایتتان را به کاربران درست در زمان درست نشان دهید. افراک پریمیر پارتنر گوگل در ایران
                </span>
            </div>
            <div>
                <a class="btn btn-secondary">دریافت مشاوره</a>
            </div>
        </div>
    </div>
</div>





<div class="p-2 my-5">

    <div class="container mx-auto ">

        <div class="flex gap-3 justify-between  py-8 rounded-2xl items-center">
            <div class="w-2/6">
                <img src="https://afrak.com/wp-content/uploads/2022/03/Bita-Ads-min.png" alt="" srcset="">
            </div>
            <div class=" w-4/6 flex flex-col gap-6 py-3">

                <div>
                    <div class=" w-full text-4xl text-slate-200 font-bold">
                        Why Google Ads Is Important
                    </div>
                    <p class=" text-3xl leading-10 font-semibold">
                        <span> چرا  </span>
                        <span class="text-primary">تبلیغ در گوگل ادز </span>
                        <span>دارای اهمیت است؟ </span>
                    </p>
                </div>
                <p class=" text-lg leading-10">
                    با تبلیغات در گوگل سایتتان را به کاربران درست در زمان درست نشان دهید. افراک پریمیر
                    پارتنر گوگل در ایران، کسب و کارها را در بهترین جایگاه به تمام کاربران گوگل نشان خواهد داد.
                </p>

                <ul class="flex flex-col gap-1 text-base  ">
                    <li class="flex items-center gap-3">
                        <ion-icon name="pulse-outline" class="text-3xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">قیمت لحظه ای و آنلاین با کمترین درصد کارمزد (Online Price)</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <ion-icon name="swap-horizontal-outline" class="text-3xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">انتقال فوری تتر به آدرس کیف پول  (Fast Delivery)   </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <ion-icon name="people-outline" class="text-3xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">پشتیبانی آنلاین و تلفنی 24 ساعته (24/7 Support) </span>
                    </li>
                </ul>
            </div>

        </div>

    </div>




</div>









<div class="p-2  my-5  bg-white" style="width: 100%;
background-image: url(https://novinmarketing.com/wp-content/themes/novin/images/bg-light-two.png);
background-repeat: no-repeat;
background-size: cover;
min-height: 450px;">

    <div class="container mx-auto">
        <div class="my-8 ">
            <div class=" w-full text-center text-4xl text-slate-200 font-bold">
                Google Ads Marketing Price
            </div>
            <div class="text-3xl font-bold flex justify-center gap-2">
                <span> تعرفه تبلیغات در  </span>
                <span class="text-primary">گوگل ادز </span>
            </div>
            <p class="text-lg text-center my-3">
                برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین
                برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین
                برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین
                مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
            </p>

        </div>

        <div class="grid grid-cols-4 gap-6">

            <div class=" h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                {{-- <span class="text-4xl flex items-center text-primary">
                    <ion-icon name="star"></ion-icon>
                </span> --}}
                <div class="w-full flex flex-col gap-2 justify-center items-center">
                    <h2 class="text-xl font-bold">
                        پکیج آلفا
                    </h2>
                    <h2 class=" font-bold">
                        <span>2000 بات تایلند </span>
                        <span class="text-xs">(معادل 56 دلار)</span>

                    </h2>
                    {{-- <span class="text-sm">معادل 1050 بت</span> --}}
                </div>
                <div class="w-full h-1 rounded-xl bg-primary"></div>

                <ul class="w-full flex flex-col text-sm items-start ">
                    <li class="flex items-center gap-1">
                        <ion-icon name="pulse-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800"> لحظه ای و  با  درصد کارمزد </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="swap-horizontal-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">انتقال فوری تتر به   پول    </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="people-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">پشتیبانی  و تلفنی  ساعته </span>
                    </li>
                </ul>

                <p class="text-sm leading-6">
                    برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                </p>


                <div class="w-full flex gap-3 justify-between items-center">
                    <a class="btn  btn-primary font-normal justify-between gap-1 flex items-center">
                        <ion-icon name="bag-handle-outline" class="text-3xl"></ion-icon>
                        <span>خرید آنلاین </span>
                    </a>
                    <div class="btn btn-secondary font-normal ">
                        2،800،000 تومان
                    </div>
                </div>

            </div>


            <div class=" h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                {{-- <span class="text-4xl flex items-center text-primary">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </span> --}}
                <div class="w-full flex flex-col gap-2 justify-center items-center">
                    <h2 class="text-xl font-bold">
                        پکیج بتا
                    </h2>
                    <h2 class=" font-bold">
                        <span>4000 بات تایلند </span>
                        <span class="text-xs">(معادل 112 دلار)</span>

                    </h2>
                    {{-- <span class="text-sm">معادل 1050 بت</span> --}}
                </div>
                <div class="w-full h-1 rounded-xl bg-primary"></div>

                <ul class="w-full flex flex-col text-sm items-start ">
                    <li class="flex items-center gap-1">
                        <ion-icon name="pulse-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800"> لحظه ای و  با  درصد کارمزد </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="swap-horizontal-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">انتقال فوری تتر به   پول    </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="people-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">پشتیبانی  و تلفنی  ساعته </span>
                    </li>
                </ul>

                <p class="text-sm leading-6">
                    برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                </p>


                <div class="w-full flex gap-3 justify-between items-center">
                    <a class="btn  btn-primary font-normal justify-between gap-1 flex items-center">
                        <ion-icon name="bag-handle-outline" class="text-3xl"></ion-icon>
                        <span>خرید آنلاین </span>
                    </a>
                    <div class="btn btn-secondary font-normal ">
                        5،500،000 تومان
                    </div>
                </div>

            </div>

            <div class=" h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                {{-- <span class="text-4xl flex items-center text-primary">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>

                </span> --}}
                <div class="w-full flex flex-col gap-2 justify-center items-center">
                    <h2 class="text-xl font-bold">
                        پکیج گاما
                    </h2>
                    <h2 class=" font-bold">
                        <span>8000 بات تایلند </span>
                        <span class="text-xs">(معادل 224 دلار)</span>

                    </h2>
                    {{-- <span class="text-sm">معادل 1050 بت</span> --}}
                </div>
                <div class="w-full h-1 rounded-xl bg-primary"></div>

                <ul class="w-full flex flex-col text-sm items-start ">
                    <li class="flex items-center gap-1">
                        <ion-icon name="pulse-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800"> لحظه ای و  با  درصد کارمزد </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="swap-horizontal-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">انتقال فوری تتر به   پول    </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="people-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">پشتیبانی  و تلفنی  ساعته </span>
                    </li>
                </ul>

                <p class="text-sm leading-6">
                    برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                </p>


                <div class="w-full flex gap-3 justify-between items-center">
                    <a class="btn  btn-primary font-normal justify-between gap-1 flex items-center">
                        <ion-icon name="bag-handle-outline" class="text-3xl"></ion-icon>
                        <span>خرید آنلاین </span>
                    </a>
                    <div class="btn btn-secondary font-normal ">
                        11،000،000 تومان
                    </div>
                </div>

            </div>

            <div class=" h-auto flex flex-col gap-3 items-center bg-white p-3 rounded-2xl shadow-lg hover:bg-slate-50 duration-200 cursor-pointer">
                {{-- <span class="text-4xl flex items-center text-primary">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </span> --}}
                <div class="w-full flex flex-col gap-2 justify-center items-center">
                    <h2 class="text-xl font-bold">
                        پکیج دلتا
                    </h2>
                    <h2 class=" font-bold">
                        <span>15000 بات تایلند </span>
                        <span class="text-xs">(معادل 421 دلار)</span>
                    </h2>
                    {{-- <span class="text-sm">معادل 1050 بت</span> --}}
                </div>
                <div class="w-full h-1 rounded-xl bg-primary"></div>

                <ul class="w-full flex flex-col text-sm items-start font-bold ">
                    <li class="flex items-center gap-1">
                        <ion-icon name="pulse-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800"> لحظه ای و  با  درصد کارمزد </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="swap-horizontal-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">انتقال فوری تتر به   پول    </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <ion-icon name="people-outline" class="text-2xl text-primary p-1 rounded-xl"></ion-icon>
                        <span class="text-slate-800">پشتیبانی  و تلفنی  ساعته </span>
                    </li>
                </ul>

                <p class="text-sm leading-6">
                    برای جلوگیری از هدر رفت هزینه تبلیغات در گوگل، نوین مارکتینگ مانیتورینگ ۲۴ ساعته را ارائه می‌کند تا در صورت بروز مشکل به سرعت برطرف شود.
                </p>


                <div class="w-full flex gap-3 justify-between items-center">
                    <a class="btn  btn-primary font-normal justify-between gap-1 flex items-center">
                        <ion-icon name="bag-handle-outline" class="text-3xl"></ion-icon>
                        <span>خرید آنلاین </span>
                    </a>
                    <div class="btn btn-secondary font-normal ">
                        20،600،000 تومان
                    </div>
                </div>

            </div>


        </div>





    </div>
</div>






<div class="container mx-auto">
    sadasdas
</div>



</div>

@endsection
