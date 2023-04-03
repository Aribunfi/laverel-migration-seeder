<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
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

$train = new Train;
$train->azienda = $faker->text();
$train->stazione_di_partenza = $faker->text();
$train->stazione_di_arrivo = $faker->text();
$train->orario_di_partenza = $faker->dateTime();
$train->orario_di_arrivo = $faker->dateTime();
$train->codice_treno = $faker->text();
$train->numero_carrozze = $faker->randomDigit();
$train->in_orario = $faker->text();
$train->cancellato = $faker->text();



    //    $train = new Train;

    //    $train->azienda ='Trenitalia';
    //    $train->stazione_di_partenza = 'Milano';
    //    $train->stazione_di_arrivo = 'Genova';
    //    $train->orario_di_partenza = '8:30';
    //    $train->orario_di_arrivo ='10:30';
    //    $train->codice_treno = 'AK3035';
    //    $train->numero_carrozze = '8';
    //    $train->in_orario = 'Sì';
    //    $train->cancallato = 'No';

    //    $train->save();



    //    $train = new Train;

    //    $train->azienda ='Italo';
    //    $train->stazione_di_partenza = 'Genova';
    //    $train->stazione_di_arrivo = 'Roma';
    //    $train->orario_di_partenza = '9:45';
    //    $train->orario_di_arrivo ='13:15';
    //    $train->codice_treno = 'AV7890';
    //    $train->numero_carrozze = '9';
    //    $train->in_orario = 'Sì';
    //    $train->cancallato = 'No';

    //    $train->save();



    //    $train = new Train;

    //    $train->azienda ='Ferrovie svizzere';
    //    $train->stazione_di_partenza = 'Lugano';
    //    $train->stazione_di_arrivo = 'Milano';
    //    $train->orario_di_partenza = '7:30';
    //    $train->orario_di_arrivo ='12:30';
    //    $train->codice_treno = 'AJ3670';
    //    $train->numero_carrozze = '7';
    //    $train->in_orario = 'Sì';
    //    $train->cancallato = 'No';

    //    $train->save();


    }
}
