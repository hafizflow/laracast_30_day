<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a
                href="/jobs/ {{ $job['id'] }}"
                class="border border-grey-200 block px-4 py-6 rounded-lg">

                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>

                <div>
                    <strong>{{ $job['title'] }}</strong> {{ $job['salary'] }}
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
