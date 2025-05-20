<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="font-bold">{{ $job['title'] }}</h1>

    <p> This job pays {{ $job['salary'] }} dolar</p>
</x-layout>
