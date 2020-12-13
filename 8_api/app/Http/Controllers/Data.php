<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    function list(){
        $tab =  Http::get('http://jsonplaceholder.typicode.com/albums')->json();
        return view('data',['tab'=>$tab]);
    }
}
