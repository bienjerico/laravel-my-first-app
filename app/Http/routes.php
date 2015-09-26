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

//Route::get('/','PagesController@index');

//Route::get('about','PagesController@about');

//Route::get('/', function()
//{
//    return 'Home Page';
//});


 Route::bind('song',function($slug){

	return App\Song::where('slug',$slug)->first();
        
 });

//get('songs','SongsController@index');
//get('songs/{song}','SongsController@show');
//get('songs/{song}/edit','SongsController@edit');
//patch('songs/{song}','SongsController@update');

//get('employee',['as' => 'employee','uses' => 'EmployeeController@index']);
//get('employee/{id}',['as' => 'employeedetail','uses' => 'EmployeeController@index']);
Route::resource('employee','EmployeeController',
        ['names' => 
            [
                'index' => 'employee',
                'show' => 'employeedetail',
                'edit' => 'employeeedit',
                'create' => 'employeecreate',
                'update' => 'employeeupdate',
                'store' => 'employeestore',
                'destroy' => 'employeedelete',
            ]
            
        ]);


Route::get('project/views/create',['as' => 'projectviewcreate',
                                   'uses' => 'ProjectsController@create']);
Route::resource('projects','ProjectsController');
