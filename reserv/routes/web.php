<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;

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

Route::get('saludo',function(){
    echo "Hola";
});

Route::get('saludo/{name}',function($name){
    echo "Hola ".$name;
});

Route::get('suma/{num1}/{num2}/{num3?}',function($num1,$num2,$num3=0){
    echo $num1 + $num2 + $num3;
})->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);


Route::get('reserv/',[ReservationController::class,'index']);

Route::get('users/', [UserController::class,'index']);

Route::get('users/create',[UserController::class, 'create']);

Route::get('users/{id}',[UserController::class,'show']);

Route::post('users/', [UserController::class,'store']);




// Route::post('suma/',function(Request $request){

// });
