<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    function list(){
        $tab =  Http::get('http://jsonplaceholder.typicode.com/albums')->json();
        $nbp = Http::get('http://api.nbp.pl/api/exchangerates/tables/A')->json();
        return view('data',['tab'=>$tab]);
        return view('nbp',['nbp'=>$nbp]);
    }
    function nbp(){
        $nbp = Http::get('http://api.nbp.pl/api/exchangerates/tables/A/?formatjson')->json();
        return view('nbp',['nbp'=>$nbp]);
    }
}
