<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sklad;
use DB;

class SkladController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sklads = Sklad::all();
       return view('sklads.index')-> with('sklads', $sklads);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sklads.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'datle' => 'required',
            'mandle' => 'required',
            'marcipan' => 'required',
            'orechy' => 'required',
           

        ] );

        //vytvorit v sklade

        $sklads = new Sklad;
        $sklads->datle = $request->input('datle');
        $sklads->mandle = $request->input('mandle');
        $sklads->marcipan = $request->input('marcipan');
        $sklads->orechy = $request->input('orechy');
        $sklads->save();

        return redirect('/sklad')-> with('success', 'Uložené');
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
