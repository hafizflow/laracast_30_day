<x-mail::message>
<h2>{{ $job->title }}</h2>

<x-mail::button :url="url('/jobs/' . $job->id)">
    View Posted Job
</x-mail::button>

Your job is posted successfully !!!
</x-mail::message>


{{--{{ url('/jobs/' . $job->id) }}--}}
