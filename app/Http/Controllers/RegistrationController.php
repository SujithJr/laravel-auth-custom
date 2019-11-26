<?php

namespace App\Http\Controllers;

use App\Traits\RegisterUser;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    use RegisterUser;

    public function show()
    {
        return view('register');
    }

    public function register(RegistrationRequest $requestFields)
    {
        $user = $this->registerUser($requestFields);
        return redirect('/login');
    }
}
