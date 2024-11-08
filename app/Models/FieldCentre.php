<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldCentre extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "name", "descriptions", "rules", "address", "maps", "phone_number", "price_from", "facilities", "rating", "images"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
