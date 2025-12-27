<x-layout>
    <h1>Available JOB 3</h1>

    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <p>No Jobs Available2</p>
        @endforelse
    </ul>
</x-layout>
