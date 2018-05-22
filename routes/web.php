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

//Route::get('/', ['as'=>'home', function () {  // имя роута
//    return view('welcome');
//}]);


Route::get('/', ['as' => 'home', 'uses' => 'IndexController@show']);
Route::get('/about', ['as' => 'about', 'uses' => 'Admin\AboutController@about']);
Route::get('/articles', ['as' => 'articles', 'uses' => 'IndexController@show']);
Route::get('/article/{id}', ['as'=>'article', 'uses' => 'IndexController@show']);


//Route::get('/page', function () {
//    return view('page');
//});

//
//Route::get('/hello', function (){
////    print_r($_ENV);
//    echo config('app.locale');
//    return;
//});
//
//
//Route::post('/comments', function (){
//    var_dump($_POST);
//});


//Route::post('/comment', 'FirstController@addComment');


//
//Route::match(['get', 'post'], '/comments', function (){  // или post или get
//    var_dump($_POST);
//});
//
//Route::any('/comments', function (){  // любой тип запроса
//    var_dump($_POST);
//});

//
//Route::get('hello/{id}', function ($id) {
//    echo $id;
//    return;
//});

//
//Route::get('hello/{id}/{cat}', function ($id, $cat) {
//    echo $id . '|' . $cat;
//    return;
//});
//
//
//Route::get('hello/{id?}', function ($id = null) {  // параметр не обязателен
//    echo $id;
//    return;
//});
//
//
//Route::get('hello/{id}', function ($id) {
//    echo $id;
//    return;
//})->where('id', '[0-9]+');
//
//
//Route::get('hello/{id}/{cat}', function ($id, $cat) {
//    echo $id;
//    return;
//})->where(['id' => '[0-9]+', 'cat' => '[a-zA-Z]+']);



// Группа маршрутов
//Route::group(['prefix' => 'admin'], function (){ // массив параметров
////    Route::get('page/create/{var}', function () {
//    Route::get('page/create', function () {
////        echo 'page/create';
////        echo route('home');  // ссылка на главную страницу
////        redirect()->route('home');
////       return redirect()->route('article', ['id' => '3']);
////    $route = Route::current();
//
//
//    $route = Route::current();
//    echo $route->getName();
////        echo $route->getParametr('var', 34);
//
//
//    })->name('cretepage');
//
//    Route::get('page/edit', function () {
//        echo 'page/edit';
//    });
//
//});



// Controllers
//Route::get('/about', 'Dir\FirstController@show'); // FirstController имя контроллера, show имя метода
//Route::get('/about/{id}', 'FirstController@show');

//Route::get('/articles', 'Admin\CoreController@getArticles');
//Route::get('/articles', ['as'=>'articles', 'uses'=>'Admin\CoreController@getArticles']);
//Route::get('/article/{id}', 'Admin\CoreController@getArticle');
//Route::get('/article/{id}', ['as'=>'article', 'uses' => 'Admin\CoreController@getArticle']);

// Rest
// php artisan make:controller Admin/CoreResourceController --resource

// list pages
Route::get('/pages/add', 'Admin\CoreResourceController@add'); // добавить свой запрос в контроллер

Route::resource('/pages', 'Admin\CoreResourceController', ['only' => ['index', 'show']]);
// ['only' => ['index', 'show']] какие методы применять для роута
// ['exept' => ['index', 'show']] кроме указанных
// имена роутов как в методах контроллера
// pages.index,
// pages.create,
// pages.store,
// pages.show,
// pages.edit,
// pages.update,

//Route::controller('pages', 'PagesController', ['getIndex' => 'pages.index']);
// ['getIndex' => 'pages.index'] имя для создаваемого маршрута
//Route::controller('users', 'UserController');

Route::resource('pages', 'PagesController');
//Route::resource('users', 'UserController');
