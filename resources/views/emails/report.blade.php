@component('mail::message')

<h1>The list of all random numbers.</h1>

@foreach($data as $t)
    {{$t}}
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
