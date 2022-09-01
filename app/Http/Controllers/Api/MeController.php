<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MeController extends Controller
{
    public function get(Request $request)
    {
        return $request->user();
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password' => 'current_password:api',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = $request->user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
    }
}