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
// Route::get('/post/{id}', 'PostController@index');
Route::get('/post/{id}/{name}', 'PostController@show_post');
Route::get('/blog/{title}/{subtitle}/{content}', 'PostController@blog');
Route::get('/contact', 'PostController@contact');


// This type of Route allow you to acess all the controller methods without the need to us use @
// To see the formate of each of these type in terminal php artisan route:list

// Route::resource('posts', 'PostController');
Route::resource('gotta/{message}', 'Postcontroller2');