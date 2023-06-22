<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('satuans')->insert([
            [
            'kodeSatuan' => 'AUDIO',
            'namaSatuan' => 'PERANGKAT AUDIO',
            ],
            [
            'kodeSatuan' => 'VISUAL',
            'namaSatuan' => 'PERANGKAT VISUAL',
            ],
            [
            'kodeSatuan' => 'HYBRID',
            'namaSatuan' => 'PERANGKAT AUDIOVISUAL',
            ],
            ]);

    }
}



