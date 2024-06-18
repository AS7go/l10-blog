<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        // return view('main.index');
        // return '1111111';
        return view('admin.main.index');
    }
}

