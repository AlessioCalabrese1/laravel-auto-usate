<?php

namespace App\Http\Controllers;

use App\Optional;
use Illuminate\Http\Request;

class OptionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $optionals = Optional::all();

        return view("optionals.index", compact("optionals"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optional = new Optional();

        return view("optionals.create", compact("optional"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newOptional = new Optional();
        $newOptional->name = $data["name"];
        $newOptional->description = $data["description"];

        $newOptional->save();

        return redirect()->route("optionals.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $optional = Optional::findOrFail($id);

        return view("optionals.show", compact("optional"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $optional = Optional::findOrFail($id);

        return view("optionals.edit", compact("optional"));
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
        $data = $request->all();
        $selectedOptional = Optional::findOrFail($id);

        $selectedOptional->name = $data["name"];
        $selectedOptional->description = $data["description"];
        $selectedOptional->save();

        return redirect()->route("optionals.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $optional = Optional::findOrFail($id);

        $optional->delete();

        return redirect()->route("optionals.index");
    }
}
