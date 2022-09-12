<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cars = [
            [
                'plate' => 'Abc1',
                'brand' => 'Ferrari',
                'model' => '488',
                'year' => '2015',
                'km' => 50000,
            ],
            [
                'plate' => 'Abc1',
                'brand' => 'Ferrari',
                'model' => '488',
                'year' => '2020',
                'km' => 20000,
            ],
        ];

        foreach ($cars as $car) {
            # code...
            $newCar = new Car;
            $newCar->plate = $car['plate'];
            $newCar->brand = $car['brand'];
            $newCar->model = $car['model'];
            $newCar->year = $car['year'];
            $newCar->km = $car['km'];
            $newCar->save();
        }
    }
}
