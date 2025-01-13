<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\NewsController;


/*
use Livewire\Livewire;

Livewire::setScriptRoute(function ($handle) {
return Route::get('/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
return Route::post('/livewire/update', $handle);
});
*/




Route::get('/run-artisan-commands', function () {
    try {
        // Run the specified commands
        
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        Artisan::call('vendor:publish', [
            '--force' => true,
            '--tag' => 'livewire:assets',
        ]);
        Artisan::call('filament:assets');
        Artisan::call('filament:cache-components');

        return response()->json([
            'status' => 'success',
            'message' => 'All Artisan commands executed successfully!',
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ]);
    }
});



Route::get('/install-app', function () {
    Artisan::call('config:clear');
    Artisan::call('optimize');
    Artisan::call('route:clear');
    Artisan::call('storage:link');
    return 'Cache cleared successfully!';
});



use Illuminate\Support\Facades\Artisan;

Route::get('/storage-link', function () {
    try {
        Artisan::call('storage:link');
        return 'Storage directory linked successfully.';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});


Route::get('/publish-livewire-assets', function () {
    try {
        Artisan::call('vendor:publish', [
            '--force' => true,
            '--tag' => 'livewire:assets',
        ]);
        return 'Livewire assets published successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});



// use App\Providers\Filament\AdminPanelProvider;
//Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


 //Route::get('admin/login',[AdminPanelProvider::class,'admin.login']);

Route::get('/',[HomeController::class,'index']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/portfolio',[PortfolioController::class,'index']);

Route::get('/project/{slug}', [PortfolioController::class, 'show']);

Route::get('/load-more-projects', [PortfolioController::class, 'loadMoreProjects']);

Route::get('/team',[TeamController::class,'index']);

Route::get('/news-and-insights',[NewsController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);

Route::post ('/send-mail',[ContactController::class,'maildata'])->name('send_mail');

Route::get('/services',[ServiceController::class,'index']);

Route::get('/services/{slug}', [ServiceController::class, 'show']);

Route::get('/achievements',[AchievementController::class,'index']);

Route::get('/recognition',[AchievementController::class,'recognition']);

Route::get('/awards',[AchievementController::class,'awards']);

Route::get('/clientele',[AchievementController::class,'clientele']);


//Filter Projects
Route::post('projects/filter',[PortfolioController::class,'fetch_by_type']);


//Mail




use Intervention\Image\Facades\Image;

Route::get('/test-image', function () {
    $image = Image::canvas(200, 200, '#ff0000')->encode('jpg');
    return $image->response();
});