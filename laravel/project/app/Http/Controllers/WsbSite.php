<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsbSite extends Controller
{
    function index($site){
        //echo "WSB controller";
        return ['site'=>$site, 'city'=>'Poznan'];
    }
}
