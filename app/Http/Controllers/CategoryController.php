<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function index(Category $category)
    {

        Paginator::useBootstrap();

        $posts = $category->posts()->paginate(6);
        return view('posts.index', compact('posts', 'category'));
    }
}
