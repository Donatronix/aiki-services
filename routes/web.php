<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Pages\PagesController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/request-service', [PagesController::class, 'RequestService'])->middleware(['auth'])->name('request.service');
Route::get('/service', [PagesController::class, 'service'])->name('service');

require __DIR__ . '/auth.php';
require __DIR__ . '/technician.php';

/**
 * Clear all cache
 *
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
 */
Route::get('/clear-cache', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    if (function_exists('exec')) {
        exec('rm ' . storage_path('logs/*'));
    }
    return redirect()->route('home');
});

Route::get('/delete-cache', function () {
    if (function_exists('exec')) {
        exec('rm ' . __DIR__ . '/bootstrap/cache/config.php');
        exec('rm ' . __DIR__ . '/bootstrap/cache/pac5889.tmp');
    }
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return redirect()->route('home');
});


Route::get('/db-credentials', function () {

    $url = parse_url("mysql://b6e079f950dddf:961b7be4@us-cdbr-east-03.cleardb.com/heroku_749686457b96a54?reconnect=true");

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    echo "DB_HOST=" . $server . '<br/>';
    echo "DB_USERNAME=" . $username . '<br/>';
    echo "DB_PASSWORD=" . $password . '<br/>';
    echo "DB_NAME=" . $db;
});
