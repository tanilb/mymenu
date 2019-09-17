<?php declare(strict_types = 1);

use App\Http\Controllers\MenuItemController;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
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

Route::get('/menu', [MenuItemController::class,"index"]);


Route::get('/menu/items', [MenuItemController::class,"index"]);
Route::get('/menu/items/{id}', [MenuItemController::class,"show"]);

Route::get('/stores', [MenuItemController::class,"show"]);




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
