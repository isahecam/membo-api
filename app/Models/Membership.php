<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $table = 'memberships';

    protected $hidden = [
        'created_at',
        'updated_at',
        "deleted_at"
    ];

    protected $fillable = [
        'concept',
        'description',
        'amount',
        'currency',
        "frequency",
        "payment_date",
        "next_payment_date",
        "category_id",
        "payment_method_id",
        "user_id",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
