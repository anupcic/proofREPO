<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::group(['middleware' => 'auth'], function () {
//     Route::controller('edit', function () {
//         return view('edit');
//     });
// });

Route::get('/',array('uses' => 'StoreController@getIndex'));
Route::controller('datapros','DataprosController');
Route::controller('store','StoreController');
Route::controller('users','UsersController');
Route::controller('about','AboutController');

//Route::controller('edit','EditController');

// Route::group(['middleware' => 'auth'], function ()
// {
//     //suspend, activate, delete
//     Route::controller('datapros','DataprosController');

// });
Route::group(['middleware' => 'auth'], function ()
{
    //suspend, activate, delete
    Route::controller('edit','EditController');

});
Route::group(['middleware' => 'auth'], function ()
{
    //suspend, activate, delete
Route::controller('admin/categories','CategoriesController');
    
    
});

//Route::controller('store/view/{id}','StoreController');
// Route::get('profile', ['middleware' => 'auth', function() {
//     // Only authenticated users may enter...
//     Route::controller('edit','EditController',['middleware'=>'auth']);
// }]);


//Route::get('/home', 'HomeController@index');
