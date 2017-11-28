<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        // Fetch Posts and Paginate
        return view('frontend.blog.index');
    }
    
    public function getSinglePostIndex($post_id, $send = 'frontend')
    {
        // Fetch the post
        return view($end . '.blog.single');
    }
}