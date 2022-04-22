<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Responses\Student\IndexResponse;
use Illuminate\Http\Response;

class InformationController extends Controller
{
    public function index(): Response
    {
        $studentTama = (new Student())->setName('Tama')
            ->setSex('female')
            ->setAge(21)
            ->setPhone('QTama');

        $studentYuna = (new Student())->setName('Yuna')
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
