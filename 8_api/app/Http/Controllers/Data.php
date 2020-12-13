<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    function list(){
        return Http::get('http://jsonplaceholder.typicode.com/posts')->body();
    }
}
