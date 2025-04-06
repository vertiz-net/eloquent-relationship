<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\actingAs;

it('a post can be liked', function () {

    actingAs(User::factory()->create());

    $post = Post::factory()->create();

    $post->like();

    expect($post->likes->count())->toBe(1);
    expect($post->likes->contains(Auth::user()->id))->toBeTrue();
});

it('a comment can be liked', function () {

    actingAs(User::factory()->create());

    $comment = Comment::factory()->create();

    $comment->like();

    expect($comment->likes->count())->toBe(1);
    expect($comment->likes->contains(Auth::user()->id))->toBeTrue();
});
