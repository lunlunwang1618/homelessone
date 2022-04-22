<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class Student extends Controller
{
    private string $name;
    private int $age;
    private string $sex;
    private string $phone;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;
        return $this;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getData(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'sex' => $this->sex,
            'phone' => $this->phone,
        ];
    }
}
