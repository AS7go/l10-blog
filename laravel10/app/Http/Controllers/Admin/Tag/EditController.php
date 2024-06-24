<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Category;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
        // dd('Category22222');
    }
}

