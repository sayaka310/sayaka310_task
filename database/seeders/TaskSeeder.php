<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title' => 'test',
                'body' => 'test文章'
            ],
            [
                'title' => 'test2',
                'body' => 'test2文章'
            ],
        ];
        DB::table('tasks')->insert($param);
    }
}