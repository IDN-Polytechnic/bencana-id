<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Kelas::truncate();
        Schema::enableForeignKeyConstraints();
        
        DB::table('kelas')->insert([
                [
                'title' => "Basic figma (introduce figma, introduce figma tools)",
                'major' => 'dmm'
                ],
                [
                'title' => "Basic Lettering & hand lettering (introduce lettering tools, principal lettering, typography, leading, kerning, spacing, shaping)",
                'major' => 'dmm'
                ],
                [
                'title' => "Basic 3D Blender (introduce blender tools,....)",
                'major' => 'dmm'
                ],
                [
                'title' => "Basic lukis",
                'major' => 'dmm'
                ],
                [
                'title' => "Typography design with mobile",
                'major' => 'dmm'
                ],
                [
                'title' => "HTML, CSS",
                'major' => "rpl"
                ],
                [
                'title' => "membuat website menggunakan Laravel",
                'major' => "rpl"
                ],
                [
                'title' => "membuat website portofolio menggunakan react js dan tailwindcss",
                'major' => "rpl"
                ],
                [
                'title' => "Bootstrap 5",
                'major' => "rpl"
                ],
                [
                'title' => "Andorid",
                'major' => "rpl"
                ],
                [
                'title' => "Network Fundamental",
                'major' => "tkj"
                ],
                [
                'title' => "intro cisco, learn switch, VLAN dan Trunking",
                'major' => "tkj"
                ],
                [
                'title' => "Inter-VLAN, Remote access, VTP",
                'major' => "tkj"
                ],
                [
                'title' => "Port security, Spanning tree protocol",
                'major' => "tkj"
                ],
                [
                'title' => "Static Routing, dynamic routing",
                'major' => "tkj"
                ],
            ]
        );
    }
};