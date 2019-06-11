<?php

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Resources\MessageResource;
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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::get('/message', 'MessageApiController@getMessage');

Route::get('/message', function (Request $request) {
    //return new MessageResource(Message::find(1));
    if($request->input("key")=="dedededen"){
        $message = Message::orderBy("id","desc")->first();
        return ["message"=>$message["body"]];
    }
    return ["message"=>"にんげんだもの。みつを。"];
});

Route::post('/message', function (Request $request) {
    if($request->input("key")=="uhehehe"){
        $body = $request->input("body");
        return Message::create(["body"=>$body,"board_id"=>0]);
    }
    return ["message"=>"白ヤギさんったら読まずに食べた。"];
});