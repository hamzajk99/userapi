<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVisitors = Visit::distinct('external_id')->count();

        $stageCounts = Visit::groupBy('stage')
            ->selectRaw('stage, count(*) as count')
            ->pluck('count', 'stage');

            return view('dashboard', compact('totalVisitors', 'stageCounts'));

    }
}
