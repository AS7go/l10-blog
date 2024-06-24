<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Category;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}

