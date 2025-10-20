<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ResetPasswordController extends Controller
{
    public function index(): View
    {
        return view('auth.reset-password');
    }
}
