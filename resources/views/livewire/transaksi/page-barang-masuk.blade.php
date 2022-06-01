<div class="animate__animated animate__fadeIn">
   <div class=" ml-4 mt-5">
    <x-button wire:click="AddingItem" wire:loading.attr="disabled" >
        {{ __('Tambah Barang Masuk') }}
    </x-button>
   </div>

    <!-- Add Item Modal -->
    <x-dialog-modal wire:model="addItem" maxWidth='md'>
        <form>
            @csrf
            <x-slot name="title">
                {{ __('Tambahkan Barang Masuk') }}
            </x-slot>

            <x-slot name="content">
                <div>
                    <x-label for="" value="{{ __('Kode-Barang Masuk') }}" />
                    <div class="flex flex-row">
                        <div>
                            <x-input name='KBM' class="block mt-2 w-full" type='text' wire:model='KBM' />
                            @error('KBM')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <x-button type='button' class="block" wire:click='generateKode'>
                            Buat Kode
                        </x-button>
                    </div>
                </div>
                <div>
                    <x-label for="" value="{{ __('Supplier') }}" />
                    <select id="supplier"
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        wire:model='supplier' name="gender" wire:change='getBahan'>
                        <option value="--">--Pilih--</option>
                        @foreach ($sup as $sups)
                            <option value='{{ $sups->id }}'>{{ $sups->supplier }}</option>
                        @endforeach
                    </select>
                    @error('supplier')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-row justify-around items-center">
                    <div>
                        <x-label for="" value="{{ __('Bahan Baku') }}" />
                        <select id="supplier"
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 rounded shadow focus:outline-none focus:shadow-outline"
                            wire:model.lazy='bahan' name="bahan" wire:change='getData'>
                            <option value="--">--Pilih--</option>
                            @if (!empty($getBB))
                                @foreach ($getBB as $bbs)

                                    <option value='{{ $bbs->bawaan_id }}'>{{ $bbs->default_stock->bahan_baku }}</option>
                                @endforeach

                            @endif
                        </select>
                        @error('bahan')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-label for="" value="{{ __('Harga') }}" />
                        <x-input name='KBM' wire:model='harga' class="block mt-2 w-full" type='text'
                            readonly />
                    </div>
                </div>
                <div>
                    <x-label for="" value="{{ __('Jumlah Pembelian') }}" />
                    <x-input name='KBM' class="block mt-2 w-full" wire:keyup='sub_total'
                        wire:model='jumlah' type='text' />
                    @error('jumlah')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <x-label for="" value="{{ __('Sub_total') }}" />
                    <x-input name='KBM' wire:model='sub_total' class="block mt-2 w-full" type='text' />
                </div>
                <div>
                    <x-label for="" value="{{ __('Tanggal Pembelian') }}" />
                    <x-input name='KBM' class="block mt-2 w-full" type='date' wire:model='tgl' />
                    @error('tgl')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-danger-button wire:click="$toggle('addItem')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-danger-button>
                <x-button type="button" wire:click.prevent='submit'>
                    {{ __('Tambah Data') }}
                </x-button>
            </x-slot>
        </form>
    </x-dialog-modal>
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <table border="0" cellspacing="5" cellpadding="5"  class="w-full whitespace-pre-wrap>
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
                        <x-button wire:click='MinDate'>Cari</x-button>
                    </td>
                </tr>
            </tbody>
        </table>
        <table id="example" class="stripe hover w-full whitespace-no-wrap"
            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b   bg-gray-50">
                <tr>
                    <th class="px-4 py-3" data-priority="5">No</th>
                    <th class="px-4 py-3" data-priority="1">Kode Barang Masuk</th>
                    <th class="px-4 py-3" data-priority="1">Bahan Baku</th>
                    <th class="px-4 py-3" data-priority="3">Supplier</th>
                    <th class="px-4 py-3" data-priority="5">Jumlah Pembelian</th>
                    <th class="px-4 py-3" data-priority="2">Sub Total</th>
                    <th class="px-4 py-3" data-priority="2">Status</th>
                    <th class="px-4 py-3" data-priority="2">Transaksi </th>
                    <th class="px-4 py-3" data-priority="1">Action</th>
                </tr>
            </thead>
            <tbody>
                @empty($date)
                    @foreach ($barangmasuk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_barang_masuk }}</td>
                            <td>{{ $item->default_stock->bahan_baku }}</td>
                            <td>{{ $item->supplier_id }}</td>
                            <td>{{ $item->jumlah_pembelian }}</td>
                            <td>{{ $item->sub_total }}</td>
                            <td>{{ $item->status }}</td>
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
