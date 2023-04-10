<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        for($i=0; $i < 20; $i++) { 

        $train = new train;

        $train->azienda = $faker->word();
        $train->stazione_di_partenza = $faker->word();
        $train->orario_di_partenza = $faker->dateTime();
        $train->orario_di_arrivo = $faker->dateTime();
        $train->codice_treno = $faker->word();
        $train->numero_carrozze = $faker->word();
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();
     



        $train->save();
    }

}
}
