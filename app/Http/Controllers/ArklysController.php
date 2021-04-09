<?php

namespace App\Http\Controllers;

use App\Models\Arklys;
use Illuminate\Http\Request;
use App\Models\Lazybininkas;

class ArklysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arkliai = Arklys::all();
        return view('arklys.index', ['arkliai' => $arkliai]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arklys.create');
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arklys = new Arklys;
        $arklys->name = $request->arklys_name;
        $arklys->runs = $request->arklys_runs;
        $arklys->wins = $request->arklys_wins;
        $arklys->about = $request->arklys_about;
        $arklys->save();
        return redirect()->route('arklys.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arklys  $arklys
     * @return \Illuminate\Http\Response
     */
    public function show(Arklys $arklys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arklys  $arklys
     * @return \Illuminate\Http\Response
     */
    public function edit(Arklys $arklys)
    {
        return view('arklys.edit', ['arklys' => $arklys]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arklys  $arklys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arklys $arklys)
    {
        $arklys->name = $request->arklys_name;
        $arklys->runs = $request->arklys_runs;
        $arklys->wins = $request->arklys_wins;
        $arklys->about = $request->arklys_about;
        $arklys->save();
        return redirect()->route('arklys.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arklys  $arklys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arklys $arklys)
    {
        $arklys->delete();
        return redirect()->route('arklys.index');
 
    }
}
