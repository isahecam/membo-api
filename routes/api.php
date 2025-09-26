<?php

use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
* Resource API routes for membership management
*/

Route::apiResource('memberships', MembershipController::class);

/*
* API routes for service payment
*/

Route::prefix('payment')->group(function () {
  Route::post('/next-date', [PaymentController::class, 'nextPaymentDate']);
});
