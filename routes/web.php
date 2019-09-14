<?php

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
// Route::get('/{id}', function ($id) {
//     return $id;
// });
// Route::get('/contact/form/aboutus', array('as' => "contact", function() {

//         $url = route('contact');

//         return $url;
// }));


// This line allows the url /post to acess the POSTCONTROLLER controller in the controlers file
// and enable acess to the index method (becasue of the @index)


// You can pass permaniters via the route and then in the index method add the $id to the index() method
Route::get('/post/{id}', 'PostController@index');
