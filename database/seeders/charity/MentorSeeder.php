<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentors')->insert([
                [
                'name' => "Bintang Andi",
                'title' => 'Network Engineer',
                'link' => ''
                ],
                [
                'name' => "Rizky Fauzi",
                'title' => 'Frontend Engineer',
                'link' => ''
                ],
                [
                'name' => "Gilang Januar",
                'title' => 'Network Engineer',
                'link' => ''
                ],
                [
                'name' => "Dimas Pradipa",
                'title' => 'UI/UX Designer',
                'link' => ''
                ],
                [
                'name' => "",
                'title' => '',
                'link' => ''
                ],
            ]
        );
    }
}
