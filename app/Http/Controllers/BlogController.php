<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        try {
            $blogs = Post::latest()->paginate(3);
            $features = Post::where('featured', 1)->get();
            return view('visitors.blog', compact('blogs', 'features'));
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function showBlog($id)
    {
        try {
            $blog = Post::where('id', $id)->first();
            $features = Post::where('featured', 1)->get();
            return view('visitors.singleBlog',compact('blog','features'));
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}
