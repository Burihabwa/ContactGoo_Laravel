<?php



use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
//Route::ressource('articles', [ArticleController::class, 'index']);
Route::post('store', [ContactController::class, 'store'])->name('store');
Route::get('fetchall', [ContactController::class, 'fetchAll'])->name('fetchAll');
Route::get('selectItem/{item}', [ContactController::class, 'selectItem'])->name('selectItem');




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
    return view('index');
});
