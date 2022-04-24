<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::orderBy('points', 'desc')->paginate(10);
        return view('drivers.index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'nationality' => 'required',
            'scuderia' => 'required',
            'number' => 'required',
            'value' => 'required|integer',
            'image' => 'required|max:255',
        ]);

        $newDriver = new Driver();
        $newDriver->name = $request->get('name');
        $newDriver->age = $request->get('age');
        $newDriver->nationality = $request->get('nationality');
        $newDriver->scuderia = $request->get('scuderia');
        $newDriver->number = $reques->get('number');
        $newDriver->value = $request->get('value');
        $newDriver->image = $request->get('image');
        $newDriver->save();
        return redirect('/drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        return view('drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('drivers.edit')->with('driver',$driver);
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
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'nationality' => 'required',
            'points' => 'required|integer',
            'scuderia' => 'required',
            'number' => 'required',
            'value' => 'required|integer',
            'image' => 'required|max:255',
        ]);

        $driver = Driver::find($id);
        $driver->name = $request->get('name');
        $driver->age = $request->get('age');
        $driver->nationality = $request->get('nationality');
        $driver->points = $request->get('points');
        $driver->scuderia = $request->get('scuderia');
        $driver->number = $request->get('number');
        $driver->value = $request->get('value');
        $driver->image = $request->get('image');
        $driver->save();
        return redirect('/drivers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect('/drivers');
    }
}