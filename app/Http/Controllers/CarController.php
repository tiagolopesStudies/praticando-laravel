<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarController extends Controller
{
    public function index(): View
    {
        return view('cars.index');
    }

    public function create(): View
    {
        return view('cars.create');
    }

    public function show(string $id): View
    {
        return view('cars.show');
    }

    public function edit(string $id): View
    {
        return view('cars.edit');
    }

    public function search(): View
    {
        $cars = Car::all();
        $carsCount = $cars->count();

        return view('cars.search', compact('cars', 'carsCount'));
    }

    public function wishlist(): View
    {
        $user = User::query()->find(1);
        $cars = $user->favouriteCars()
            ->with(['city', 'maker', 'model', 'carType', 'fuelType'])
            ->paginate(15);

        return view('cars.wishlist', compact('cars'));
    }
}
