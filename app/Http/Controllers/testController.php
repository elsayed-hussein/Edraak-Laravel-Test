<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function showTest($id)
    {
        return view('test',['id'=>$id]);
    }
}
