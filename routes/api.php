<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('check-answer', 'Api\QuizController@checkAnswer');