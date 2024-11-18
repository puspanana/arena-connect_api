<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ["name", "field_centre_id", "type", "descriptions", "status"];

    public function fieldCentre()
    {
        return $this->belongsTo(FieldCentre::class);
    }

    public function prices()
    {
        return $this->hasMany(FieldPrice::class, 'field_id', 'id');
    }

    public function schedules()
    {
        return $this->hasMany(FieldSchedule::class, 'field_id', 'id');
    }
}
