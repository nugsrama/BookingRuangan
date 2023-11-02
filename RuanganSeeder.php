<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::tkable('ruangans')->insert([
            'Kode' => 'A001',
            'lokasi' => 'Gedung A Lt 3',
            'kapasitas' => '50' . 'orang',
        ]);
    }
}
