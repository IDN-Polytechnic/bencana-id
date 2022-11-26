<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = ['Designer', 'Programmer', 'Network Engineer'];
        foreach ($kelas as $value) {
            DB::table('major')->insert([
                'title' => $value,
                'major_id' => $value
            ]);
        }
    }
}
