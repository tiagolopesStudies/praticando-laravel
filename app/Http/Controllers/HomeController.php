<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $cars = Car::query()->paginate(5);

        return view('home.index', compact('cars'));
    }
}
