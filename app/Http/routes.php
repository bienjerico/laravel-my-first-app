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
Route::resource('employees','EmployeeController',
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




Route::post('projects/views/create',['as' => 'projectsviewcreate',
                                   'uses' => 'ProjectsController@create']);
Route::post('projects/views/edit',['as' => 'projectsviewedit',
                                   'uses' => 'ProjectsController@edit']);
Route::post('projects/views/predestroy',['as' => 'projectsviewpredestroy',
                                   'uses' => 'ProjectsController@predestroy']);
Route::post('projects/views/projectlist',['as' => 'projectsviewlist',
                                   'uses' => 'ProjectsController@projectlist']);

Route::get('projects',['as' => 'projects',
                        'uses' => 'ProjectsController@index']);
Route::post('projects/store',['as' => 'projectsstore',
                        'uses' => 'ProjectsController@store']);
Route::post('projects/update/{id}',['as' => 'projectsupdate',
                        'uses' => 'ProjectsController@update']);
Route::post('projects/destory/{id}',['as' => 'projectsdestroy',
                        'uses' => 'ProjectsController@destroy']);


