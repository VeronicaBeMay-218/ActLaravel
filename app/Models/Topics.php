<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topics extends Model
{
    use HasFactory;

    public function subject(): belongTo
    {
        return $this->belongTo(subject::class);
    }
    
}
