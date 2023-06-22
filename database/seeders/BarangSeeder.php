<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
            'kodeBarang' => 'SP1',
            'namaBarang' => 'Speaker',
            'hargaBarang'=> 50000,
            'deskripsiBarang' => 'Pengeras suara',
            'satuan_id' => 1
            ],
            [
            'kodeBarang' => 'MC1',
            'namaBarang' => 'MIC',
            'hargaBarang'=> 20000,
            'deskripsiBarang' => 'Sumber suara',
            'satuan_id' => 2
            ],
            [
            'kodeBarang' => 'KBL1',
            'namaBarang' => 'Kabel',
            'hargaBarang'=> 40000,
            'deskripsiBarang' => 'Perantara suara',
            'satuan_id' => 3
            ],
        ]);
    }

}

