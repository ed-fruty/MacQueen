<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(array('prefix' => 'v1', 'middleware' => []), function (\Illuminate\Routing\Router $a) {
    $middleware = [ 'api'];
    $namePrefix = 'api';
    require base_path('routes/api/app.php');
});
