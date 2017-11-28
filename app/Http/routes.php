<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Frontend routes */
/* Blog routes */

Route::get('/', [
    'uses' => 'PostController@getBlogIndex',
    'as' => 'blog.index'
    ]);

Route::get('/blog', [
    'uses' => 'PostController@getBlogIndex',
    'as' => 'blog.index'
    ]);
    
Route::get('/blog/{post_id}', [
    'uses' => 'PostController@getSinglePost',
    'as' => 'blog.single'
    ]);
    
    /* Other Routes */
Route::get('/about', function() {
    return view('frontend.other.about');
    })->name('about');
    
Route::get('/contact', [
    'uses' => 'ContactMessageController@getContactIndex',
    'as' => 'contact'
    ]);
    
// Backend route    
    
Route::group([
    'prefix' => '/admin'
], function(){
    Route::get('/', [
    'uses' => 'AdminController@getIndex',
    'as' => 'admin.index'
    ]);
    
    Route::get('/blog/posts/create', [
        'uses' => 'PostController@getCreatePost',
        'as' => 'admin.blog.create_post'
    ]);
    
    Route::post('/blog/post/create', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'admin.blog.post.create'
    ]);
    
});