<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie1 = new Categorie();
        $categorie1->label = '';
        $categorie1->description = '';

        $categorie2 = new Categorie();
        $categorie2->label = '';
        $categorie2->description = '';
    }
}
