<?php

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

Route::get('/', 'MainController@index');

#USER
Route::get('/login', 'UserController@login')->name('login');
Route::post('/auth', 'UserController@authorization')->name('auth');

Route::get('/register', 'UserController@register')->name('register');
Route::post("/registration", "UserController@registration")->name('registration');

Route::post('/logout', 'UserController@logout')->name('logout');


#QUIZ CRUD

Route::group(['prefix'=>'user/quizzes','as'=>'user.quizzes'], function(){

    Route::get('/', 'QuizCrud\QuizController@index');
    Route::get('/add', 'QuizCrud\QuizController@add')->name('.add');
    Route::post('/insert', 'QuizCrud\QuizController@insert')->name('.insert');
    Route::delete('delete/{quiz_id}', 'QuizCrud\QuizController@delete')->name('.delete');
    Route::get('/edit/{quiz_id}', 'QuizCrud\QuizController@edit')->name('.edit');
    Route::put('/update/{quiz_id}', 'QuizCrud\QuizController@update')->name('.update');


    Route::get('questions/{quiz_id}', 'QuizCrud\QuestionController@index')->name('.questions');
    Route::get('/questions/{quiz_id}/add', 'QuizCrud\QuestionController@add')->name('.questions.add');
    Route::post('/questions/{quiz_id}/insert', 'QuizCrud\QuestionController@insert')->name('.questions.insert');

    Route::delete('/questions/{question_id}/delete', 'QuizCrud\QuestionController@delete')->name('.questions.delete');
    Route::get('/questions/edit/{question_id}', 'QuizCrud\QuestionController@edit')->name('.questions.edit');
    Route::put('/questions/edit/{question_id}', 'QuizCrud\QuestionController@update')->name('.questions.update');


    Route::get('/questions/{question_id}/options', 'QuizCrud\QuestionOptionController@index')->name('.questions.options');
    Route::get('/questions/{question_id}/options/add', 'QuizCrud\QuestionOptionController@add')->name('.questions.options.add');
    Route::post('/questions/{question_id}/options/insert', 'QuizCrud\QuestionOptionController@insert')->name('.questions.options.insert');
    Route::delete('/options/delete/{option_id}', 'QuizCrud\QuestionOptionController@delete')->name('.questions.options.delete');
    Route::get('/options/edit/{option_id}', 'QuizCrud\QuestionOptionController@edit')->name('.questions.options.edit');
    Route::put('/options/edit/{option_id}', 'QuizCrud\QuestionOptionController@update')->name('.questions.options.update');

});

#QUIZ

Route::get('/quiz/{quiz_id}', 'Quiz\QuizController@details')->name('quiz.details');
Route::get('/quiz/play/{quiz_id}', 'Quiz\QuizController@play')->name('quiz.play');

#ADMIN


Route::get('/admin', 'Admin\QuizController@index')->name('admin.index');

Route::group(['prefix'=>'admin/quizzes','as'=>'admin.quizzes'], function(){

    Route::delete('delete/{quiz_id}', 'Admin\QuizController@delete')->name('.delete');
    Route::get('/{quiz_id}', 'Admin\QuizController@quizDetails')->name('.quizDetails');
    Route::put('/update/{quiz_id}', 'Admin\QuizController@update')->name('.update');

    Route::post('/{quiz_id}/approve', 'Admin\QuizController@approveQuiz')->name('.approveQuiz');


    Route::get('/questions/{quiz_id}/add', 'Admin\QuestionController@add')->name('.questions.add');
    Route::post('/questions/{quiz_id}/insert', 'Admin\QuestionController@insert')->name('.questions.insert');

    Route::delete('/questions/{question_id}/delete', 'Admin\QuestionController@delete')->name('.questions.delete');
    Route::get('/questions/edit/{question_id}', 'Admin\QuestionController@edit')->name('.questions.edit');
    Route::put('/questions/edit/{question_id}', 'Admin\QuestionController@update')->name('.questions.update');

    Route::get('/questions/{question_id}/options', 'Admin\QuestionOptionController@index')->name('.questions.options');
    Route::get('/questions/{question_id}/options/add', 'Admin\QuestionOptionController@add')->name('.questions.options.add');
    Route::post('/questions/{question_id}/options/insert', 'Admin\QuestionOptionController@insert')->name('.questions.options.insert');
    Route::delete('/options/delete/{option_id}', 'Admin\QuestionOptionController@delete')->name('.questions.options.delete');
    Route::get('/options/edit/{option_id}', 'Admin\QuestionOptionController@edit')->name('.questions.options.edit');
    Route::put('/options/edit/{option_id}', 'Admin\QuestionOptionController@update')->name('.questions.options.update');

});