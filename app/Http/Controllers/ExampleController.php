<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function index(): string
    {
        return 'This is a index page';
    }

    public function create(): string
    {
        return 'This is a create page';
    }
}
