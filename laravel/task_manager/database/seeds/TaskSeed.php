<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task1 = new Task();
        $task1->title = 'tạo 1 task';
        $task1->content = 'tạo 1 task bất kì để thử';
        $task1->save();
    }
}
