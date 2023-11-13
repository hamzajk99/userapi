<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    public function updateUserStage(Request $request)
    {
        $request->validate([
            'externalId' => 'required|string',
            'stage' => 'required|string|in:visited,viewed_page,searched',
        ]);

        // Logic to update user stage for the given external ID
        CustomUser::updateOrCreate(
            ['external_id' => $request->externalId],
            ['stage' => $request->stage]
        );

        return response()->json([], 200);
    }
}
