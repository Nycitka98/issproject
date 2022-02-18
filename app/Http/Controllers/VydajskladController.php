<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vydajsklad;
use DB;

class VydajskladController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vydajsklads = VydajSklad::all();
       return view('sklads.index')-> with('vydajsklads', $vydajsklads);
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
            
            'vydajdatle' => 'required',
            'vydajmandle' => 'required',
            'vydajmarcipan' => 'required',
            'vydajorechy' => 'required',
           

        ] );

        //vytvorit v sklade

        $vydajsklads = new Vydajsklad;
        $vydajsklads->vydajdatle = $request->input('vydajdatle');
        $vydajsklads->vydajmandle = $request->input('vydajmandle');
        $vydajsklads->vydajmarcipan = $request->input('vydajmarcipan');
        $vydajsklads->vydajorechy = $request->input('vydajorechy');
        $vydajsklads->save();

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
