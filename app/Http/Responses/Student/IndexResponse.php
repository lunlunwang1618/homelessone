<?php

namespace App\Http\Responses\Student;

use App\Http\Controllers\Student\Student;
use Illuminate\Http\Response;

class IndexResponse extends Response
{
    /**
     * @param Student[] $students
     */
    public static function createFromStudents(
        array $students
    ): self {
        $data = [];
        
        foreach ($students as $student) {
            $data[] = $student->getData();
        }

        return new IndexResponse($data);
    }
}
