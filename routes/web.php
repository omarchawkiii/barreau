<?php

use App\Models\User;
use App\Livewire\CatNewsManager;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\front\NewsController as FrontNewsController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScrutinController;
use App\Http\Controllers\Cat_newsController;
/*saloua begin*/
use App\Http\Controllers\Cat_eventsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Avocat\Demande\DemandeController;
use App\Http\Controllers\Avocat\Plainte\PlainteController;
use App\Http\Controllers\Avocat\Recours\RecoursController;
use App\Http\Controllers\Avocat\Formation\FormationController;
use App\Http\Controllers\Avocat\Stagiaire\StagiaireController;
use App\Http\Controllers\Admin\Demande\DemandeController as DemandeDemandeController;
/*saloua end*/
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

Route::get('/',  [HomeController::class, 'index'])->name('front.home');
Route::get('/news',  [FrontNewsController::class, 'index'])->name('front.news');
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



Route::get('/lawyers', function () {
    return view('front.lawyers');
})->name('front.lawyers');


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
/*saloua begin*/
Route::get('/avocat/home', function () {
    return view('avocat.home');
})->name('avocat.dashboard');

Route::resource('scrutins', ScrutinController::class)->except([
    'voter','resultats','representants','add']);
/*saloua end*/

// ** ############### Start Router part Admin for Avocat Dev Mohamed ####################################################################################################
Route::prefix('admin')->name('admin.')->group( function () {
    // start route for demandes
    Route::resource('/demandes', DemandeDemandeController::class);
    Route::post('/demandes/{demande}/status', [DemandeDemandeController::class, 'statusDemande'])->name('demandes.status');

    Route::post('/demandes/{demande}/edit-dossier', [DemandeDemandeController::class, 'editDossier'])->name('demandes.edit.dossier');
    Route::post('/demandes/{demande}/update-dossier', [DemandeDemandeController::class, 'updateDosseir'])->name('demandes.update.dossier');
    Route::delete('/demandes/{demande}/delete-dossier', [DemandeDemandeController::class, 'destroyDossier'])->name('demandes.destroy.dossier');
    // end router for demandes



});
// ** ############### End Router part Admin for Avocat Dev Mohamed ####################################################################################################
// ** ############### Start Router for Avocat Dev Mohamed ###############################################################################################################
Route::prefix('avocat')->name('avocat.')->group( function () {

    Route::get('/home', function(){
        return view('avocat.home');
    })->name('home');

    // Router avocat for demandes Dev Mohamed
    Route::controller(DemandeController::class)->group(function (){
        // Router for demande
        Route::get('/demandes', 'index')->name('demandes.index');
        Route::get('/demandes/create', 'create')->name('demandes.create');
        Route::post('/demandes/store', 'store')->name('demandes.store');
        Route::get('/demandes/{demande}/show', 'show')->name('demandes.show');
        Route::get('/demandes/{demande}/edit', 'edit')->name('demandes.edit');
        Route::post('/demandes/{demande}/update','update')->name('demandes.update');
        Route::delete('/demandes/{demande}/destroy','destroy')->name('demandes.destroy');
        Route::get('/demandes/{demande}/payment','createPaiment')->name('demandes.paiment');

        // Router for dossier
        Route::post('/demandes/dossier/{dossier}/edit-dossier','editDossier')->name('demande.edit.dossier');
        Route::post('/demandes/dossier/{dossier}/update-dossier','updateDossier')->name('demande.update.dossier');
        Route::delete('/demandes/dossier/{dossier}/delete-dossier','destroyDossier')->name('demande.destroy.dossier');
    });

    // Route avocat for stagiaires Dev Mohamed
    Route::get('/stagiaire', [StagiaireController::class, 'index'])->name('stagiaire');
    Route::get('/stagiaire/ajouter', [StagiaireController::class, 'create'])->name('stagiaire.ajouter');

    // Route avocat for plaintes Dev Mohamed
    Route::get('/plainte', [PlainteController::class , 'index'])->name('plainte');
    Route::get('/plainte/deposer', [PlainteController::class , 'create'])->name('plainte.deposer');

    // Route avocat for Recours Dev Mohamed
    Route::get('/recours', [RecoursController::class, 'index'])->name('recours');
    Route::get('/recours/ajouter', [RecoursController::class, 'create'])->name('recours.ajouter');

    // Route avocat for Formations Dev Mohamed
    Route::get('/formation',[FormationController::class, 'index'])->name('formation');
    Route::get('/formation/inscrire',[FormationController::class, 'create'])->name('formation.inscrire');
});
// ** ############### End Router for Avocat Dev Mohamed #################################################################################################################
