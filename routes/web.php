<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('about', \App\Livewire\About::class)->name('about');
    Route::get('contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('posts', \App\Livewire\Posts\PostIndex::class)->name('posts.index');
    Route::get('posts/create', \App\Livewire\Posts\CreatePost::class)->name('posts.create');
    Route::get('posts/{post}', \App\Livewire\Posts\ShowPost::class)->name('posts.show');
    Route::get('posts/{post}/edit', \App\Livewire\Posts\EditPost::class)->name('posts.edit');

    Route::get('users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('users/{user}', \App\Livewire\Users\Show::class)->name('users.show');
});

Route::get('login', \App\Livewire\Login::class)->name('login')->middleware('guest');
