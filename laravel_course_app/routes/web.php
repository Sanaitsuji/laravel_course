<?php

use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relation', function () {
    $users = User::all();
    $addresses = Address::all();
    return view('test', compact('users', 'addresses'));
});

Route::get('/posts', function () {

    $post = Post::find(2);
    $tag = Tag::first();

    $post->tags()->sync([2,3]);

    $posts = Post::all();
    return view('posts', compact('posts'));
});

Route::get('/tags', function () {
    $tags = Tag::all();
    return view('tags', compact('tags'));
});

Route::get('/location', function () {

    $countries = Country::all();
    
    return view('location', compact('countries'));
});

Route::get('image', function () {
    $post = Post::find(1);
    
    return $post->image;

});
