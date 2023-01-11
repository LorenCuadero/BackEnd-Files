<?php

//extension
//ayaw kalimti ni  this is very important!!!
use App\Http\Controllers\AmazingController;
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

// dawat ug ngalan sa inyu page "welcome"

// mao ni ang home route

// uri ()
/* callback - 
function () {
    return view('welcome');
});
*/

// dapat same ang name sa id ug variable nga naa sa function para ok-- og mo run
Route::get('users/{id}', function ($id){

    $one = 10;

    
    $sum = $one *  $id;
    return $sum;

});

Route::get('/users', function () {
    $one = 1;
    return $one;
});

//Ex route na pn / name sa imo classmate

// Route::get('pn/{name}', function ($name){
   
//     return "Hi ".$name;

// });



Route::get('pn/{name}/ages/{age}', function ($name, $age) {

    $users = [ 
        'user 1',
        'users 2',
        'users 3',

    ];

    return view ('profile', [
        'name' => $name, 
        'age' => $age,
        'usersni' => $users
    ]);

});


// i return niya whatever ang imo i type after sa imo g himo na router




Route::get('controller', [
    //controller name
    AmazingController::class,
    'index'
    // method
]);
// array to tawag sa sulod sa class nga Amazing Controller

Route::get('controllerni', [
    //controller name
    AmazingController::class,
    'new'
    // method or function name
]);

Route::get('practice', [
    //controller name
    AmazingController::class,
    'pract'
    // method or function name
]);



// controllerni kay route na sya
