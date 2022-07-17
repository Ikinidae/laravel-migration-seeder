<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    private $companies = [
        'Trenitalia',
        'Italo'
    ];

    private $cities = [
        'Napoli Centrale',
        'Roma',
        'Venezia',
        'Milano Centrale',
        'Torino',
        'Salerno',
        'Napoli Afragola',
        'Milano Rogoredo',
        'Verona',
        'Firenze'
    ];

    private $delay = [
        'Si',
        '+5',
        '+10',
        '+15',
        '+20',
        '+25'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++) {
            $train = new Train();
            $train->azienda= $this->companies[rand(0,1)];
            $train->stazione_di_partenza= $this->cities[rand(0,9)];
            $train->stazione_di_arrivo= $this->cities[rand(0,9)];
            $train->orario_di_partenza= $faker->time();
            $train->orario_di_arrivo= $faker->time();
            $train->codice_treno= $faker->randomNumber(4, true);
            $train->numero_carrozze= $faker->numberBetween(6, 9);
            $train->in_orario= $this->delay[rand(0,5)];
            $train->cancellato= $faker->boolean();
            $train->save();
        }
    }
}

