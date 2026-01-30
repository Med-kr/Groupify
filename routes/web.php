<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('home');

Route::resource('groups', GroupController::class);

Route::resource('contacts', ContactController::class);

Route::get('contacts/group/{group}', [ContactController::class, 'byGroup'])->name('contacts.byGroup');
