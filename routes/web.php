<?php
use App\Http\Controllers\ProductController;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->get('product','ProductController@index');
$router->get('product/{id}', 'ProductController@show');
$router->post('product/create', 'ProductController@store');
$router->post('product/update/{id}', 'ProductController@update');
$router->delete('product/delete/{id}', 'ProductController@destroy');

//User Section for Register and Login

$router->post('register','UserController@Register');
$router->post('/login','UserController@Login');
$router->post('/AuthUser','UserController@Login1');
//Article Section for Register and Login

$router->get('articleList', 'ArticleController@index');
$router->post('login','ArticleController@Login');

