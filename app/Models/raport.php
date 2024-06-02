<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'semester',
        'bahasa_indonesia',
        'bahasa_inggris',
        'matematika',
        'ipa',
        'ppkn',
    ];

    public function getAverageScoreAttribute()
    {
        return ($this->bahasa_indonesia + $this->bahasa_inggris + $this->matematika + $this->ipa + $this->ppkn) / 5;
    }

    /**
     * Get the user that owns the raport.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
