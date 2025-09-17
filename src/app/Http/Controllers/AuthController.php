<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function index(AuthRequest $request)
    {
        return view('auth/register');
    }
    public function login()
    {
        return view('auth/login');
    }
}
