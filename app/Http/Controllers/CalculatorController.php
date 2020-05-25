<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function calculator(Request $request)
    {
        $result = math_eval($request->output);
        return back()->with(['result' => $result,'output'=>$request->output]);
       // return view('index', ['result' => $result]);
    }
}
