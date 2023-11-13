<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function trackVisit($externalId)
    {
        
        $this->validateExternalId($externalId);

        // Logic to log the visit for the given external ID
        Visit::firstOrCreate(['external_id' => $externalId]);

        return response()->json([], 200);
    }

    protected function validateExternalId($externalId)
    {
        // Validate that externalId is a string (customize based on your needs)
        if (!is_string($externalId)) {
            abort(400, 'Invalid externalId. It should be a string.');
        }
    }
}