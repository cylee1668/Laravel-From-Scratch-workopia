<x-layout>
    <h1>Available JOB</h1>

    <ul>
        @forelse($jobs as $job)
            <li><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a> - {{ $job->description }}</li>
        @empty
            <p>No Jobs Available</p>
        @endforelse
    </ul>
</x-layout>
