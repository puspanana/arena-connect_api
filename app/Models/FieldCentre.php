<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldCentre extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "name", "address", "maps", "phone_number", "facilities", "rating", "images"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
