<?php

use App\Http\Controllers\Cat_newsController;
use App\Http\Controllers\Cat_eventsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Livewire\CatNewsManager;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /*$role = Role::create(['name' => 'SuperAdmin']);
    $role_admin = Role::create(['name' => 'Admin']);
    $role_lawyer = Role::create(['name' => 'Lawyer']);

    $permission1 = Permission::create(['name' => 'Manage News']);
    $permission2 = Permission::create(['name' => 'Manage CatNews']);
    $permission3 = Permission::create(['name' => 'Manage Events']);
    $permission4 = Permission::create(['name' => 'Manage CatEvents']);

    $role->givePermissionTo($permission1);
    $role->givePermissionTo($permission2);
    $role->givePermissionTo($permission3);
    $role->givePermissionTo($permission4);
    $super_admin = User::find(6) ;
    $super_admin->assignRole('SuperAdmin');*/


     return view('front.home');
});

Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.dashboard');

Route::get('/admin/data-table', function () {
    return view('admin.data-table');
})->name('admin.datatable');

Route::get('/admin/blank-page', function () {
    return view('admin.blank-page');
})->name('admin.blank-page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::prefix('admin')->middleware(['role:SuperAdmin'])->group( function () {

    Route::resource('news', App\Http\Controllers\NewsController::class)->except('create', 'edit');
    Route::get('cat_news',[Cat_newsController::class, 'index'])->name('admin.cat-news');
    Route::get('cat_events',[Cat_eventsController::class, 'index'])->name('admin.cat-events');
    Route::get('events',[EventController::class, 'index'])->name('admin.events');
    Route::get('news',[NewsController::class, 'index'])->name('admin.news');
    Route::get('lawyers',[LawyerController::class, 'index'])->name('admin.lawyers');

});


Route::prefix('lawyer')->middleware(['role:lawyer'])->group( function () {

    // Routes des avocats

});



