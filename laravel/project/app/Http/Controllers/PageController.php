<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function show($drive){
    $drives = [
        'fdd' => 'Dyskietka',
        'ssd' => 'Dysk SSD',
        'hdd'  => 'Dysk HDD'

    ];
    return $drives[$driver];
    
}
function index(){
    $drives = [
        'fdd' => 'Dyskietka',
        'ssd' => 'Dysk SSD',
        'hdd'  => 'Dysk HDD'

    ];
    pp($drives);
}


}
