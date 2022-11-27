<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Satuan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $satuan = ['pcs', 'pck', 'dus'];
        foreach ($satuan as $value) {
            DB::table('satuan')->insert([
                'name' => $value,
            ]);
        }
    }
}
