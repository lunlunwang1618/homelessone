<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function show()
    {
        return view(
            'beef',
            [
                'beef' => 'pork',
            ]
            );
    }
}