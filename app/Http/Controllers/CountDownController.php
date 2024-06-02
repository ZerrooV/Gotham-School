<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountDownController extends Controller
{
    public function setCountdown(Request $request)
    {
        $request->validate([
            'countdown_time' => 'required|date',
        ]);

        Countdown::create([
            'countdown_time' => $request->countdown_time,
        ]);

        return redirect()->back()->with('success', 'Countdown time has been set successfully.');
    }
}
