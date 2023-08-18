<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complication extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'watch_id',
        'complication'
    ];

    public function watch(): BelongsTo

    {

        
        return $this->belongsTo(Watch::class);

    }
}
