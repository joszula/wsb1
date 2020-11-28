<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    //return view('test');
    //return['name' = 'WSB', 'content' => 'Tresc strony'];
    return view('test', ['name' => 'WSB', 'content' => 'Tresc strony']);
});
Route::get('/pages/{x}', function ($x) {
    $pages = [
        'about' =>'Strona WSB'
    ];
    return $pages[$x];
});
//
//Route::get('/adress/{city}'), function (String $city) {
 //   echo <<<ADDRESS
 //   Miasto: $city<br>
 //   <hr>
//
//ADDRESS;
//});
Route::get('/address/{city?}/{street?}', function (String $city = "brak danych", String $street = " - ") {
    echo <<<ADDRESS
    Miasto: $city<br>
    Ulica: $street
    <hr>

ADDRESS;
})->name('address');
Route::redirect('/adres/{city?}/{street?}','/address/{city?}/{street?}');
//doac mozliwos stron contact(eaml) oraz home(strona domowa)
Route::get('user/{name}/{age?}', function (String $name, int $age = null) {
    echo"Imię: $name<hr>";
    if ($age !== null){
        echo "Wiek: $age";
    }
})->where(['name'=>'[A-Za-z]+', 'age'=>'[0-9]+']);
