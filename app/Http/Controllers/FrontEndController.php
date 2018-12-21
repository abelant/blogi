<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Category;
use App\Tag;


class FrontEndController extends Controller
{
    public function index(){
        return view('index')
                ->with('title', Setting::first()->site_name)
                ->with('categories', Category::take(6)->get())
                ->with('posts', Post::orderBy('created_at', 'desc')->get())
                ->with('technology', Category::find(3))
                ->with('lifestyle', Category::find(2))
                ->with('sport', Category::find(4))
                ->with('world', Category::find(5))
                ->with('science', Category::find(6))
                ->with('culture', Category::find(7))
                ->with('settings', Setting::first());
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('single')->with('post', $post)
                             ->with('title', $post->title)
                             ->with('categories',Category::take(6)->get())
                             ->with('settings', Setting::first())
                             ->with('tags',$post->tags);
    }
}
