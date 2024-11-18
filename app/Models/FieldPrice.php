<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldPrice extends Model
{
    use HasFactory;

    protected $fillable = ["field_id", "price_from", "price_to"];

    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }
}
