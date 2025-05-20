<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    // 一覧ページ
    public function index() {
        $posts = Auth::user()->posts()->orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    // 詳細ページ
    public function show(Post $post) {
        return view('posts.show' ,compact('post'));
    }
}
