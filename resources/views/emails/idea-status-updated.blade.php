<x-mail::message>
# Idea Status Updated

The Idea: {{ $idea->title }}

has been updated to a status of:

{{ $idea->status->name }}

<x-mail::button :url="$url">
View Idea
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
