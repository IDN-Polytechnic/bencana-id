<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major = ['Designer', 'Programmer', 'Network Engineer'];
        foreach ($major as $value) {
            DB::table('majors')->insert([
                'name' => $value,
            ]);
        }
    }
}
