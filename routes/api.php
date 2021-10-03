<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\Number;
use \App\Http\Controllers\PostApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    $randomNumber = random_int(0, 999999);
    $result = Number::create([
        'number' => $randomNumber,
    ]);
    return [
        "ID" => $result["id"],
        "Number" => $result["number"],
    ];
});

Route::post('/', [PostApiController::class, "retrieve"]);
