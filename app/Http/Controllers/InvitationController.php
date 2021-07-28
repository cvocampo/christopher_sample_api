<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

class InvitationController extends Controller
{
    public function index(Request $request)
    {
        $invitation = Invitation::create(['email' => $request->email]);

        $response = ['success' => 'Invitation to' . $request->email . 'is sent.'];

        return response($response,200);
    }
}
