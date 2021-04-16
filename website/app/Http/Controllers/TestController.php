<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public  function test(Request $request)
    {
        dd($request->all());
        return response()->json([
            'msg'=>'We should return only json'
        ],200);
    }
}
