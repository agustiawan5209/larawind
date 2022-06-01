<div class="animate__animated animate__fadeIn">
   <div class=" ml-4 mt-5">
    <x-button wire:click="OpenModal" wire:loading.attr="disabled" >
        {{ __('Tambah Barang Keluar') }}
    </x-button>
   </div>

    <!-- Add Item Modal -->
    <x-dialog-modal wire:model="addItem" maxWidth='md'>
        <form>
            @csrf
            <x-slot name="title">
                {{ __('Tambahkan Barang Keluar') }}
            </x-slot>

            <x-slot name="content">
                <div>
                    <x-jet-label for="" value="{{ __('Kode-Barang Keluar') }}" />
                    <div class="flex flex-row justify-start items-center">
                        <div>
                            <x-jet-input name='KBK' class="block mt-2 w-full" type='text' wire:model='KBK' />
                            @error('KBK')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <x-jet-button type='button' class="block h-8" wire:click='generateKode'>
                            Buat Kode
                        </x-jet-button>
                    </div>
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Alamat') }}" />
                    <x-jet-input name='alamat' class="block mt-2 w-full" type='text' wire:model='alamat' />
                    @error('alamat')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Tanggal Keluar') }}" />
                    <x-jet-input name='tgl' class="block mt-2 w-full" type='date' wire:model='tgl' />
                    @error('tgl')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Customer') }}" />
                    <x-jet-input name='tgl' class="block mt-2 w-full" type='text' wire:model='customer' />
                    <p class="text-gray-400 text-sm font-serif">Kosongkan Jika Tidak Ada</p>
                    @error('customer')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Kode Produk') }}" />
                    <select id="supplier"
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        wire:model='kode_produk' name="gender">
                        <option value="--">--Pilih--</option>
                        @foreach ($produk as $produk)
                            <option value='{{ $produk->id }}'>{{ $produk->kode_stock_produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Jumlah Pembelian') }}" />
                    <x-jet-input name='KBM' class="block mt-2 w-full" wire:keyup="getTotal" wire:model='jumlah'
                        type='text' />
                    @error('jumlah')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Sub_total') }}" />
                    <x-jet-input name='KBM' wire:model='sub_total' class="block mt-2 w-full" type='text' />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-danger-button wire:click="addItem = false" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-danger-button>
                <x-jet-button type="button" wire:click.prevent='submit'>
                    {{ __('Tambah Data') }}
                </x-jet-button>
            </x-slot>
        </form>
    </x-dialog-modal>

    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        {{-- <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
            <tr>
                <td colspan="1">Total</td>
               @empty($total_date_penjualan)
               <td>{{"Rp. ". number_format($total_penjualan, 0,2)}}</td>
               @else
               <td>{{"Rp. ". number_format($total_date_penjualan, 0,2)}}</td>
                @endempty
            </tr>
            <tr>
                <td>Minimum date:</td>
                <td><input type="date" wire:model="min_date"></td>
                <td>Maximum date:</td>
                <td><input type="date" wire:model="max_date"></td>
                <td>
                    <x-jet-button wire:click='MinDate'>Cari</x-jet-button>
                </td>
            </tr>
        </tbody>
    </table> --}}
        <table id="example" class="stripe hover w-full whitespace-no-wrap"
            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead class="text-xs  text-left text-gray-500 uppercase border-b   bg-gray-50">
                <tr>
                    <th data-priority="5">No</th>
                    <th data-priority="1">Kode Barang Keluar</th>
                    <th data-priority="1">Produk Id</th>
                    <th data-priority="3">Alamat/Tujuan</th>
                    <th data-priority="3">Customer</th>
                    <th data-priority="3">Tanggal Keluar</th>
                    <th data-priority="5">Jumlah Pembelian</th>
                    <th data-priority="2">Sub Total</th>
                    <th data-priority="2">Transaksi </th>
                    <th data-priority="1">Action</th>
                </tr>
            </thead>
            <tbody>
                @empty($date)
                    @foreach ($barangKeluar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_barang_keluar }}</td>
                            <td>{{ $item->produk_id }}</td>
                            <td>{{ $item->alamat_tujuan }}</td>
                            <td>{{ $item->customer }}</td>
                            <td>{{ $item->tgl_keluar }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->sub_total }}</td>
                            <td>{{ $item->transaksi->tgl_transaksi }}</td>
                            <td>
                                <ul class="flex justify-around">
                                    @include('components.action.delete', ['value' => $item->id])
                                    @include('components.action.edit', ['value' => $item->id, 'table' => $item->count()])
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach ($date as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_stock_produk }}</td>
                            <td>{{ $item->jumlah_stock_produk }}</td>
                            <td>{{ $item->tgl_stock_produk }}</td>
                            @php
                                $total = intval($item->jumlah_stock_produk * 3200);
                            @endphp
                            <td>{{ 'Rp. ' . number_format($total, 2) }}</td>
                            <td>
                                <ul class="flex justify-around">
                                    @include('components.action.delete', ['value' => $item->id])
                                    @include('components.action.edit', ['value' => $item->id, 'table' => $item->count()])
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                @endempty
            </tbody>

        </table>

    </div>
</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
