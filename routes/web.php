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

//use App\Task;


//$stripe = App::make('App\Billing\Stripe'); OR
$stripe = resolve('App\Billing\Stripe');


Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

/*Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');*/


//Route::get('/tasks', function () {

    /*$tasks = [
        'watch laracasts',
        'go to store',
        'got to sleep'
    ];

    return view('welcome', [

        'name' => 'Matteo',
        'tasks' => $tasks

    ]);*/

    //$tasks = DB::table('tasks')->get();

    //$tasks = Task::where('completed', 1)->get();

    //$tasks = Task::incomplete()->where('id', '>=', '2')->get();
    //return view('tasks.index', compact('tasks'));

//});

/*Route::get('/tasks/{task}', function ($id) {


   // $tasks = DB::table('tasks')->find($id);

    $tasks = Task::find($id);

    return view('tasks.show', compact('tasks'));

});*/

