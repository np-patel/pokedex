<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pokemon;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Pokemon from the database
        $allPokemon = Pokemon::all();

        return view('pokedex.index', compact('allPokemon'));
    }

    public function vote($id, $userVote){
        // return $id.' '.$vote;

        //make sure the capture is real and vote is valid

        $vote = new \App\Vote();

        $vote->user_id = \Auth::user()->id;
        $vote->capture_id = $id;
        $vote->vote = $userVote == 'up' ? 'true' : 'false';
        $vote->save();

        $capture = \App\capture::findOrFail();

        return redirect('pokedex/'.$capture->pokemon->name)
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
    public function show($name)
    {
        //get additional info about pokemon
        $pokemon = Pokemon::where('name', $name)->firstOrFail();

        return view('pokedex.show', compact('pokemon'));
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
