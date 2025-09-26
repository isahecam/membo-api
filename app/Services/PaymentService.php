<?php

namespace App\Services;

use App\Enums\PaymentFrecuency;
use Carbon\Carbon;
use Exception;

class PaymentService
{
  /**
   * Calculate the next payment date based on the payment date and frequency
   *
   * @param string $startDate
   * @param string $frequency
   * @return Carbon
   * @throws Exception
   **/
  public function calculateNextPaymentDate(string $startDate, string $frequency): Carbon
  {
    $paymentDate = Carbon::parse($startDate);
    $paymentFrequency = PaymentFrecuency::from($frequency);

    $nextPaymentDate = match ($paymentFrequency) {
      PaymentFrecuency::Daily => $paymentDate->addDay(),
      PaymentFrecuency::Weekly => $paymentDate->addWeek(),
      PaymentFrecuency::Biweekly => $paymentDate->addWeeks(2),
      PaymentFrecuency::Monthly => $paymentDate->addMonth(),
      PaymentFrecuency::Bimonthly => $paymentDate->addMonths(2),
      PaymentFrecuency::Yearly => $paymentDate->addYear(),
    };

    return $nextPaymentDate;
  }
}
