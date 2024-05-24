<?php

use App\Http\Controllers\PisteController;
use App\Http\Controllers\ProfileController;
use App\http\Controllers\TapahtumatController;
use Illuminate\Support\Facades\Route;

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
    return view('etusivu');
});

Route::get('/roolit', function () {
    return view('roolit');
});

Route::get('/ilmoittaudu', function(){
    return view('ilmoittaudu');
});

Route::get('/dashboard', function () {
    return view('fairplay2024');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kisatietoa', function(){
    return view('kisatietoa');
});

Route::get('/tietoakisasta', function(){
    return view('tietoakisasta');
});

Route::get('/register', function(){
    return view('register');
});



Route::post('tapahtumat',[TapahtumatController::class,'store'])->name('tapahtumat');

Route::get('kaikkitapahtumat',[TapahtumatController::class,'index'])->name('kaikkitapahtumat');



Route::get('/uusitapahtuma', function(){
    return view('uusitapahtuma');
});

Route::get('/tapahtumanmuokkaus', function(){
    return view('tapahtumanmuokkaus');
});

Route::get('/index', function(){
    return view('index');
    

});



/*Route::get('/pistetilanne', function(){
    return view('pistetilanne');
});*/

Route::get('/kaikkipisteet', [PisteController::class, 'kaikkipisteet'])->name('kaikkipisteet');
/*Route::get('/pistetilanne', [PisteController::class, 'pisteet'])->name('pisteet');
Route::post('pistetilanne',[PisteController::class,'pistetilanne'])->name('pistetilanne');
*/
Route::get('/admin', function(){
    return view('admin');
});

Route::get('/pistejako', function(){
    return view('pistejako');
});

Route::get('/kisanvalvoja', function(){
    return view('kisanvalvoja');
});






/* Route::get('/kisanvalvoja', function(){
    return view('kisanvalvoja');

    Tämä ei toimi vielä. 

});  */


        

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tapahtuma/{tapahtuma}', [TapahtumatController::class, 'tapahtumanmuokkaus'])->name('tapahtumanmuokkaus');
    Route::get('/tapahtuma/{tapahtuma}', [TapahtumatController::class, 'naytatapahtuma'])->name('naytatapahtuma');
    Route::put('/tapahtuma-update/{tapahtuma)', [TapahtumatController::class, 'tapahtumapaivita'])->name('tapahtumapaivita');
        Route::put('/tapahtuma-delete/{tapahtuma)', [TapahtumatController::class, 'tapahtumadelete'])->name('tapahtumadelete');    
    });

require __DIR__.'/auth.php';
