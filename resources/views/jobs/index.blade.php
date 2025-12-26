<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $title }}</h1>

    <ul>
        @forelse($jobs as $job)
            {{-- <li>
                {{ $loop->index }} - {{ $job }}
            </li> --}}

            {{-- <li>
                {{ $loop->iteration }} - {{ $job }}
            </li> --}}

            {{-- <li>
                {{ $loop->remaining }} - {{ $job }}
            </li> --}}

            {{-- <li>
                {{ $loop->count }}  - {{ $job }}
            </li> --}}

            {{-- @if ($loop->first)
                <li>First: {{ $job }}</li>
            @else
                <li>{{ $job }}</li>
            @endif --}}

            {{-- @if ($loop->last)
                <li>Last:{{ $job }}</li>
            @else
                <li>{{ $job }}</li>
            @endif --}}

            {{-- @if ($loop->even)
                <li>Even: {{ $job }}</li>
            @else
                <li>{{ $job }}</li>
            @endif --}}

            @if ($loop->odd)
                <li>Odd: {{ $job }}</li>
            @else
                <li>{{ $job }}</li>
            @endif
        @empty
            <p>No Jobs Available2</p>
        @endforelse
    </ul>



</body>

</html>
