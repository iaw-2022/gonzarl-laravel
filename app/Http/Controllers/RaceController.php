<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Race;
use App\Models\RaceImage;
use App\Models\Finishes;

class RaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::orderBy('date', 'asc')->paginate(10);
        //pasar un arreglo de race_id => finishes_id
        $finishes_ids = [];
        foreach ($races as $race){
            $finish = Finishes::where('race_id', $race->id)->first();
            $finishes_ids = Arr::add($finishes_ids, $race->id, $finish);
        }
        return view('races.index')->with('races', $races)->with('finishes_ids',$finishes_ids);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('races.create');
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
            'city' => 'required',
            'country' => 'required',
            'country_code' => 'required',
            'date' => 'required|date',
            'style' => 'required',
            'laps' => 'required'
        ]);

        $newRace = new Race();
        $newRace->city = $request->get('city');
        $newRace->country = $request->get('country');
        $newRace->country_code = $request->get('country_code');
        $newRace->date = $request->get('date');
        $newRace->style = $request->get('style');
        $newRace->laps = $request->get('laps');
        $newRace->save();
        return redirect('/races');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $race = Race::find($id);
        $image = RaceImage::where('race_id',$race->id)->first();
        return view('races.show')->with('race', $race)->with('image',$image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        return view('races.edit')->with('race',$race);
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
            'city' => 'required',
            'country' => 'required',
            'country_code' => 'required',
            'date' => 'required|date',
            'style' => 'required',
            'laps' => 'required'
        ]);

        $race = Race::find($id);
        $race->city = $request->get('city');
        $race->country = $request->get('country');
        $race->country = $request->get('country_code');
        $race->date = $request->get('date');
        $race->style = $request->get('style');
        $race->laps = $request->get('laps');
        $race->save();
        return redirect('/races');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $race = Race::find($id);
        $race->delete();
        return redirect ('/races');
    }
}
