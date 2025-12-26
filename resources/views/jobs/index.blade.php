<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Available JOB 3</h1>

    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <p>No Jobs Available2</p>
        @endforelse
    </ul>



</body>

</html>
