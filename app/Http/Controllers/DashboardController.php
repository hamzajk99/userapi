<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUniqueVisitors = Visit::distinct('external_id')->count();

        $visitorsByStage = Visit::select('stage', \DB::raw('count(*) as total'))
            ->groupBy('stage')
            ->pluck('total', 'stage');

        return response()->json([
            'totalUniqueVisitors' => $totalUniqueVisitors,
            'visitorsByStage' => $visitorsByStage,
        ]);
    }
}
