<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>

        <h1>This is a Heading</h1>
        <p>This is a paragraph.</p>
        @foreach($menberlist as $name => $vtuber)
            @component('vtuber')
                @slot('name')
                    {{ $name }}
                @endslot
                @slot('age')
                    {{ $vtuber['age'] }}
                @endslot
                @slot('race')
                    {{ $vtuber['race'] }}
                @endslot
            @endcomponent
        @endforeach
    </body>
</html>