<?php
use App\Events\MessagePosted;
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
Route::get('/main', function () {
    return view('main');
});
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
Route::get('/generator', function () {
    return view('dashboard/generator');
});
Route::get('/chatroom', function () {
    return view('dashboard/chatroom');
})->middleware('auth');


Route::get('/messages', function () {
    return App\Message::with('user')->get();
})->middleware('auth');


Route::post('/messages', function () {
//Store the new message
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => request()->get('message')
    ]);
    // announce new mesaage
    broadcast(new MessagePosted($message,$user))->toOthers();
    return ['status' => 'OK'];
})->middleware('auth');

Route::get('/button', function () {
    return view('dashboard/chart');
});
Route::get('/ajax/GetContent', array(
    'uses' => 'AjaxController@loadContent'
));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
