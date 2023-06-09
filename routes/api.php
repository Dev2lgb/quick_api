<?php

use App\Http\Controllers\DesignSettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
데이터입력 : post
수정 : put
삭제 : delete
데이터조회 : get
*/

Route::post('/designsetting',[DesignSettingController::class,'store']);
Route::get('/designsetting',[DesignSettingController::class,'index']);
