<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class Student extends Controller
{
    public function __construct(
        string $name,
        int $age,
        string $sex,
        string $phone,
        string $fruit
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->phone = $phone;
        $this->fruit = $fruit;
    }

    public string $name;
    public int $age;
    public string $sex;
    public string $phone;
    public string $fruit;
}
