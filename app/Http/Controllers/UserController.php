<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $userQuery = User::query();



        $users = UserResource::collection(
            $userQuery->paginate(10)
        );

        return inertia('Users/Index', [
            'users' => $users,
        ]);
    }
}
