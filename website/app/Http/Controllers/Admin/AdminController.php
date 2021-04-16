<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function addTag(Request $request){
        $create=Tag::create([
            'tagName'=>$request->tagName,
        ]);
        return response()->json([
            'msg'=>'We should return only json'
        ],200);
    }
}
