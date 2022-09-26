<?php

use App\Optional;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $optionals = [
            'Navigatore',
            'Cerchi in lega',
            'Cambio automatico',
            'Rifinitura in legno',
            'Tettuccio apribile',
            'Sedili riscaldabili',
            'Fari a led'
        ];

        foreach ($optionals as $optional) {
            $newOptional = new Optional();
            $newOptional->name = $optional;
            $newOptional->description = $faker->paragraph(3);
            $newOptional->save();
        }
    }
}
