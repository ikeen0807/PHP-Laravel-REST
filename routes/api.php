<?php
use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/bookings', [BookingController::class, 'index']
);
Route::get('/bookings/{id}', [BookingController::class, 'show']
);
Route::post('/bookings', [BookingController::class, 'store']
);
Route::put('/bookings/{id}',[BookingController::class, 'update']
);
Route::delete('/bookings/{id}', [BookingController::class, 'destroy']
);
Route::get('/bookings/search/{name}', [BookingController::class, 'search']
);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
