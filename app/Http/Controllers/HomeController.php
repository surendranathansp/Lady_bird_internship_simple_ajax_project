<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');

    }
    public function upload(Request $request)
    {
        $data = new post;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json(["message" => "data uploaded  successfully"]);



    }







}
