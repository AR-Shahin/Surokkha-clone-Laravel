<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
    public function hospitals(): HasManyThrough
    {
        return $this->hasManyThrough(Hospital::class, District::class);
    }
}
