<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function hospitals(): HasMany
    {
        return $this->hasMany(Hospital::class);
    }
}
