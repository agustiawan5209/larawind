<div class="py-4 text-gray-500 animate__animated animate__fadeInLeft">
    <a class="ml-6 text-lg font-bold text-white" href="#">
        {{ config('app.name') }}
    </a>
    <ul class="mt-6">
        <li class="relative px-6 py-3 {!! request()->routeIs('dashboard')  ? 'bg-white rounded-tl-lg rounded-bl-lg hover:text-dark rounded-br-lg rounded-tr-lg' : '' !!}">
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full {!! request()->routeIs('dashboard')  ?  'text-blue-500 hover:text-blue-500' : 'text-white hover:text-gray-100' !!} text-sm font-semibold transition-colors duration-150     "
                href="{{ route('dashboard') }}">
                <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-4">{{ __('Dashboard') }}</span>
            </a>
        </li>
        @can('Manage-Admin')
            <li class="relative px-6 py-3 {!! request()->routeIs('Admin.nav.Customer') || request()->routeIs('Admin.nav.Supplier') || request()->routeIs('Admin.nav.Bahan-Baku') || request()->routeIs('Admin.nav.Barang') ? 'bg-white rounded-tl-lg rounded-bl-lg hover:text-dark rounded-br-lg rounded-tr-lg' : '' !!}" x-data="{
                Master: false}">
                <a data-turbolinks-action="replace"
                    class="inline-flex items-center w-full {!! request()->routeIs('Admin.nav.Customer') || request()->routeIs('Admin.nav.Supplier') || request()->routeIs('Admin.nav.Bahan-Baku') || request()->routeIs('Admin.nav.Barang') ? 'text-blue-500 hover:text-blue-500' : 'text-white hover:text-gray-100' !!} text-sm font-semibold transition-colors duration-150  "
                    href="#" @click="Master = ! Master">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                    <span class="ml-4">Master</span>
                </a>
                <ul class="ml-1 bg-white     rounded-lg animate__animated animate__fadeInLeft" x-show="Master"
                    class="hidden">
                    @include('layouts.Itemdropdown.Master')
                </ul>
            </li>
            <li class="relative px-6 py-3  {!! request()->routeIs('Admin.nav.BarangMasuk') || request()->routeIs('Admin.nav.BarangKeluar') || request()->routeIs('Admin.nav.Pemesanan Barang') ? 'bg-white rounded-tl-lg rounded-bl-lg hover:text-dark rounded-br-lg rounded-tr-lg' : '' !!}" x-data="{
                Transaksi: false}">
                <a data-turbolinks-action="replace"
                    class="inline-flex items-center w-full {!! request()->routeIs('Admin.nav.BarangMasuk') || request()->routeIs('Admin.nav.BarangKeluar') || request()->routeIs('Admin.nav.Pemesanan Barang') ? 'text-blue-500 hover:text-blue-500' : 'text-white hover:text-gray-100' !!}text-sm font-semibold transition-colors duration-150  "
                    href="#" @click="Transaksi = ! Transaksi">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                        </path>
                    </svg>
                    <span class="ml-4">Transaksi</span>
                </a>
                <ul class="ml-1 bg-white     rounded-lg animate__animated animate__fadeInLeft" x-show="Transaksi"
                    class="hidden">
                    @include('layouts.Itemdropdown.transaksi')
                </ul>
            </li>
            <li class="relative px-6 py-3 {!! request()->routeIs('Admin.Nav.LaporanDataBahanBaku') || request()->routeIs('Admin.Nav.LaporanenjualanAirMineral') || request()->routeIs('Admin.Nav.LaporanProduksiAirMineral') || request()->routeIs('Admin.Nav.LaporanTransaksiPemesanan') ? 'bg-white rounded-tl-lg rounded-bl-lg hover:text-dark rounded-br-lg rounded-tr-lg' : '' !!}" x-data="{
                Laporan: false}">
                <a data-turbolinks-action="replace"
                    class="inline-flex items-center w-full text-sm {!! request()->routeIs('Admin.Nav.LaporanDataBahanBaku') || request()->routeIs('Admin.Nav.LaporanenjualanAirMineral') || request()->routeIs('Admin.Nav.LaporanProduksiAirMineral') || request()->routeIs('Admin.Nav.LaporanTransaksiPemesanan') ? 'text-blue-500 hover:text-blue-500' : 'text-white hover:text-gray-100' !!} font-semibold transition-colors duration-150  "
                    href="#" @click="Laporan  = ! Laporan">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                    <span class="ml-4">Laporan</span>
                </a>
                <ul class="ml-1 bg-white     rounded-lg animate__animated animate__fadeInLeft" x-show="Laporan"
                    class="hidden">
                    @include('layouts.Itemdropdown.laporan')
                </ul>
            </li>
            <li class="relative px-6 py-3 {!! request()->routeIs('Admin.pesan.Air') || request()->routeIs('Admin.pesan.packing')  ? 'bg-white rounded-tl-lg rounded-bl-lg hover:text-dark rounded-br-lg rounded-tr-lg' : '' !!}" x-data="{
                Pesan: false
            }">
                <a data-turbolinks-action="replace"
                    class="inline-flex items-center w-full text-sm {!!  request()->routeIs('Admin.pesan.Air') || request()->routeIs('Admin.pesan.packing')   ? 'text-blue-500 hover:text-blue-500' : 'text-white hover:text-gray-100'!!} font-semibold transition-colors duration-150  "
                    href="#" @click="Pesan  = ! Pesan">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                    <span class="ml-4">Pesan</span>
                </a>
                <ul class="ml-1 bg-white     rounded-lg animate__animated animate__fadeInLeft" x-show="Pesan"
                    class="hidden">
                    @include('layouts.Itemdropdown.Pesan')
                </ul>
            </li>
        @endcan
        <li class="relative px-6 py-3">
            {!! request()->routeIs('forms') ? '<span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full text-white text-sm font-semibold transition-colors duration-150  "
                href="{{ route('forms') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
                <span class="ml-4">Forms</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('cards') ? '<span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-white text-sm font-semibold transition-colors duration-150  "
                href="{{ route('cards') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                    </path>
                </svg>
                <span class="ml-4">Cards</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('buttons') ? '<span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-white text-sm font-semibold transition-colors duration-150  "
                href="{{ route('buttons') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                    </path>
                </svg>
                <span class="ml-4">Buttons</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('modals') ? '<span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-white text-sm font-semibold transition-colors duration-150  "
                href="{{ route('modals') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="ml-4">Modals</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('calendar') ? '<span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-white text-sm font-semibold transition-colors duration-150  "
                href="{{ route('calendar') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="ml-4">Calendar</span>
            </a>
        </li>
    </ul>
</div>
