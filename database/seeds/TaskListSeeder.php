<?php

use Illuminate\Database\Seeder;

class TaskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            DB::table('tasks')->insert([
                'status' => '未着手',
                'content' => 'test content ' . $i
            ]);
        }
    }
}
