<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
  /**
   * Display a listing of the resource based on pagination.
   *
   */
  public function index(Request $request): JsonResponse
  {
    $perPage = $request->input('per_page', 10);
    $page = $request->input('page', 1);

    $memberships = Membership::paginate($perPage, '*', 'page', $page);

    return response()->json($memberships);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
