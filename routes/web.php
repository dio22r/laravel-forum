<?php

use App\Http\Controllers\Auth\RegisterGerejaController;
use App\Http\Controllers\MasterGembalaController;
use App\Http\Controllers\MasterGerejaController;
use App\Http\Controllers\MasterUserGerejaController;
use App\Http\Controllers\MasterWilayahController;
use App\Http\Controllers\MenuManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Resource\FormController;
use App\Http\Controllers\RoleManagementController;
use App\Http\Controllers\UserManagementController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::group(["prefix" => "resources"], function () {
    Route::get('/gereja-by-wilayah', [FormController::class, 'gerejaByWilayah'])->name('resource.gereja-by-wilayah');
});

Auth::routes([
    'register' => false, // Registration Routes...
]);

Route::get('/register/gembala/5526f5323af331ab22dac08d817cfb7520a80fc1', [RegisterGerejaController::class, "showRegistrationForm"])->name("register.gembala");
Route::post('/register/gembala/5526f5323af331ab22dac08d817cfb7520a80fc1', [RegisterGerejaController::class, "register"])->name("register.gembala");

Route::group([
    "middleware" => ["auth"],
    "prefix" => "admin"
], function () {

    Route::get('/', [ProfileController::class, 'show'])->name('home');

    Route::get('/my-account', [ProfileController::class, 'show'])->name('account');
    Route::get('/edit-account', [ProfileController::class, 'edit'])->name('account.edit');
    Route::post('/edit-account', [ProfileController::class, 'update'])->name('account.store');
});
