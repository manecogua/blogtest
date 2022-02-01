<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostSearcherController extends Controller
{
    //
    /**
     * Display listing of resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPosts()
    {
        

        return view('posts');
    }
}
