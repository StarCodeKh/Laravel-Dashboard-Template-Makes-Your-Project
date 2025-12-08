<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // ----------------------------- login ------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('logout/page', 'logoutPage')->name('logout/page');
    });

    // ----------------------------- register -------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register','storeUser')->name('register');    
    });

    // ----------------------------- Forget Password --------------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'showLinkRequestForm')->name('forget-password');    
        Route::post('forget-password', 'sendResetLinkEmail')->name('forget-password');    
    });

    // ---------------------------- Reset Password ----------------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword')->name('reset-password');    
    });

    // Lock the screen
    Route::get('/lock', function () {
        session(['locked' => true]);
        return redirect()->route('lockscreen')->with('success', 'Locked successfully!');
    })->name('lock-activate');

    Route::controller(LockScreenController::class)->group(function () {
        // ---------------------------- Lock Screen ---------------------------//
        Route::get('lockscreen', 'lockscreen')->name('lockscreen');
        Route::post('unlock',  'unlock')->name('unlock-screen');
    });

});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
    Route::middleware('auth')->group(function () {
        // --------------------- dashboard ------------------//
        Route::controller(HomeController::class)->group(function () {
            Route::get('home', 'index')->name('home');
            Route::get('analytics', 'analytics')->name('analytics');
            Route::get('crm', 'crm')->name('crm');
            Route::get('crypto', 'crypto')->name('crypto');
            Route::get('projects', 'projects')->name('projects');
            Route::get('nft', 'nft')->name('nft');
            Route::get('job', 'job')->name('job');
            Route::get('blog', 'blog')->name('blog');
        });
    });

    Route::middleware('auth')->group(function () {
        // --------------------- Profile ------------------//
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile')->name('profile');
            Route::get('settings', 'profileSettings')->name('settings');
            Route::get('faqs', 'faqs')->name('faqs');
        });
    });

    Route::middleware('auth')->group(function () {
        // --------------------- Tasks ------------------//
        Route::controller(TasksController::class)->group(function () {
            Route::get('tasks-kanban', 'tasksKanban')->name('tasks-kanban');
            Route::get('tasks-list-view', 'tasksListView')->name('tasks-list-view');
            Route::get('tasks-details', 'tasksDetails')->name('tasks-details');
        });
    });
});
