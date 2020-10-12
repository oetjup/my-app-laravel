<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class TagController extends Controller
{
    //
    public function index(Tag $tag)
    {

        Paginator::useBootstrap();

        $posts = $tag->posts()->paginate(6);
        return view('posts.index', compact('posts', 'tag'));
    }
}
