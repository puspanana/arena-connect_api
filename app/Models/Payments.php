<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id", 
        "total_payment", 
        "payment_method", 
        "end_time", 
        "status", 
        "order_id", 
        "receipt", 
        "date"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
