<?php





    Route::get('/', function () {
        return redirect('/home');
    });
    Route::get('/home', 'Controller@getP3IndexPage');


    Route::get('/lorem-ipsum', 'LoremController@getLoremMainPage');
    Route::post('/lorem-ipsum', 'LoremController@postLoremDisplay');

    Route::get('/user-generator', 'UserGeneratorController@getUserGeneratorMainPage');
    Route::post('/user-generator', 'UserGeneratorController@postUserGeneratorDisplay');
