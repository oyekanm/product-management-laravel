<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class IndexController extends Controller
{
    public function index(){
        $prevData = Storage::get("products.json");
        $decodeData = json_decode($prevData, true);

        // print_r($decodeData);
        return view('index',['products' => $decodeData]);
    }

    public function create(Request $request){
        $prevData = Storage::get("products.json");
        $decodeData = json_decode($prevData);

        $newData = [
            "quantity" => $request->quantity,
            "name" => $request->productName,
            "price" => $request->price,
            "created_at" => date("Y-m-d h:i:sa"),
            "total" => $request->price * $request->quantity
        ];

        $decodeData [] = $newData;
        $encodeData= json_encode($decodeData);
        Storage::put("products.json",$encodeData);
        return response()->json($encodeData);
    }

    public function update(){
    }

}
