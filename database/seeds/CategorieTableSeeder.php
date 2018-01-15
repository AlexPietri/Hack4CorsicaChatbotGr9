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
        $categorie = new Categorie();
        
        $array = [
            "communiti" => "définition communiti",
            "signup" => "inscription",
            "contact" => "contact",
            "network" => "réseau",
            "other" => "autres",
            "evolution" => "évolution",
            "functionality" => "fonctionnalité",
            "API" => "API",
        ]
        
        foreach ($value as $i => $val) {
            $categorie->label = $value[$i];
            $categorie->description = $val;
        }
    }
}