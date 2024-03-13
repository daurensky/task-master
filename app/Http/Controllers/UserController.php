<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Data\StoreUserData;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function store(StoreUserData $userData): JsonResponse
    {
        User::create($userData->toArray());
        return response()->json(__('Пользователь создан'), 201);
    }
}
