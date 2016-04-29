<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\User;

use View;

use App\Category;

class FrontController extends Controller
{

    public function index()
    {
        $title = "page d'accueil";
        //$posts = Post::all();
        $posts = Post::all();

        return view('front.index', compact('posts', 'title')); // équivaut à: ['posts'=> $post]
    }

    public function show($id)
    {
        $title = "page du post";
        $post = Post::find($id);
        return view('front.show', compact('post', 'title'));
    }

    public function showPostByUser($id)
    {
        $user = User::find($id);
        $name = $user->name;
        $posts = $user->posts;

        return view('front.user', compact('posts', 'name'));
    }

    public function showPostByCat($id)
    {
        $category = Category::findOrFail($id);
        $title = $category->title;
        $posts = $category->posts()->published()->get();
        return view('front.category', compact('posts', 'title'));
    }
}
