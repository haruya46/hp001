<?php
use App\Http\Controllers\HpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// ゲスト画面（HP）
Route::controller(HpController::class)->group(function () {
    Route::get('/', 'toppage')->name('toppage');
    Route::get('/business', 'business')->name('business');
    Route::get('/recruit', 'recruit')->name('recruit');
    Route::get('/company', 'company')->name('company');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/fulltime', 'fulltime')->name('fulltime');
    Route::get('/mobile', 'mobile')->name('mobile');
    Route::get('/parttime', 'parttime')->name('parttime');
    Route::get('/pest', 'pest')->name('pest');
    Route::get('/selfemployed', 'selfemployed')->name('selfemployed');
    Route::get('/ses', 'ses')->name('ses');
});




// ログインユーザー

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // 管理者画面
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'admin')->name('admin.admin');
        Route::get('/create', 'create')->name('admin.create');
        Route::post('/topstore', 'topstore')->name('admin.topstore');
        Route::post('/recruitstore', 'recruitstore')->name('admin.recruitstore');
        
    });
});

require __DIR__.'/auth.php';
