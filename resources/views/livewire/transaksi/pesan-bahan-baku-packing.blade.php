<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div x-data="{ openTab: 0, activeClasses: 'bg-blue-500 text-white', inactiveClasses: 'text-body-color border hover:bg-blue-500 hover:text-white', }" class="w-full mb-14">
                <div class="flex flex-wrap rounded-lg py-3 px-4 border border-[#E4E4E4] ">
                    <?php $IDTAB = 1;
                    $Tab = 1;
                    $targetTab = 1; ?>
                    <a href="javascript:void(0)" @click="openTab = 0"
                        :class="openTab === 0 ? activeClasses : inactiveClasses"
                        class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 hover:bg-blue-400 hover:text-white">
                        Semua
                    </a>
                    @foreach ($tbSupplier as $item)
                        <a href="javascript:void(0)" @click="openTab = {{ $item->id }}"
                            wire:click='TabID({{ $item->id }})'
                            :class="openTab === {{ $Tab++ }} ? activeClasses : inactiveClasses"
                            class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 hover:bg-blue-400 hover:text-white">
                            {{ $item->supplier }}
                        </a>
                    @endforeach
                </div>
                <div>
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">


                            @foreach ($BB as $key => $val)
                                <div x-show="openTab === 0" class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                                    <!-- Itam -->
                                    <div class="p-3 mr-4 text-orange-500 bg-transparent rounded-full ">
                                        <img class="w-20 bg-cover shadow-sm border-2 border-blue-500 rounded-lg"
                                            src="{{ asset('storage/upload/' . $val->gambar) }}" />
                                    </div>
                                    <div>
                                        <p class="mb-2 text-sm font-medium text-gray-600">
                                            {{ $val->default_stock->bahan_baku }} <br>
                                            Supplier : {{ $val->supplier->supplier }}
                                        </p>
                                        <p class="text-lg font-semibold text-gray-700">
                                            Harga : Rp . {{ number_format($val->harga, 0, 2) }} <br>
                                            <button wire:click='Pesan({{ $val->id }})'
                                                class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Pesan</button>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            @if ($IDtabOpen == false)
                            |
                        @elseif($IDtabOpen == true)
                            @foreach ($itemTab as $key => $val)
                                {{-- @dd($BahanBakuSupplier) --}}
                                <div x-show="openTab === {{ $val->suppliers_id }}"
                                    class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                                    <div class="p-3 mr-4 text-orange-500 bg-transparent rounded-full ">
                                        <img class="w-20 bg-cover shadow-sm border-2 border-blue-500 rounded-lg"
                                            src="{{ asset('storage/upload/' . $val->gambar) }}" />
                                    </div>
                                    <div>
                                        <p class="mb-2 text-sm font-medium text-gray-600">
                                            {{ $val->default_stock->bahan_baku }} <br>
                                            Supplier : {{ $val->supplier->supplier }}
                                        </p>
                                        <p class="text-lg font-semibold text-gray-700">
                                            Harga : Rp . {{ number_format($val->harga, 0, 2) }} <br>
                                            <button wire:click='Pesan({{ $val->id }})'
                                                class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Pesan</button>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endempty
                        {{-- <div x-show="openTab === 2" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Officia nisi, doloribus nulla cumque molestias corporis eaque
                            harum vero! Quas sit odit optio debitis nulla quisquam,
                            dolorum quaerat animi iusto quod. Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Unde ex dolorum voluptate
                            cupiditate adipisci doloremque, vel quam praesentium nihil
                            veritatis.
                         </div> --}}
                    </div>
                </div>

            </div>
        </div>

        <!-- Add Item Modal -->
        <x-jet-dialog-modal wire:model="Additem" class="bg-blue-400 hover:bg-blue-500 rounded-lg" maxWidth='xl'>
            <x-slot name="title">
                <p class="text-red-500">{{ __('Lakukan Pemesanan Bahan Baku') }}</p>
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent>
                    <div class="flex flex-row justify-around items-center">
                        <div>
                            <x-jet-label for="" value="{{ __('Supplier') }}" />
                            <x-jet-input class="block mt-1 w-full" wire:model='supplier' type="text" name="Supplier"
                                required autofocus readonly />
                            @error('supplier')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-jet-label for="" value="{{ __('Nomor Telpon') }}" />
                            <x-jet-input class="block mt-1 w-full" wire:model='no_telpon' type="text" name="no_telpon"
                                required autofocus readonly />
                            @error('no_telpon')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row justify-around items-center">
                        <div>
                            <x-jet-label for="" value="{{ __('bahan') }}" />
                            <x-jet-input class="block mt-1 w-full" wire:model.defer='bahan' type="text" name="bahan"
                                required autofocus readonly />
                            @error('bahan')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-jet-label for="" value="{{ __('harga') }}" />
                            <x-jet-input class="block mt-1 w-full" wire:model='harga' type="text" name="harga" required
                                autofocus readonly />
                            @error('harga')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row justify-around items-center">
                        <div>
                            <x-jet-label for="" value="{{ __('Tanggal') }}" />
                            <x-jet-input class="block mt-1 w-full" wire:model='tgl' type="date" name="tgl" required />
                            @error('tgl')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-jet-label for="" value="{{ __('jumlah') }}" />
                            <x-jet-input class="block mt-1 w-full" wire:model='jumlah' wire:keyup='getSubTotal'
                                type="text" name="jumlah" required autofocus />
                            @error('jumlah')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div>
                        <x-jet-label for="" value="{{ __('sub_total') }}" />
                        <x-jet-input class="block mt-1 w-full" wire:model='sub_total' type="text" name="sub_total"
                            readonly autofocus />
                        @error('sub_total')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="" value="{{ __('keterangan') }}" />
                        <textarea class="block mt-1 w-full rounded outline-1 outline-gray-600" wire:model.defer='keterangan' type="text"
                            name="keterangan" value='{{ $keterangan }}'> </textarea>
                        @error('keterangan')
                            <span class="text-red-500 text-xs italic">{{ __('Mohon Isi Di isi') }}</span>
                        @enderror
                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-button class="bg-blue-500 hover:bg-blue-700 rounded mr-4" wire:click='kirim'>
                    {{ __('Lakukan Pemesanan') }}
                </x-jet-button>

                <x-jet-danger-button wire:click="$toggle('Additem')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
        <!-- ====== Modal Section Start -->
        <!-- ====== Modal Section End -->
    </div>
</div>
