<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function scopeIsAvailable($query)
    {
        return $query->where('available', '>', 0);
    }
}
