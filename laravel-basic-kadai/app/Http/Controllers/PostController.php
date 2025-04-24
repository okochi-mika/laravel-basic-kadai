<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // postsテーブルからすべてのデータを取得
        $posts = DB::table('posts')->get();

        // ビューにデータを渡す
        return view('posts.index', ['posts' => $posts]);
    }
}
