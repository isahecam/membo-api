<?php

namespace App\Http\Controllers;

use App\Enums\PaymentFrecuency;
use App\Http\Requests\PaymentCalculationRequest;
use App\Models\Membership;
use App\Services\PaymentService;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PaymentController extends Controller
{

  public function __construct(
    private PaymentService $paymentService
  ) {}


  public function nextPaymentDate(PaymentCalculationRequest $request): JsonResponse
  {
    try {
      $validatedData = $request->validated();

      $date = $validatedData['paymentDate'];
      $frequency = $validatedData['paymentFrequency'];

      $nextPaymentDate = $this->paymentService->calculateNextPaymentDate($date, $frequency);

      return response()->json([
        'next_payment_date' => $nextPaymentDate->toDateString()
      ]);
    } catch (Exception $e) {
      return response()->json(['error' => $e], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
  }
}
