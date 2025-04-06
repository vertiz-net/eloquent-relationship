<?php

use App\Models\Affiliation;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $user = User::first();

    // $post = $user->posts()->create([
    //     'title' => 'My first post',
    //     'body' => 'This is the body of my first post'
    // ]);

    // $post->tags()->attach([1, 2]);

    // $affiliation = Affiliation::find(2);
    // return $affiliation->posts;

    return view('welcome');
});
