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


Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');


Route::get('/posts/tags/{tag}', 'TagsController@index');




Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store')->name('register');

Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store')->name('login');

Route::post('/logout', 'SessionController@destroy')->name('logout');

Route::get('/password/forgot', 'ForgotPasswordController@create');

Route::post('/password/sendresetemail', 'ForgotPasswordController@store');

Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');

Route::post('/password/reset', 'ResetPasswordController@resetPasswordUser')->name('password.request');



//Route::get('/forgot-password', 'Auth\ForgotPasswordsController');





//Route::get('/', function () {

    /* Pasar las variables a la vista forma 1
     * return view('welcome', [
        'name' => 'Mundo'
    ]);
    */

    // Pasar las variables a la vista forma 2
    //return view('welcome')->with('name', 'Mundo');

    // Pasar las variables a la vista forma 2
    /*
    $name = 'Ivan';
    return view('welcome', ['name' => $name]);
    */

    // Pasar las variables a la vista forma 3
    /*
    $name = 'Kevin';
    $age = '28';
    return view('welcome', compact('name', 'age'));
    */

//    $name = 'Kevin';

    /*
    $tasks = [
        'Ir al almacen',
        'Terminar de limpiar',
        'Llamar a Miguel'
    ];
    */
    // Obtener datos de la base de datos
    // Usando Query Builder
    //  $tasks = DB::table('tasks')->get();
    // USando Eloquent
//    $tasks = Task::all();
    //return $tasks;

//    return view('welcome', compact('name', 'tasks'));

//});


/*
Route::get('/tasks', function() {
    // Obtener datos de la base de datos
    $tasks = DB::table('tasks')->get();

    return view('tasks.index', compact('tasks'));
});
*/

/*
Route::get('/tasks/{id}', function ($id) {
    //dd($id);
    // Usando Query Builder
        //$task = DB::table('tasks')->find($id);
    //Usando Eloquent
    $task = Task::find($id);

    //return $task;
    return view('tasks.show', compact('task'));
});
*/

//Auth::routes();

//Route::get('/home', 'HomeController@index');
