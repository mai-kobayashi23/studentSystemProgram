<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'id' => '1',
                'grade' => '1',
                'name' => '川端 莉緒',
                'address' => '東京都',
                'img_path' => 'なし',
                'comment' => '良好',
                'created_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'grade' => '2',
                'name' => '小玉 隆博',
                'address' => '大阪府',
                'img_path' => 'なし',
                'comment' => '良好',
                'created_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '4',
                'name' => '岩井 圭',
                'grade' => '2',
                'address' => '北海道',
                'img_path' => 'なし',
                'comment' => '良好',
                'created_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
