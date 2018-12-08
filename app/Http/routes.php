<?php
Route::get('/', 'AuthController@signInPath');
Route::post('/signIn', 'AuthController@signIn');
Route::get('/signUp', function () {return view('auth.signUp');});
Route::post('/signUp', 'AuthController@signUp');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/project/list', function () {return view('project.list');});
    Route::get('/project/create', function () {return view('project.create');});
    Route::get('/project/detail/{id}','ProjectController@projectDetail');
    Route::post('/project/createProject','ProjectController@createProject');
    Route::get('/projectListData','ProjectController@getProjectsList');
});


