<?php

use App\User;
use App\Assets;
use Database\Seeders\AdminUserSeeder;
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
        $data = [
            [
                'id' => 1,
                'nama_barang' => 'Tandan Kosong',
                'harga' => 0,
                'stock' => 0,
            ],
            [
                'id' => 2,
                'nama_barang' => 'Limbah Sawit',
                'harga' => 0,
                'stock' => 0,
            ],
            [
                'id' => 3,
                'nama_barang' => 'Abu Sawit',
                'harga' => 0,
                'stock' => 0,
            ],
        ];
        Assets::insert($data);
    }
}
