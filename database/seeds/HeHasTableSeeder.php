<?php

use Illuminate\Database\Seeder;
use App\HeHas;

class HeHasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hehas = new HeHas();
        $hehas->question_id = 1;
        $hehas->tag_id = 1;
    }
}
