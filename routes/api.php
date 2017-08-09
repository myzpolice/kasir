<?php

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionDetail;
use App\Menu;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_item_data/{id}', function(Request $request, $id){
  $menu = Menu::where('kode_menu', $id)->first();
  $res['result'] = $menu;
  return response($res);
});
