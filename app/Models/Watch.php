<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Watch extends Model
{
    use HasFactory;
    protected $fillable = [

        'brand',
        'name',
        'picture',
        'date',
        'price',
        'user_id'

    ];
    

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }
    public function complications(): HasMany

    {

        return $this->hasMany(Complication::class);

    }
    public function favoris(): HasMany

    {

        return $this->hasMany(Favoris::class);

    }
}
