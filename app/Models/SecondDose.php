<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondDose extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function doctor()
    {
        return  $this->belongsTo(Doctor::class);
    }

    public function vaccine()
    {
        return  $this->belongsTo(Vaccine::class);
    }
}
