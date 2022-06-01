<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />

    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div>
        <!-- ====== Navbar Section Start -->
        <div class="ud-header  top-0 left-0 z-40 flex w-full items-center bg-transparent fixed sticky bg-white">
            <div class="container">
                <div class="relative -mx-4 flex items-center justify-between">
                    <div class="w-60 max-w-full px-4">
                        <a href="{{ route('welcome') }}" class="navbar-logo block w-full py-5">
                            {{-- <x-jet-application-logo></x-jet-application-logo> --}}
                            <img src="{{ asset('img/logo/untitled.png') }}" alt="logo" class="header-logo w-20" />
                        </a>
                    </div>
                    <div class="flex w-full items-center justify-between px-4">
                        <div>
                            <button id="navbarToggler"
                                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] bg-primary lg:hidden outline-none border-none transition-shadow ring-0 focus:outline-none ">
                                <span class="relative my-[6px] block h-[2px] w-[30px] text-white bg-white"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] text-white bg-white"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] text-white bg-white"></span>
                                @if (Route::has('login'))
                                    @auth

                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        @else
                                            {{ Auth::user()->name }}
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        @endif
                                    @endauth
                                @endif


                            </button>
                            <nav id="navbarCollapse"
                                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg ">
                                <ul class="block">

                                    @if (request()->routeIs('welcome'))
                                        <li class="group relative">
                                            <a href="#home"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 xl:ml-12">
                                                Home
                                            </a>
                                        </li>
                                        <li class="group relative">
                                            <a href="#stock"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7  xl:ml-12">
                                                Stock Packing
                                            </a>
                                        </li>
                                        <li class="group relative">
                                            <a href="#StockBahanAir"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7  xl:ml-12">
                                                Stock Bahan Air Mineral
                                            </a>
                                        </li>
                                        <li class="group relative">
                                            <a href="#contact"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7  xl:ml-12">
                                                Contact
                                            </a>
                                        </li>
                                    @elseif(request()->routeIs('login') || request()->routeIs('register'))
                                        <li class="group relative">
                                            <a href="{{ route('welcome') }}"
                                                class=" mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 xl:ml-12">
                                                Home
                                            </a>
                                        </li>
                                    @endif
                                    <li class="group relative">
                                        <a href="{{ route('login') }}"
                                            class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7  xl:ml-12">
                                            Login
                                        </a>
                                    </li>
                                    <li class="group relative">
                                        <a href="{{ route('register') }}"
                                            class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7  xl:ml-12">
                                            Register
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $slot }}
    <a href="javascript:void(0)"
    class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
    <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
  </a>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);
    </script>
</body>

</html>
