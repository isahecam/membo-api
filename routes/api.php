<?php

use App\Http\Controllers\MembershipController;
use Illuminate\Support\Facades\Route;

/*
* Resource API routes for membership management
*/

Route::apiResource('memberships', MembershipController::class);
