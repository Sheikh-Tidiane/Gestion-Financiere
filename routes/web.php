<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Auth\RegisteredUserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\PackController;

use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
};

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






/*
Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');
*/
Route::get('/dashboard', [TransactionController::class, 'index'])
    ->middleware('front')
    ->name('dashboard');

require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('admin.dashboard');

/*
Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.dashboard');
*/

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});

Route::get('/transactions/envoyer-argent', [TransactionController::class, 'create'])->name('envoyer-argent');
Route::post('/transactions/store', [TransactionController::class, 'store'])->name('transfert.store');
Route::get('/transaction/{id}', [TransactionController::class, 'show'])->name('transactions.show');
Route::get('/transactions/retrait-argent', [TransactionController::class, 'retrait'])->name('retrait-argent');

Route::get('/cartes/show/{id}', [CarteController::class, 'showCards'])->name('show.cards');

Route::get('/transactions/retrait', [TransactionController::class, 'retrait'])->name('retrait-argent');
Route::post('/bloquer-compte/{id}', [AdminController::class, 'blockAccount'])->name('block.account');
Route::post('/debloquer-compte/{id}', [AdminController::class, 'unblockAccount'])->name('unblock.account');

Route::get('/pack', [PackController::class, 'index'])->name('pack.index');
//Route::get('/register/{pack_id}', [RegisteredUserController::class, 'create'])->name('register');


