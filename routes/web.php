<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EscuelaController;

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

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class,'index']);
Route::get('cursos/create', [CursoController::class,'create']);     
Route::get('cursos/{curso}', [CursoController::class,'show']);


/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria) {
    return "BIenvenido al curso $curso, de la categoria $categoria";
});
 */
    
 Route::get('escuelas',[EscuelaController::class, 'index']);
 Route::get('escuelas/create', [EscuelaController::class,'create']);
 Route::get('escuelas/{curso}', [EscuelaController::class,'show']);