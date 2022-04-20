<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppleController extends Controller
{
    public function show(): void
    {
        // dd(AppleController::class);
        echo "Sample Controller Message";
    }

    public function index(): void
    {
        echo "Index Echo";
    }
}
