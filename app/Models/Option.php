<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    /**
     * Get the question that owns the option.
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
