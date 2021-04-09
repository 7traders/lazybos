<?php

namespace App\Http\Controllers;

use App\Models\Lazybininkas;
use Illuminate\Http\Request;

class LazybininkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lazybininkai = Lazybininkas::all();
        return view('lazybininkas.index', ['lazybininkai' => $lazybininkai]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lazybininkas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lazybininkas = new Lazybininkas;
        $lazybininkas->name = $request->lazybininkas_name;
        $lazybininkas->surname = $request->lazybininkas_surname;
        $lazybininkas->bet = $request->lazybininkas_bet;
        $lazybininkas->save();
        return redirect()->route('lazybininkas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lazybininkas  $lazybininkas
     * @return \Illuminate\Http\Response
     */
    public function show(Lazybininkas $lazybininkas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lazybininkas  $lazybininkas
     * @return \Illuminate\Http\Response
     */
    public function edit(Lazybininkas $lazybininkas)
    {
        return view('lazybininkas.edit', ['lazybininkas' => $lazybininkas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lazybininkas  $lazybininkas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lazybininkas $lazybininkas)
    {
        $lazybininkas->name = $request->lazybininkas_name;
        $lazybininkas->surname = $request->lazybininkas_surname;
        $lazybininkas->bet = $request->lazybininkas_bet;
        $lazybininkas->save();
        return redirect()->route('lazybininkas.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lazybininkas  $lazybininkas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lazybininkas $lazybininkas)
    {
        $lazybininkas->delete();
        return redirect()->route('lazybininkas.index');

    }
}
