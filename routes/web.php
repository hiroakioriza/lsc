<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServisanControllers;


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

Route::get('About', function () {
    return view('about');
});

Route::get('Sparepart', function () {
    return view('sparepart');
});

Route::get('Gallery', function () {
    return view('gallery');
});

Route::get('Comingsoon', function () {
    return view('comingsoon');
});

Route::resource('servs',ServisanControllers::class);

/* Login Route */

Route::get('login-admin', [ServisanControllers::class, 'index'])->name('login');
Route::post('custom-login', [ServisanControllers::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [ServisanControllers::class, 'signOut'])->name('signout');
Route::get('registration-admin', [ServisanControllers::class, 'registrationadmin'])->name('register-user');
Route::post('custom-registration', [ServisanControllers::class, 'customRegistration'])->name('register.custom');

/* Dashboard Route */
Route::get('dashboard', [ServisanControllers::class, 'dashboard'])->name('dashboard');  
Route::get('dashboard/report', [ServisanControllers::class, 'dashboardrekap'])->name('dashboard.report');  
Route::get('dashboard/create', [ServisanControllers::class, 'create'])->name('dashboard.create'); 
Route::get('dashboard/find',[ServisanControllers::class, 'search'])->name('kod.search');
Route::get('/kdservis/{KodeServis}',[ServisanControllers::class, 'show'])->name('kodser.show');
Route::get('kodeservice',[ServisanControllers::class, 'searchout'])->name('kod.searchout');

/* Report Data Route */
Route::get('dashboard/report/filter',[ServisanControllers::class, 'filterdate'])->name('filter.date');
Route::get('dashboard/report/pdfexp',[ServisanControllers::class, 'rekapdata'])->name('rekap.data');

/* Bios File Route */
Route::get('dashboard/filebios',[ServisanControllers::class, 'dashbios'])->name('dashboard.bios');
Route::get('dashboard/filebios/create',[ServisanControllers::class, 'createbios'])->name('dashboard.bioscreate');
Route::post('biosuploaded',[ServisanControllers::class, 'biosup'])->name('uploadingbios');
Route::delete('deletebios/{id}',[ServisanControllers::class, 'destroybios'])->name('delete.bios');
Route::get('dashboard/filebios/{downbios}/download',[ServisanControllers::class, 'downloadbios'])->name('download.bios');







    


