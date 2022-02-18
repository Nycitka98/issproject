<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medzisklad;
use DB;

class MedziskladController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $medzisklads = Medzisklad::all();
       dd($medzisklads);
       return view('sklads.index', ['medzisklads'=>$medzisklads]);
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
            
            'medzidatle' => 'required',
            'medzimandle' => 'required',
            'medzimarcipan' => 'required',
            'medziorechy' => 'required',
           

        ] );

        //vytvorit v sklade

        $medzisklads = new Medzisklad;
        $medzisklads->medzidatle = $request->input('medzidatle');
        $medzisklads->medzimandle = $request->input('medzimandle');
        $medzisklads->medzimarcipan = $request->input('medzimarcipan');
        $medzisklads->medziorechy = $request->input('medziorechy');
        $medzisklads->save();

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
