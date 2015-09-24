<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Pokemon;
use App\Capture;

class PokecentreController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find out how many registered trainers there are
        $totalTrainers = User::all()->count();

        $totalTrainerCaptures = Capture::where('user_id',\Auth::user()->id)->count();

        $totalGlobalCaptures = Capture::all()->count();

        return view('pokecentre.index', compact('totalTrainers', 'totalTrainerCaptures', 'totalGlobalCaptures'));
    }

    public function capture()
    {

        // $allPokemon = Pokemon::all();
        $allPokemon = \DB::table('pokemon')->orderBy('name')->get();
        return view('pokecentre.capture', compact('allPokemon'));
    }

     public function postCapture(Request $request){

        $this->validate($request,[

                'pokemon'=> 'required|exists:pokemon,id',
                'photo'=> 'required|image'

            ]);

        $capture = new Capture();

        $fileName = uniqid().'.'.$request->file('photo')->getClientOriginalExtension();

        \Image::make($request->file('photo') )
            ->resize(320, null, function($constraint){
                $constraint->aspectRatio();
            })->save('img/captures/'.$fileName);

        // $capture->photo = 'test.jpeg';

        $capture->photo = $fileName;




        $capture->user_id = \Auth::user()->id;
        $capture->pokemon_id = $request->pokemon;

        $capture->save();

        //find out the name of the pokemon the user has just capture
        $pokemon = Pokemon::findOrFail($request->pokemon);

        return redirect('pokedex/'.$pokemon->name);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
