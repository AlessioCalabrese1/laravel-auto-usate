<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    private $validationRules = [
        'plate' => 'required|alpha_num',
        'brand' => 'required',
        'model' => 'required',
        'year' => 'required|date_format:Y',
        'km' => 'required|numeric'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();
        return view("cars.create", compact("car"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validationRules);

        $car = new Car();
        $car->plate = $data["plate"];
        $car->brand = $data["brand"];
        $car->model = $data["model"];
        $car->year = $data["year"];
        $car->km = $data["km"];
        $car->save();

        return redirect()->route("cars.show", $car->id)->with('created', 'La machinetta ' . $car->model . ' con targa ' . $car->plate . ' è stata creata!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->validate($this->validationRules);

        $car = Car::findOrFail($id);
        $car->plate = $data["plate"];
        $car->brand = $data["brand"];
        $car->model = $data["model"];
        $car->year = $data["year"];
        $car->km = $data["km"];
        $car->save();

        return redirect()->route("cars.show", $car->id)->with('updated', 'La machinetta ' . $car->model . ' con targa ' . $car->plate . ' è stata modificata!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('cars.index')->with('deleted', 'La machinetta ' . $car->model . ' con targa ' . $car->plate . ' è stata cancellata!');
    }
}
