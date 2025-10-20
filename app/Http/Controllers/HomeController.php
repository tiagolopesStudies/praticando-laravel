<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $cars = Car::query()
            ->with(['city', 'maker', 'model', 'carType', 'fuelType'])
            ->orderByDesc('id')
            ->limit(5)
            ->get();

        return view('home.index', compact('cars'));
    }
}
