<?php

use Illuminate\Database\Seeder;

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
        $task1->duedate = '';
        $task1->image ='';
        $task1->save();
    }
}
