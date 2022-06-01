<?php

namespace Database\Seeders;

use App\Models\BahanBaku;
use App\Models\Bawaan;
use App\Models\Customer;
use App\Models\Persediaan;
use App\Models\Stock;
use App\Models\Suppliers;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $team = [
            [
                'name' => "Admin's Team",
                'user_id' => 1,
                'personal_team' => 1
            ],

            [
                'name' => "wawan's Team",
                'user_id' => 2,
                'personal_team' => 2
            ],
            [
                'name' => "PT. Golden Box's Team",
                'user_id' => 3,
                'personal_team' => 3
            ],
            [
                'name' => "PT. Voda's Team",
                'user_id' => 4,
                'personal_team' => 4
            ],
            [
                'name' => "PT. Aftec Makassar's Team",
                'user_id' => 5,
                'personal_team' => 5
            ],
            [
                'name' => "PT. Nachitape's Team",
                'user_id' => 6,
                'personal_team' => 6
            ],
            [
                'name' => "PT. Nachitape's Team",
                'user_id' => 7,
                'personal_team' => 7
            ],
            [
                'name' => "PT. Nachitape's Team",
                'user_id' => 8,
                'personal_team' => 8
            ],
            [
                'name' => "PT. Nachitape's Team",
                'user_id' => 9,
                'personal_team' => 9
            ],
            [
                'name' => "PT. Nachitape's Team",
                'user_id' => 10,
                'personal_team' => 10
            ],
            [
                'name' => "PT. Nachitape's Team",
                'user_id' => 11,
                'personal_team' => 11
            ],
        ];
        // Team::insert($team);
        $user = [
            [
                'name' => 'Admin',
                'email' => 'Admin1@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 1,
                'role_id' => 999,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'wawan',
                'email' => 'wawan@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 2,
                'role_id' => 111,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'PT. Golden Box',
                'email' => 'PT.GoldenBox@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 3,
                'role_id' => 112,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'PT. Voda',
                'email' => 'PT.Voda@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 4,
                'role_id' => 112,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'PT. Aftec Makassar',
                'email' => 'PT.AftecMakassar@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 5,
                'role_id' => 112,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'PT. Nachitape',
                'email' => 'PT.Nachitape@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 6,
                'role_id' => 112,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Toko sumber rezki',
                'email' => 'Toko.sumber.rezki@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 7,
                'role_id' => 111,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Toko rayyan',
                'email' => 'Toko.rayyane@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 8,
                'role_id' => 111,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Toko muaffaq',
                'email' => 'Toko.muaffaq@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 9,
                'role_id' => 111,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Toko.aswan',
                'email' => 'Toko.aswane@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 10,
                'role_id' => 111,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Toko ifan',
                'email' => 'Toko.ifan@gmail.com',
                'password' => '$2y$10$FozrqVhN9DqexMiduZ2IRuzwb8YLvwe3AylrgLsMXKRV8hg/JzdFC',
                'current_team_id' => 11,
                'role_id' => 111,
                'phone' => 6281524269051,
                'alamat' => 'Bulukumba',
                'remember_token' => Str::random(10),
            ],
        ];
        // User::insert($user);
        User::insert($user);
        Team::insert($team);
        $supplier = [
            [
                'supplier' => 'PT. Golden Box',
                'user_id' => 3,

            ],
            [
                'supplier' => 'PT. Voda',
                'user_id' => 4
            ],
            [
                'supplier' => 'PT. Aftec Makassar',
                'user_id' => 5
            ],
            [
                'supplier' => 'PT. Nachitape',
                'user_id' => 6
            ],
        ];
        Suppliers::insert($supplier);
        $cutomer = [
            [
                'customer' => 'Toko sumber rezki',
                'user_id' => 7,

            ],
            [
                'customer' => 'Toko rayyan',
                'user_id' => 8,

            ],
            [
                'customer' => 'Toko muaffaq',
                'user_id' => 9
            ],
            [
                'customer' => 'Toko aswanr',
                'user_id' => 10
            ],
            [
                'customer' => 'Toko ifan',
                'user_id' => 11
            ],
        ];
        Customer::insert($cutomer);
        $stock = [
            [
                'bawaan_id' => '1',
                'produk_id' => '1',
                'jumlah_stock' => '80',
                'satuan' => 'DUS',
                'tgl_stock' => '2020-05-14',
            ],
            [
                'bawaan_id' => '2',
                'produk_id' => '2',
                'jumlah_stock' => '40',
                'satuan' => 'DUS',
                'tgl_stock' => '2020-05-14',
            ],
            [
                'bawaan_id' => '3',
                'produk_id' => '3',
                'jumlah_stock' => '25',
                'satuan' => 'DUS',
                'tgl_stock' => '2020-05-14',
            ],
            [
                'bawaan_id' => '4',
                'produk_id' => '4',
                'jumlah_stock' => '25000',
                'satuan' => 'DUS',
                'tgl_stock' => '2020-05-14',
            ],
            [
                'bawaan_id' => '5',
                'produk_id' => '5',
                'jumlah_stock' => '7200',
                'satuan' => 'DUS',
                'tgl_stock' => '2020-05-14',
            ],
        ];
        Stock::insert($stock);
        $bahan = [
            [
                'gambar' => '34a3d30947d41b187382be3d3fd44e8b.png',
                'bawaan_id' => '1',
                'isi' => '24',
                'harga' => '3200',
                'suppliers_id' => '1'
            ],
            [
                'gambar' => '34a3d30947d41b187382be3d3fd44e8b.png',
                'bawaan_id' => '4',
                'isi' => '30',
                'harga' => '225000',
                'suppliers_id' => '2'
            ],
            [
                'gambar' => '34a3d30947d41b187382be3d3fd44e8b.png',
                'bawaan_id' => '3',
                'isi' => '29',
                'harga' => '225000',
                'suppliers_id' => '3'
            ],
            [
                'gambar' => '34a3d30947d41b187382be3d3fd44e8b.png',
                'bawaan_id' => '2',
                'isi' => '80',
                'harga' => '375000',
                'suppliers_id' => '3'
            ],
            [
                'gambar' => '34a3d30947d41b187382be3d3fd44e8b.png',
                'bawaan_id' => '5',
                'isi' => '100',
                'harga' => '72000',
                'suppliers_id' => '4'
            ]
        ];
        BahanBaku::insert($bahan);
        $dfStock = [
            ['bahan_baku' => 'Dus', "bbs" => '1', 'maxbb' => '20'],
            ['bahan_baku' => 'Sedotan', "bbs" => '50', 'maxbb' => '16'],
            ['bahan_baku' => 'Cup', "bbs" => '24', 'maxbb' => '15'],
            ['bahan_baku' => 'Penutup', "bbs" => '24', 'maxbb' => '13'],
            ['bahan_baku' => 'Lakban Bening', "bbs" => '1', 'maxbb' => '20'],
        ];
        Bawaan::insert($dfStock);
        $persediaan = [
            [
                'bahan_baku' => '1',
                'default_stock' => '20',
            ],
            [
                'bahan_baku' => '2',
                'default_stock' => '20',
            ],
            [
                'bahan_baku' => '3',
                'default_stock' => '20',
            ],
            [
                'bahan_baku' => '4',
                'default_stock' => '20',
            ],
            [
                'bahan_baku' => '5',
                'default_stock' => '20',
            ],
            [
                'bahan_baku' => '6',
                'default_stock' => '20',
            ],
            [
                'bahan_baku' => '7',
                'default_stock' => '20',
            ],
        ];
        Persediaan::insert($persediaan);
    }
}
