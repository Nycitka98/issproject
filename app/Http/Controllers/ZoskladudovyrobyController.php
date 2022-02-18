<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zoskladudovyroby;
use DB;

class ZoskladudovyrobyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zoskladudovyrobies = Zoskladudovyroby::all();
       return view('sklads.index')-> with('zoskladudovyrobies', $zoskladudovyrobies);
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
            
            'zoskladudovyrobydatle' => 'required',
            'zoskladudovyrobymandle' => 'required',
            'zoskladudovyrobymarcipan' => 'required',
            'zoskladudovyrobyorechy' => 'required',
           

        ] );

        //vytvorit v sklade

        $zoskladudovyrobies = new Zoskladudovyroby;
        $zoskladudovyrobies->zoskladudovyrobydatle = $request->input('zoskladudovyrobydatle');
        $zoskladudovyrobies->zoskladudovyrobymandle = $request->input('zoskladudovyrobymandle');
        $zoskladudovyrobies->zoskladudovyrobymarcipan = $request->input('zoskladudovyrobymarcipan');
        $zoskladudovyrobies->zoskladudovyrobyorechy = $request->input('zoskladudovyrobyorechy');
        $zoskladudovyrobies->save();

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
