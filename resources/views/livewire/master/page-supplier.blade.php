<div class="animate__animated animate__fadeIn">
    <div  id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


        <table id="example" class="stripe hover w-full whitespace-no-wrap" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b   bg-gray-50">
                <tr>
                    <th class="px-4 py-3" data-priority="5">No</th>
                    <th class="px-4 py-3" data-priority="1">supplier</th>
                    <th class="px-4 py-3" data-priority="3">Nomor Telepon</th>
                    <th class="px-4 py-3" data-priority="2">Alamat</th>
                    <th class="px-4 py-3" data-priority="1">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplier as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->supplier }}</td>
                        <td>{{ $item->user->phone }}</td>
                        <td>{{ $item->user->alamat }}</td>
                        <td>
                            <ul class="flex justify-around">
                               @include('components.action.delete', ['value' => $item->id])
                               @include('components.action.edit', ['value' => $item->id , 'table'=> $item->count()])
                            </ul>
                        </td>
                    </tr>
                @endforeach
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
