<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;
    protected $fillable = [
        'countdown_time'
    ];

    function getCountdownTimeFromDatabase()
{
    $latestCountdown = Countdown::latest()->first();
    if ($latestCountdown) {
        return $latestCountdown->countdown_time;
    } else {
        // Atau atur default jika tidak ada countdown yang tersedia
        return date('Y-m-d H:i:s');
    }
}
}
