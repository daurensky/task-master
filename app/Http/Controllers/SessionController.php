<?php

namespace App\Http\Controllers;

use App\Data\StoreSessionData;

class SessionController extends Controller
{
    public function store(StoreSessionData $sessionData)
    {
        $credentials = $sessionData->toArray();

        abort_if(! auth()->attempt($credentials), 401);

        $token = auth()
            ->user()
            ->createToken('auth_token')
            ->plainTextToken;

        return response()->json(compact('token'));
    }

    public function destroy()
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->json(__('Успешный выход'));
    }
}
