<?php

use Illuminate\Database\Seeder;

class AreaSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
            'id' => 1,
            'name' => '東京'
            ],
            [
            'id' => 2,
            'name' => '大阪'
            ],
            [
            'id' => 3,
            'name' => '福岡'
            ]
        ]);
    }
}
