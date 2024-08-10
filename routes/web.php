<?php

use App\Livewire\Form;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Support\Facades\Route;

Route::get('form', Form::class);
Route::get('/', function () {
    $news = Category::where('slug', 'tintuc')->first()?->posts()->active()->get();
    $guides = Category::where('slug', 'hd')->first()?->posts()->active()->get();
    $hots = Category::where('slug', 'ds')->first()?->posts()->active()->get();
    return view('home', [
        'news' => $news ?? [],
        'guides' => $guides ?? [],
        'hots' => $hots ?? []
    ]);
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/post/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->first();
    return view('post', [
        'item' => $post
    ]);
});
