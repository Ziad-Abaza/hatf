<?php

use App\Models\Package;
use App\Models\Payment;
use App\Services\HomeCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ai\AiController;
use App\Http\Controllers\Api\ApplePayController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/package', function () {
    $package = HomeCache::cache('Package', Package::orderBy('order')->get());
    return response()->json([
        'data' => $package,
        'path' => asset('storage/images/'),
        'status' => 200
    ], 200);
});

Route::post('/invoice-success-payment', function (Request $request) {
    Log::info('Request Data:', $request->all()); // Logs all request data
    Log::info('Request invoice:', $request->invoice); // Logs the invoice part of the request

    // Assuming you are using cartId from the request
    Payment::where('uniqid', $request->invoice['cartId'])->update([
        'status' => '1',
        'transaction_number' => $request->result['transactionId'],
    ]);

    return response()->json([
        'message' => 'Success payment',
        'status' => 200
    ], 200);
});

Route::post('/invoice-error-payment', function (Request $request) {
    // Log the entire request data
    Log::info('Payment invoice request:', $request->all());

    // Log the error, ensuring it is wrapped in an array
    Log::info('Payment error error:', ['error' => $request->error ?? 'No error provided']);
    Log::info('Payment error msg:', ['error' => $request->msg ?? 'No msg provided']);

    return response()->json([
        'data' => $request->all(),
        'error' => $request->error ?? 'No error provided',
        'msg' => $request->msg ?? 'No msg provided',
    ], 200);
});

Route::post('/return-url', [ApplePayController::class, 'returnUrl']);




//AI

Route::match(['GET', 'POST'], '/webhook', [AiController::class, 'webhook']);

Route::match(['GET', 'POST'], '/generateContent', [AiController::class, 'generateContent']);

Route::match(['GET', 'POST'], '/sendMessage', [AiController::class, 'sendMessage']);

