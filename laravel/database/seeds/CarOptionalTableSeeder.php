<?php

use App\Car;
use App\Optional;
use Illuminate\Database\Seeder;
use PhpOption\Option;

class CarOptionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cars = Car::all();
        $optionals = Optional::all();

        foreach ($cars as $car) {
            $randomOptionals = Optional::inRandomOrder()->limit(3)->get();
            foreach ($randomOptionals as $optional) {
                $car->optionals()->attach($optional->id);
            }
        }
    }
}
