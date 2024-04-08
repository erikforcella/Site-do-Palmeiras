<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\OportunidadesController;
use App\Http\Controllers\VestibulinhoController;
use App\Http\Controllers\RhController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\AdsAMSController;
use App\Http\Controllers\JuridicoController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ContabilidadeController;

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

/*
Route::get('/', function () {
    return view('site.principal');
});
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/ads', [AdsController::class, 'ads'])->name('site.ads');
Route::get('/adm', [AdmController::class, 'adm'])->name('site.adm');
Route::get('/adsams', [AdsAMSController::class, 'adsams'])->name('site.adsams');
Route::get('/contabilidade', [ContabilidadeController::class, 'contabilidade'])->name('site.contabilidade');
Route::get('/juridico', [JuridicoController::class, 'juridico'])->name('site.juridico');
Route::get('/log', [LogController::class, 'log'])->name('site.log');
Route::get('/rh', [RhController::class, 'rh'])->name('site.rh');
Route::get('/departamentos', [DepartamentosController::class, 'departamentos'])->name('site.departamentos');
Route::get('/instituicao', [InstituicaoController::class, 'instituicao'])->name('site.instituicao');
Route::get('/oportunidades', [OportunidadesController::class, 'oportunidades'])->name('site.oportunidades');
Route::get('/vestibulinho', [VestibulinhoController::class, 'vestibulinho'])->name('site.vestibulinho');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';