<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('memberships', function (Blueprint $table) {
      $table->id();
      $table->string('concept');
      $table->string('description');
      $table->decimal('amount', 10, 2)->default(0);
      $table->string('currency')->default('MXN');
      $table->string('frequency');
      $table->date('payment_date');
      $table->date('next_payment_date');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('memberships');
  }
};
