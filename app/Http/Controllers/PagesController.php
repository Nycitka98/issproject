<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sklad(){
        $title = 'Sklad!';
        //return view('pages.sklad', compact('title'));
        return view('pages.sklad') ->with('title',$title);

    }

    public function zamestnanci(){
        $title = 'Zamestnanci!';
        return view('pages.zamestnanci')->with('title',$title);

    }

    public function ekonomika(){
        $data = array(
            'title' => 'Ekonomika',
            'ekonomika' => ['ročná', 'polročná', 'mesačná']
   
        );
        return view('pages.ekonomika')->with($data);

    }
}
