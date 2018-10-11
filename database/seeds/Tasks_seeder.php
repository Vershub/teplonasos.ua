<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tasks_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = array(
            ['name' => 'получение письма', 'counter' => '1'],
            ['name' => 'Отправка письма', 'counter' => '1'],
            ['name' => 'получение посылки', 'counter' =>'1'],
            ['name' => 'отправка посылки', 'counter' => '1']
        );

        DB::table('tasks')->insert($tasks);
    }
}
