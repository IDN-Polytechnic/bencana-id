<?php

namespace Database\Seeders;

use App\Models\Lembaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lembaga::factory(5)->create();
        //
    }
}
