<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>

        <h1>This is a Heading</h1>
        <p>This is a paragraph.</p>
        
        @foreach ($students as $name => $student)
            @component('student')
                @slot('name')
                    {{ $name }}
                @endslot
                @slot('age')
                    {{ $student['age'] }}
                @endslot
                @slot('sex')
                    {{ $student['sex'] }}
                @endslot
            @endcomponent
        @endforeach

    </body>
</html>
