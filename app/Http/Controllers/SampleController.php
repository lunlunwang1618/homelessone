<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function menberlist()
    {

        $menberlist = [
            'tama' => ['age' => 17 , 'race' => 'Dog' , ],
            'yuna' => ['age' => 16 , 'race' => 'Gorilla' , ],
            'kakeru' => ['age' => 200000 , 'race' => 'SleepingWolf' , ],

        ];

        return view(
            'beef',
            [ 'menberlist' => $menberlist ]
            );
    }
}