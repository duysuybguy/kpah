<?php

use App\Livewire\Form;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Support\Facades\Route;

Route::get('form', Form::class);
Route::get('/', function () {
    $baiViet = Category::where('slug', 'bai-viet')->first()->posts;
    $phucLoi = Category::where('slug', 'phuc-loi')->first()->posts;
    return view('home', [
        'baiViet' => $baiViet,
        'phucLoi' => $phucLoi
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
