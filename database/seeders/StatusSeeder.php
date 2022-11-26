<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['Stable', 'Priority', 'Most Priority'];
        foreach ($status as $value) {
            DB::table('role')->insert([
                'name' => $value,
            ]);
        }
    }
}
