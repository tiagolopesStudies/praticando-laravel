<?php

namespace App\Http\Controllers;

class InvokableController extends Controller
{
    public function __invoke(): string
    {
        return 'This is a invokable controller';
    }
}
