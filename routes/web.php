<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

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
    $firstName = 'Gino';
    $lastName = 'Paoli';
*/

    /*
        compact: crea un array associativo le cui chiavi sono le stringhe
                 che mettiamo tra le parentesi, mentre i valori di tali
                 chiavi sono i valori delle variabili con i nomi corrispondenti
                 alle stringhe inserite

        compact('firstName', 'lastName')
         |                                     |
         V                                     V

         [
            'firstName' => $firstName,
            'lastName' => $lastName,
         ]
    */

    /*
        dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
            e poi stoppa l'esecuzione
    */
    // dd(compact('firstName', 'lastName'));

/*
    
    return view('welcome', [
        'firstName' => $firstName,
        'lastName' => $lastName,
    ]);
    // return view('welcome', compact('firstName', 'lastName'));
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});
*/


// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)


Route::resource('comics', ComicController::class);

// Route che punta al metodo index del ComicController
Route::get('/', [ComicController::class, 'index'])->name('comics.index');

// Route che utilizza il Route Model Binding per il metodo show
Route::get('/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

Route::get('/tv', function () {
    return view('tv');
})->name("tv");

Route::get('/games', function () {
    return view('games');
})->name("games");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles");

Route::get('/videos', function () {
    return view('videos');
})->name("videos");

Route::get('/fans', function () {
    return view('fans');
})->name("fans");

Route::get('/news', function () {
    return view('news');
})->name("news");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");
