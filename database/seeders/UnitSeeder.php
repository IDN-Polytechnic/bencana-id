<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = ['pcs', 'pck', 'dus'];
        foreach ($units as $value) {
            DB::table('units')->insert([
                'name' => $value,
            ]);
        }
    }
}
