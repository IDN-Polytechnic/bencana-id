<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $nom = '1234567890';
        DB::table('users')->insert(array(
            array(
                'name'          => "admin",
                'email'         => "admin@idn.id",
                'password'      => Hash::make("admin"),
                'phone'         => substr(str_shuffle($nom), 0,12),
                'role_id'       => 1,
            ),
            array(
                'name'          => "relawan",
                'email'         => "relawan@idn.id",
                'password'      => Hash::make("relawan"),
                'phone'         => substr(str_shuffle($nom), 0,12),
                'role_id'       => 2,
            ),
            array(
                'name'      => "guest",
                'email'          => "guest@idn.id",
                'password'      => Hash::make("guest"),
                'phone'         => substr(str_shuffle($nom), 0,12),
                'role_id'       => 3,
            ),));
    }
}
