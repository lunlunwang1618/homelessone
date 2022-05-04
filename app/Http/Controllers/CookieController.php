<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CookieController extends Controller
{
    public function index()
    {

        $students = [
            
            'john' => ['age' => 18,'sex' => 'male',],

            'mary' => ['age' => 8,'sex' => 'female',],

            'tama' => ['age' => 21,'sex' => 'female',],

        ];

        return view(
            'cookie',
            ['students' => $students]
        );
    }
}
