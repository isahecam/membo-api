<?php

namespace App\Rules;

use App\Enums\PaymentFrecuency;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPaymentFrecuency implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
      if (!PaymentFrecuency::tryFrom($value)){
        $enumValues = collect(PaymentFrecuency::cases())
                            ->map(fn($case) => $case->value)
                            ->implode(', ');

        $fail("El $attribute debe contener uno de los siguientes valores: $enumValues");
      }
    }
}
