<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Category;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories =Category::all();
        return view('admin.categories.index', compact('categories'));
    }
}

