<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Membership;
use App\Models\PaymentMethod;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);

    Category::factory(5)->create();
    PaymentMethod::factory(5)->create();

    User::factory(5)->create()->each(function ($user) {
      Membership::factory(10)->create([
        'category_id' => Category::inRandomOrder()->first()->id,
        'payment_method_id' => PaymentMethod::inRandomOrder()->first()->id,
        'user_id' => $user->id,
      ]);
    });
  }
}
