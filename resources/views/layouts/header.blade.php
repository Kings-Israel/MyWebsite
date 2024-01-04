<!-- Header -->
<header class="fixed left-0 top-[30px] w-full z-[100] text-right bg-white opacity-100 visible">
    <div class="head-top px-[65px] pt-[30px] pb-[15px]">
        <a href="#" class="menu-btn"><span></span></a>
        <div class="top-menu">
            <ul>
                <li class="@if(Route::is('home')) active @endif ml-[50px] inline-block align-top"><a href="{{ url('/') }}" class="lnk block mt-[12px]">Home</a></li>
                <li class="@if(Route::is('resume')) active @endif ml-[50px] inline-block align-top"><a href="{{ url('/resume') }}" class="lnk block mt-[12px]">Resume</a></li>
                {{-- <li class="@if(Route::is('portfolio')) active @endif ml-[50px] inline-block align-top"><a href="{{ url('/portfolio') }}" class="lnk block mt-[12px]">Portfolio</a></li> --}}
                {{-- <li class="ml-[50px] inline-block align-top"><a href="blog_dark.html" class="lnk block mt-[12px]">Blog</a></li> --}}
                <li class="@if(Route::is('contacts')) active @endif ml-[50px] inline-block align-top"><a href="{{ url('/contacts') }}" class="btn mt-0">Contacts</a></li>
            </ul>
        </div>
    </div>
</header>
