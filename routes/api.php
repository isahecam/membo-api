<?php

use App\Http\Controllers\MembershipController;
use Illuminate\Support\Facades\Route;

Route::apiResource('memberships', MembershipController::class);
