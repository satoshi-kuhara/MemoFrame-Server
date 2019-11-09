<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageApiController extends Controller
{
    public function getMessage(Request $request){
        if($request->input("key") == config('routing.getKey')){
            $message = Message::orderBy("id","desc")->first();
            return [
                "message" => $message["body"],
                "color" => $message["color"]
            ];
        }
        return [
            "message" => config('routing.getFailMessage')
        ];
    }

    public function postMessage(Request $request){
        if($request->input("key") == config('routing.postKey')){
            $body = $request->input("body");
            if($request->has("color")){
                $color = $request->input("color");
            }
            else{
                $color = 0;
            }

            $result = Message::create([
                "body" => $body,
                "board_id" => 0,
                "color"=>$color
            ]);

            if($request->input('from') == "htmlpage"){
                $redirectPath = './'.env('routing.inputUrl');
                return redirect($redirectPath);
            }

            return $result;
        }
        return [
            "message" => config('routing.postFailMessage')
        ];
    }

}
