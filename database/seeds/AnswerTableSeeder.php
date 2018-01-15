<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer1 = new Answer();
        $answer1->text = '';

        $answer2 = new Answer();
        $answer2->text = '';
    }
}
