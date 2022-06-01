<div class="animate__animated animate__fadeIn">
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <table border="0" cellspacing="5" cellpadding="5">
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
        </table>
        <table id="example" class="stripe hover w-full whitespace-no-wrap"
            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b   bg-gray-50">
                <tr>
                    <th class="px-4 py-3" data-priority="5">No</th>
                    <th class="px-4 py-3" data-priority="1">Kode Stock Produk</th>
                    <th class="px-4 py-3" data-priority="3">Jumlah Stock produk</th>
                    <th class="px-4 py-3" data-priority="2">Tanggal Stock Produk</th>
                    <th class="px-4 py-3" data-priority="2">Total Penjualan</th>
                    <th class="px-4 py-3" data-priority="1">Action</th>
                </tr>
            </thead>
            <tbody>
                @empty($date)
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_stock_produk }}</td>
                            <td>{{ $item->jumlah_stock_produk }}</td>
                            <td>{{ $item->tgl_stock_produk }}</td>
                            @php
                                $total = intval($item->jumlah_stock_produk * 3200);
                            @endphp
                            <td>{{ 'Rp. ' . number_format($total, 0,2) }}</td>
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
