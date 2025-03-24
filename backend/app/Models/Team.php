<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["race_id", "name", "country"];

    public function race() : BelongsTo{
        return $this->belongsTo(Race::class);
    }
}
