<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        // Fetch Posts and Paginate
        return view('frontend.blog.index');
    }
    
    public function getSinglePost($post_id, $send = 'frontend')
    {
        // Fetch the post
        return view($end . '.blog.single');
    }
    
    public function getCreatePost()
    {
        $categories = Category::all();
        return view('admin.blog.create_post', ['categories' => $categories]);
    }
    
    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:120|unique:posts',
            'author' => 'required|max:80',
            'body' => 'required'
        ]);
        $post = new Post();
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->save();
        if (strlen($request['categories']) > 0) {
            $categoryIDs = $this->parseCategories($request['categories']);
            foreach ($categoryIDs as $categoryID) {
                $post->categories()->attach($categoryID);
            }
        }
        return redirect()->route('admin.index')->with(['success' => 'Post successfully created!']);
    }
}