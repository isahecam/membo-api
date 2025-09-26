<?php

namespace App\Enums;

enum PaymentFrecuency: string
{
  case Daily = 'daily';
  case Weekly = 'weekly';
  case Biweekly = 'biweekly';
  case Monthly = 'monthly';
  case Bimonthly = 'bimonthly';
  case Yearly = 'yearly';
}
