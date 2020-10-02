<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            ['content' => '少人数'],
            ['content' => '女性専用'],
            ['content' => '学生専用'],
            ['content' => '総額７万円以下'],
        ]);
    }
}
