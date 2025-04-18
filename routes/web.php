<?php

use App\Http\Controllers\NoteController;
use App\Livewire\Note\Create;
use App\Livewire\Note\Edit;
use Illuminate\Support\Facades\Route;

use App\Livewire\Note\Index as NoteIndex;
use App\Livewire\Note\Show;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('note', NoteController::class)->names('note');

// Livewire Note CRUD routes
Route::get('/note-livewire', NoteIndex::class)->name('note-livewire.index');
Route::get('/note-livewire/create', Create::class)->name('note-livewire.create');
Route::get('/note-livewire/{note}/edit', Edit::class)->name('note-livewire.edit');
Route::get('/note-livewire/{note}', Show::class)->name('note-livewire.show');
