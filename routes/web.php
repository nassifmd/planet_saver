<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RedeemController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/detector/disease_ai', function () {
    return view('detector/disease_ai');
});

Route::get('/game/end', [GameController::class, 'end'])->name('game.end');

Route::get('/game/play-again', [GameController::class, 'playAgain'])->name('game.play-again');


Route::get('/game/index', [App\Http\Controllers\GameController::class, 'index'])->name('game.index');

Route::post('/answer', [GameController::class, 'checkAnswer'])->name('game.checkAnswer');

Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/redeem-tree', [RedeemController::class, 'showRedemptionForm'])->name('redeem.tree');
Route::post('/redeem-tree', [RedeemController::class, 'redeemTree'])->name('redeem.tree.submit');

Route::post('/redeem-tree/{topPlayerId}', [RedeemController::class, 'redeemTree'])->name('redeem.tree.submit');

Route::get('/game/share-achievement', function () {
    $user = auth()->user();
    $score = $user->score; // Assuming the user's score is stored in the 'score' attribute/column

    $users = User::orderByDesc('correct_answers')
        ->orderBy('wrong_answers')
        ->get();

    $rank = $users->search(function ($item) use ($user) {
        return $item->id === $user->id;
    });

    return view('game.share-achievement', compact('user', 'score', 'rank'));
})->name('game.share-achievement');

Route::get('/game/generate-certificate', [GameController::class, 'generateCertificate'])->name('game.generate-certificate');
Route::get('/game/download-certificate', [GameController::class, 'downloadCertificate'])->name('game.download-certificate');


//Forum
Route::middleware(['auth'])->group(function () {
    Route::get('/indexpost', [ForumController::class, 'index'])->name('forum.indexpost');
    Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');
    Route::get('/forum/{id}/edit', [ForumController::class, 'edit'])->name('forum.edit');
    Route::patch('/forum/{id}/update', [ForumController::class, 'update'])->name('forum.update');
    Route::match(['PUT', 'PATCH'], '/forum/reply/{id}/update', [ForumController::class, 'updateReply'])->name('forum.updateReply');
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
    Route::post('/forum/{id}/reply', [ForumController::class, 'reply'])->name('forum.reply');
    Route::get('/create', [ForumController::class, 'create'])->name('forum.create');
    Route::get('/forum/reply/{id}/edit', [ForumController::class, 'editReply'])->name('forum.editReply');
    Route::patch('/forum/reply/{id}/update', [ForumController::class, 'updateReply'])->name('forum.updateReply');
    Route::delete('/forum/reply/{id}/destroy', [ForumController::class, 'destroyReply'])->name('forum.destroyReply');
    Route::delete('/forum/{id}/destroy', [ForumController::class, 'destroy'])->name('forum.destroy');
});








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



