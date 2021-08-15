<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\test;

class TestController extends Controller
{
     public function index(){
        $values = test::all();

        // dd($values);

        return view('tests.test', compact('values'));
     }
}
