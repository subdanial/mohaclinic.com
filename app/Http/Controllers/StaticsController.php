<?php

namespace App\Http\Controllers;

use App\Statics;
use Illuminate\Http\Request;

class StaticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $statics = Statics::first();
        return view('index',compact('statics'));
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
     * @param  \App\Statics  $statics
     * @return \Illuminate\Http\Response
     */
    public function show(Statics $statics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Statics  $statics
     * @return \Illuminate\Http\Response
     */
    public function edit(Statics $statics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Statics  $statics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statics $statics)
    {
        $statics = $statics->first();
        // dd($statics);
        $statics->title = $request->title;
        $statics->phone = $request->phone;
        $statics->hero = $request->hero;
        $statics->update();
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Statics  $statics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statics $statics)
    {
        //
    }
}
