<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Responses\Student\IndexResponse;
use Illuminate\Http\Response;
#跟student在同一個資料夾 不用額外路徑

class InformationController extends Controller
{
    public function index01(): Response
    {
        $studentTama = ( new Vtuber() )
            ->setName('Tama')
            ->setSex('female')
            ->setAge(21)
            ->setPhone('QTama');


        $studentYuna = ( new Vtuber() )
            ->setName('Yuna')
            ->setSex('female')
            ->setAge(18)
            ->setPhone('IYuna');
        

        $students = [
            $studentTama,
            $studentYuna,
        ];

        return IndexResponse::createFromStudents($students);
    }
}
