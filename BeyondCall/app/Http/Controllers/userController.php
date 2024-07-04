<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    public function register(run $request)
    {
        $data =  $request->validate([
            "email" => "required|email",
            "password" => "required|password",
        ]);

        $user = User::create($data);
    }
}
