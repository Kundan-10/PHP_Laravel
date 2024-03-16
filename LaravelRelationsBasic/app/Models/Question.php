<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\ToMany;


class Question extends Model
{
    use HasFactory;
    public function quizzes(): BelongsToMany
    {
        return $this->belongsToMany(Quiz::class);
    }
}
