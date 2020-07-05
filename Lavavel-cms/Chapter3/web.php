<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Post;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showDetails');

Route::get('profile/{name}', 'ProfileController@showProfile');

//Route::get('about', function ()
//{
//    return 'About Content';
//});
Route::get('about/directions', array('as' => 'directions', function ()
{
    $theURl = URL::route('directions');
    return "Directions go to this URL: $theURl";
}));
Route::any('submit-form',function ()
{
    return 'Process Form';
});
//Route::get('about/{theSubject}', function ($theSubject){
//    return $theSubject . ' content goes here';
//});

//Controller Nang cao
Route::get('/about/{theSubject}', 'AboutController@showSubject');
Route::get('about/classes/{theSubject}', function ($theSubject){
    return "Content on $theSubject";
});
Route::get('about/classes/{theArt}/{thePrice}', function ($theArt, $thePrice){
    return "The product in $theArt and $thePrice";
});

Route::get('where', function (){
    return Redirect::route('directions');
});
// Sử dụng sql trong laravel
Route::get('/insert', function ()
{
    DB::insert ('insert into posts(title,body) values (?,?)', ['PHP with laravel', 'Laravel í the best fremework']);
    return 'DONE';
});
Route::get('/read', function ()
{
    $result = DB::select('select * from posts  ');
//    return $result;
    foreach ($result as $post)
    {
        return $post->body;
    }
});
Route::get('update', function ()
{
    $update = DB::update('update posts set title = "New title hihi" where id > ?', [1]);
    return $update;
});
Route::get('delete', function ()
{
    $deleted = DB::delete('delete from posts where id = ?', [2]);
    return $deleted;
});

// xử lý dũ liệu với eloquent ORM
Route::get('readAll', function ()
{
   $posts = Post::all();

});
Route::get('findID', function ()
{
    $posts = Post::Where('id', '>=', 1)
        ->Where('title', 'PHP with laravel')
        ->Where('body', 'Laravel í the best fremework', '%Laravel')
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();
    foreach ($posts as $p){
        echo $p->title . " " . $p->body;
        echo "<br>";
    }
});
Route::get('insertORM', function ()
{
    $p = new Post;
    $p->title = 'insert ORM';
    $p->body = 'insert done done ORM ';
    $p->save();
});
Route::get('updateORM', function ()
{
    $p = Post::Where('id', 4 )->first();
    $p->title = 'update ORM';
    $p->body = 'updated ahihi ';
    $p->save();
});
Route::get('deleteORM', function ()
{
    Post::where('id', '>=', 5)
    ->delete();
});
Route::get('destroyORM', function ()
{
    Post::destroy([7,5]);
});


