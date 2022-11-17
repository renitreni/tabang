<?php

use App\Http\Livewire\ComplaintFormLivewire;
use App\Http\Livewire\HomeLivewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ComplaintFormLivewire::class);

Auth::routes();

Route::get('/home', HomeLivewire::class)->name('home');
