<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '伊藤博文',
            'employee_id' => '1',
            'status' => 5,
            'team_id' => 2,
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/IT%C5%8C_Hirobumi.jpg'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '黑田清隆',
            'employee_id' => '2',
            'status' => 2,
            'team_id' => 10,
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Kiyotaka_Kuroda_formal_cropped.jpg'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '山縣有朋',
            'employee_id' => '3',
            'status' => 2,
            'team_id' => 10,
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/83/Yamagata_Aritomo_cropped.jpg',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '松方正義',
            'employee_id' => '4',
            'status' => 5,
            'team_id' => 1,
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0a/4_MatsukataM%28cropped%29.jpg'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '大隈重信',
            'employee_id' => '5',
            'status' => 10,
            'team_id' => 8,
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Shigenobu_Okuma_2.jpg'
        ];
        DB::table('users')->insert($param);
    }
}
