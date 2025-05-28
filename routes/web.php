<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('blog', [
        'posts' => Post::with(['author', 'category'])->latest()->paginate(6),
        'tittle' => 'post'
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $post = Post::with('author')->where('slug', $slug)->firstOrFail();
    return view('post', [
        'post' => $post,
        'tittle' => 'Post'
    ]);
});

Route::middleware('auth')->group(function () {
    Route::resource('/loby', DashboardPostController::class)->names('loby.posts');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
