<?php

namespace App\Http\Requests;

use App\Rules\ValidPaymentFrecuency;

class PaymentCalculationRequest extends ApiFormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'paymentDate' => ['required', 'date'],
      'paymentFrequency' => ['required', 'string', new ValidPaymentFrecuency()],
    ];
  }

  public function messages(): array
  {
    return [
      'paymentDate.required' => 'La fecha de pago es obligatoria.',
      'paymentDate.date' => 'La fecha de pago debe ser una fecha válida.',
      'paymentFrequency.required' => 'La frecuencia es obligatoria.',
      'paymentFrequency.string' => 'La frecuencia debe ser una cadena de texto.',
    ];
  }
}
