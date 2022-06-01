<x-guest-layout title="dashboard">
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    {{-- <div  data-wow-delay=".3s" class=" wow fadeInUp absolute left-0 w-full h-full top-0 flex justify-end items-center opacity-25  transition duration-300 ease-in-out" style="z-index: 10;">
        <img src="{{asset('img/hero/undraw_online_discussion_re_nn7e.svg')}}" class="w-1/w h-1/2 sm:hidden lg:flex " alt="">
    </div> --}}
    <div id="home"
        class="relative overflow-hidden bg-gradient-to-b from-primary to-rebound pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="container">
                <div class="w-full px-4">
                    <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                        <h1
                            class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug">
                            CV. THAHIRAH
                        </h1>
                        <p
                            class="mx-auto mb-10 max-w-[600px] text-base text-white shadow-sm sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed">
                            Cv THAHIRAH. Memproduksi Air Minum Dalam Kemasan (AMDK) HAUDZ. Dengan pengolahan yang
                            bermutu tinggi, dan mengutamakan kualitas.
                        </p>
                        <div class="wow fadeInUp text-center" data-wow-delay=".3s">
                            <img src="{{ asset('img/hero/undraw_online_stats_0g94.svg') }}" alt="image"
                                class="mx-auto w-full max-w-[250px] opacity-50 transition duration-300 ease-in-out hover:opacity-100" />
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Features Section Start -->
    <section id="stock" class="pt-20 pb-8 lg:pt-[120px] lg:pb-[70px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mb-12 max-w-[620px] lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            CV. THAHIRA
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">
                            Jumlah Stock Bahan Baku Packing
                        </h2>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                @foreach ($StockPacking as $item)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4 ">
                        <div class="wow fadeInUp mb-12 bg-white shadow-outline-primary rounded-lg flex flex-col  justify-center items-center " data-wow-delay=".2s">
                            <div
                                class="relative z-10 mb-8 flex h-44 w-44 shadow-lg wow fadeInDown items-center justify-center rounded-2xl bg-primary  ">
                                {{-- <span
                                    class="absolute top-0 left-0 z-[-1] mb-8 flex h-60 w-60 rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span> --}}
                                <img src="{{ asset('img/Bahan baku/' . $item->default_stock->gambar) }}"
                                    class="rounded-full w-40 " alt="{{ $item->id }}" />
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark">
                                {{ $item->default_stock->bahan_baku }}
                            </h4>
                            <p class="mb-8 text-body-color lg:mb-11">
                                Jumlah Stock Yang Tersedia : {{number_format($item->jumlah_stock, 0,2)}} Dus
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->
    <!-- ====== Faq Section Start -->
    <section id="StockBahanAir"
        class="relative z-20 overflow-hidden bg-[#f3f4ff] pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            CV. THAHIRA
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">
                            Jumlah Stock Bahan Produksi Air
                        </h2>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    @foreach ($StockAir as $item)
                        <div class=" wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8 shadow-outline-primary"
                            data-wow-delay=".1s">
                            <button class=" flex w-full items-center text-left relative">
                                <div
                                    class="mr-5 flex h-full w-60  items-center justify-center rounded-lg bg-opacity-5 bg-primary px-3 py-3 text-primary">
                                    <img class="rounded-full w-full shadow-outline-body-color" src="{{asset('img/Bahan baku/'. $item->default_bahan_air->gambar) }}" alt="{{$item->default_bahan_air->bahan_baku}}">
                                </div>
                                <div class="w-full">
                                    <h4 class="text-base font-semibold text-black sm:text-lg">
                                       {{$item->default_Bahan_air->bahan_baku}}
                                       <p class="py-3 text-base leading-relaxed text-body-color">
                                        Jumlah Stock Yang Tersedia : {{number_format($item->jumlah_stock, 0,2)}} Kg
                                    </p>
                                    </h4>
                                </div>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== Faq Section End -->
    <!-- ====== About Section Start -->
    <section id="about" class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="wow fadeInUp bg-white" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="items-center justify-between overflow-hidden border lg:flex">
                            <div
                                class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                                <span class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                    About Us
                                </span>
                                <h2
                                    class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                                    Brilliant Toolkit to Build Nextgen Website Faster.
                                </h2>
                                <p class="mb-9 text-base leading-relaxed text-body-color">
                                    The main ‘thrust' is to focus on educating attendees on how
                                    to best protect highly vulnerable business applications with
                                    interactive panel discussions and roundtables led by subject
                                    matter experts.
                                </p>
                                <p class="mb-9 text-base leading-relaxed text-body-color">
                                    The main ‘thrust' is to focus on educating attendees on how
                                    to best protect highly vulnerable business applications with
                                    interactive panel.
                                </p>
                                <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-lg">
                                    Learn More
                                </a>
                            </div>
                            <div class="text-center">
                                <div class="relative z-10 inline-block">
                                    <img src="{{ asset('img/about/about-image.svg') }}" alt="image"
                                        class="mx-auto lg:ml-auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== Pricing Section Start -->
    {{-- <section id="pricing" class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Pricing Table
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
                            Our Pricing Plan
                        </h2>
                        <p class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl border border-primary border-opacity-20 bg-white py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
                        data-wow-delay=".15s
              ">
                        <span class="mb-2 block text-base font-medium uppercase text-dark">
                            STARTING FROM
                        </span>
                        <h2 class="mb-9 text-[28px] font-semibold text-primary">
                            $ 19.99/mo
                        </h2>

                        <div class="mb-10">
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                1 User
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                All UI components
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                Lifetime access
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                Free updates
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                Use on 1 (one) project
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                3 Months support
                            </p>
                        </div>
                        <div class="w-full">
                            <a href="javascript:void(0)"
                                class="inline-block rounded-full border border-[#D4DEFF] bg-transparent py-4 px-11 text-center text-base font-medium text-primary transition duration-300 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
                                Purchase Now
                            </a>
                        </div>
                        <span class="absolute left-0 bottom-0 z-[-1] block h-14 w-14 rounded-tr-full bg-primary">
                        </span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl bg-primary bg-gradient-to-b from-primary to-[#179BEE] py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
                        data-wow-delay=".1s
              ">
                        <span
                            class="mb-5 inline-block rounded-full border border-white bg-white py-2 px-6 text-base font-semibold uppercase text-primary">
                            POPULAR
                        </span>
                        <span class="mb-2 block text-base font-medium uppercase text-white">
                            STARTING FROM
                        </span>
                        <h2 class="mb-9 text-[28px] font-semibold text-white">
                            $ 19.99/mo
                        </h2>

                        <div class="mb-10">
                            <p class="mb-1 text-base font-medium leading-loose text-white">
                                5 User
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-white">
                                All UI components
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-white">
                                Lifetime access
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-white">
                                Free updates
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-white">
                                Use on 1 (one) project
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-white">
                                4 Months support
                            </p>
                        </div>
                        <div class="w-full">
                            <a href="javascript:void(0)"
                                class="inline-block rounded-full border border-white bg-white py-4 px-11 text-center text-base font-medium text-dark transition duration-300 ease-in-out hover:border-dark hover:bg-dark hover:text-white">
                                Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl border border-primary border-opacity-20 bg-white py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
                        data-wow-delay=".15s
              ">
                        <span class="mb-2 block text-base font-medium uppercase text-dark">
                            STARTING FROM
                        </span>
                        <h2 class="mb-9 text-[28px] font-semibold text-primary">
                            $ 70.99/mo
                        </h2>

                        <div class="mb-10">
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                1 User
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                All UI components
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                Lifetime access
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                Free updates
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                Use on unlimited project
                            </p>
                            <p class="mb-1 text-base font-medium leading-loose text-body-color">
                                4 Months support
                            </p>
                        </div>
                        <div class="w-full">
                            <a href="javascript:void(0)"
                                class="inline-block rounded-full border border-[#D4DEFF] bg-transparent py-4 px-11 text-center text-base font-medium text-primary transition duration-300 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
                                Purchase Now
                            </a>
                        </div>

                        <span class="absolute right-0 top-0 z-[-1] block h-14 w-14 rounded-bl-full bg-secondary">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ====== Pricing Section End -->



    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
        <div class="absolute top-0 left-0 z-[-1] h-1/2 w-full bg-[#f3f4fe] lg:h-[45%] xl:h-1/2"></div>
        <div class="container px-4">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title mb-12 lg:mb-[150px]">
                            <span class="mb-5 text-base font-semibold text-dark">
                                CONTACT US
                            </span>
                            <h2 class="text-[35px] font-semibold">
                                Let's talk about <br />
                                Love to hear from you!
                            </h2>
                        </div>
                        <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                        <path
                                            d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                                        <path
                                            d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-6 text-lg font-semibold">Our Location</h5>
                                    <p class="text-base text-body-color">
                                        401 Broadway, 24th Floor, Orchard Cloud View, London
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                        <path
                                            d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-6 text-lg font-semibold">How Can We Help?</h5>
                                    <p class="text-base text-body-color">info@yourdomain.com</p>
                                    <p class="text-base text-body-color">
                                        contact@yourdomain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div class="wow fadeInUp rounded-lg bg-white py-10 px-8 shadow-testimonial sm:py-12 sm:px-10 md:p-[60px] lg:p-10 lg:py-12 lg:px-10 2xl:p-[60px]"
                        data-wow-delay=".2s
              ">
                        <h3 class="mb-8 text-2xl font-semibold md:text-[26px]">
                            Send us a Message
                        </h3>
                        <form>
                            <div class="mb-6">
                                <label for="fullName" class="block text-xs text-dark">Full Name*</label>
                                <input type="text" name="fullName" placeholder="Adam Gelius"
                                    class="w-full border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none" />
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-xs text-dark">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com"
                                    class="w-full border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none" />
                            </div>
                            <div class="mb-6">
                                <label for="phone" class="block text-xs text-dark">Phone*</label>
                                <input type="text" name="phone" placeholder="+885 1254 5211 552"
                                    class="w-full border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none" />
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-xs text-dark">Message*</label>
                                <textarea name="message" rows="1" placeholder="type your message here"
                                    class="w-full resize-none border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none"></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-dark">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Footer Section Start -->
    <footer class="wow fadeInUp relative z-10 bg-black pt-20 lg:pt-[120px]" data-wow-delay=".15s">
        <div class="mt-12 border-t border-opacity-40 py-8 lg:mt-[60px]">
            <div class="container">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-2/3 lg:w-1/2">
                        <div class="my-1">
                            <div class="-mx-3 flex items-center justify-center md:justify-start">
                                <a href="javascript:void(0)" class="px-3 text-base text-[#f3f4fe] hover:text-primary">
                                    Privacy policy
                                </a>
                                <a href="javascript:void(0)" class="px-3 text-base text-[#f3f4fe] hover:text-primary">
                                    Legal notice
                                </a>
                                <a href="javascript:void(0)" class="px-3 text-base text-[#f3f4fe] hover:text-primary">
                                    Terms of service
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/3 lg:w-1/2">
                        <div class="my-1 flex justify-center md:justify-end">
                            <p class="text-base text-[#f3f4fe]">
                                Designed and Developed by
                                <a href="https://tailgrids.com" rel="nofollow noopner" target="_blank"
                                    class="text-primary hover:underline">
                                    TailGrids and UIdeck
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <span class="absolute left-0 top-0 z-[-1]">
                <img src="assets/images/footer/shape-1.svg" alt="" />
            </span>

            <span class="absolute bottom-0 right-0 z-[-1]">
                <img src="assets/images/footer/shape-3.svg" alt="" />
            </span>
        </div>
    </footer>
    <!-- ====== All Scripts -->
</x-guest-layout>
