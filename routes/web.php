<?php

use App\Http\Livewire\AgencyLivewire;
use App\Http\Livewire\ComplaintFormLivewire;
use App\Http\Livewire\HomeLivewire;
use App\Http\Livewire\MyOFWLivewire;
use App\Http\Livewire\RegisterLivewire;
use App\Http\Livewire\UsersLivewire;
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


Auth::routes();

Route::get('storage', function () {
    $path = storage_path('app/'.request('path'));

    return ! File::exists($path)
        ? abort(404)
        : Response::make(File::get($path))->header("Content-Type", File::mimeType($path));
})->name('storage');

Route::get('/complaint', ComplaintFormLivewire::class)->name('complaint');
Route::get('/register', RegisterLivewire::class)->name('register-livewire');

Route::get('/', function () {
    return to_route('login');
});

Route::middleware('auth:web')->group(function () {
    Route::get('/home', HomeLivewire::class)->name('home');
    Route::get('/users', UsersLivewire::class)->name('users')->can('admin');
    Route::get('/agencies', AgencyLivewire::class)->name('agencies')->can('admin');
    Route::get('/ofw', MyOFWLivewire::class)->name('ofw')->can('agency');
});

