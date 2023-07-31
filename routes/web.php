<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\GohyController;
use App\Http\Controllers\KingController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Models\Cart;
use App\Models\King;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
// king


Route::get('/', [KingController::class, 'index']);
Route::get('/form', [KingController::class, 'create']);
Route::post('/store', [KingController::class, 'store']);
Route::get('/king/{id}', [KingController::class, 'show']);
Route::get('/kings/{id}', [BackofficeController::class, 'show']);
Route::get('/king/edit/{id}', [KingController::class, 'edit']);
Route::put('king/update/{id}', [KingController::class, 'update']);
Route::delete('/king/delete/{id}', [KingController::class, 'destroy']);


// gohy

Route::get('/gohy', [GohyController::class, 'index']);
Route::get('/form2', [GohyController::class, 'create']);
Route::post('/store2', [GohyController::class, 'store']);
Route::get('/gohy/{id}', [GohyController::class, 'show']);
Route::get('/gohys/{id}', [BackofficeController::class, 'show2']);
Route::get('/gohy/edit/{id}', [GohyController::class, 'edit']);
Route::put('gohy/update/{id}', [GohyController::class, 'update']);
Route::delete('/gohy/delete/{id}', [GohyController::class, 'destroy']);




//  newsletter

Route::get('newsletter', [NewsletterController::class, 'index']);
Route::post('newsletter/store', [NewsletterController::class, 'store']);




Route::get('/dashboard', function () {
    $kings = King::all();
    return view('dashboard', compact('kings'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// backoffice

Route::get('/backoffice', [BackofficeController::class, 'index']);
Route::get('/backoffice/gohy', [BackofficeController::class, 'index2']);

// pagina voor king cathegorie

Route::get('/toilet', function () {
    $cart= Cart::all();
    $kings = $kings = King::all()->where('sort', 'toilet');
    return view('pages.king.cath.toilet', compact('kings', 'cart'));
});
Route::get('/investering', function () {
    $kings = DB::table('kings')->where('sort', 'investering')->paginate(8);
    $cart= Cart::all();
    return view('pages.king.cath.investering', compact('kings', 'cart'));
});
Route::get('/novatio', function () {
    $kings = DB::table('kings')->where('sort', 'novatio')->paginate(8);
    $cart= Cart::all();
    return view('pages.king.cath.novatio', compact('kings', 'cart'));
});
Route::get('/keuken', function () {
    $kings = DB::table('kings')->where('sort', 'keuken')->paginate(8);
    $cart= Cart::all();
    return view('pages.king.cath.keuken', compact('kings', 'cart'));
});
Route::get('/schoonmaak', function () {
    $kings = DB::table('kings')->where('sort', 'schoonmaak')->paginate(8);
    $cart= Cart::all();
    return view('pages.king.cath.schoonmaak', compact('kings', 'cart'));
});
Route::get('/wasserij', function () {
    $kings = DB::table('kings')->where('sort', 'wasserij')->paginate(8);
    $cart= Cart::all();
    return view('pages.king.cath.wasserij', compact('kings', 'cart'));
});





// cartcontroller 

// Afficher le contenu du panier
Route::get('/cart', [CartController::class, 'index']);
// Route::get('/cart/create', [CartController::class, 'create']);
Route::post('/addcart/{id}', [KingController::class, 'addcart']);
Route::post('/addcarte/{id}', [GohyController::class, 'addcarte']);
//  Route ::get pour l'evoi des mail 
Route::get('/send-cart-email', [CartController::class, 'sendCartByEmail']);



require __DIR__ . '/auth.php';
