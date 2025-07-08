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
    Route::post('/contact_store', 'contact_store')->name('contact_store');
    Route::get('/fulltime', 'fulltime')->name('full-time');
    Route::get('/mobile', 'mobile')->name('mobile');
    Route::get('/parttime', 'parttime')->name('part-time');
    Route::get('/pest', 'pest')->name('pest');
    Route::get('/selfemployed', 'selfemployed')->name('Self-employed');
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
        // 新規作成
        Route::get('create', 'create')->name('admin.create');



        Route::post('/topstore', 'topstore')->name('admin.topstore');
        Route::post('/recruitstore', 'recruitstore')->name('admin.recruitstore');
        Route::post('/businesses_store', 'businesses_store')->name('admin.businesses_store');
        Route::post('/company_store', 'company_store')->name('admin.company_store');
        Route::post('/ses_store', 'ses_store')->name('admin.ses_store');
        Route::post('/mobile_store', 'mobile_store')->name('admin.mobile_store');
        Route::post('/pests_store', 'pests_store')->name('admin.pests_store');
        Route::post('/parttime_store', 'parttime_store')->name('admin.parttime_store');
        Route::post('/fulltime_store', 'fulltime_store')->name('admin.fulltime_store');
        Route::post('/selfemployed_store', 'selfemployed_store')->name('admin.selfemployed_store');
        
        // 編集画面
        Route::get('/top_edit', 'top_edit')->name('admin.top_edit');
        Route::get('/recruit_edit', 'recruit_edit')->name('admin.recruit_edit');
        Route::get('/business_edit', 'business_edit')->name('admin.business_edit');
        Route::get('/company_edit', 'company_edit')->name('admin.company_edit');
        Route::get('/parttime_edit', 'parttime_edit')->name('admin.parttime_edit');
        Route::get('/fulltime_edit', 'fulltime_edit')->name('admin.fulltime_edit');
        Route::get('/selfemployed_edit', 'selfemployed_edit')->name('admin.selfemployed_edit');
        Route::get('/mobile_edit', 'mobile_edit')->name('admin.mobile_edit');
        Route::get('/ses_edit', 'ses_edit')->name('admin.ses_edit');
        Route::get('/pest_edit', 'pest_edit')->name('admin.pest_edit');

        // アップデート
        Route::patch('/top_update/{toppage}', 'top_update')->name('admin.top_update');
        Route::patch('/recruit_update/{recruit}', 'recruit_update')->name('admin.recruit_update');
        Route::patch('/business_update/{business}', 'business_update')->name('admin.business_update');
        Route::patch('/company_update/{company}', 'company_update')->name('admin.company_update');
        Route::patch('/parttime_update/{recruit_content}', 'parttime_update')->name('admin.parttime_update');
        Route::patch('/fulltime_update/{recruit_content}', 'fulltime_update')->name('admin.fulltime_update');
        Route::patch('/self_employed_update/{recruit_content}', 'self_employed_update')->name('admin.self_employed_update');
        Route::patch('/mobile_update/{business_content}', 'mobile_update')->name('admin.mobile_update');
        Route::patch('/ses_update/{business_content}', 'ses_update')->name('admin.ses_update');
        Route::patch('/pest_update/{business_content}', 'pest_update')->name('admin.pest_update');
        
    });
});

require __DIR__.'/auth.php';
