<li
    class="relative px-3 py-1 inline-flex items-center w-full  {!! request()->routeIs('Admin.nav.Barang') ? 'bg-gradient-to-r from-primary to-blue-500 rounded-lg text-white ': 'text-blue-400' !!} text-sm font-semibold transition-colors duration-150">
    <a href="{{route('Admin.nav.Barang')}}" class="inline-flex item-center">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
    <div>Produk</div>
    </a>
</li>
<li
    class="relative px-3 py-1 inline-flex items-center w-full {!! request()->routeIs('Admin.nav.Bahan-Baku') ? 'bg-gradient-to-r from-primary to-blue-500 rounded-lg text-white ': 'text-blue-400' !!} text-sm font-semibold transition-colors duration-150">
    <a href="{{route('Admin.nav.Bahan-Baku')}}" class="inline-flex item-center">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2">
            </path>
        </svg>
        <div>Stock Bahan Baku</div>
    </a>
</li>
<li
    class="relative px-3 py-1 inline-flex items-center w-full {!! request()->routeIs('Admin.nav.Supplier') ? 'bg-gradient-to-r from-primary to-blue-500 rounded-lg text-white ': 'text-blue-400' !!} text-sm font-semibold transition-colors duration-150">
    <a href="{{route('Admin.nav.Supplier')}}" class="inline-flex item-center">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
            </path>
        </svg>
        <div>Supplier</div>
    </a>
</li>

<li
    class="relative px-3 py-1 inline-flex items-center w-full {!! request()->routeIs('Admin.nav.Customer') ? 'bg-gradient-to-r from-primary to-blue-500 rounded-lg text-white ': 'text-blue-400' !!} text-sm font-semibold transition-colors duration-150">
    <a href="{{route('Admin.nav.Customer')}}" class="inline-flex item-center">
    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
        </path>
    </svg>
    <div>Customer</div>
    </a>
</li>
