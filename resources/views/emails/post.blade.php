@component('mail::message')
# Lost & Found 

Dear **{{ Auth::user()->name }}**

We are sending you this message to let you know that we recieved your booking and look forward to see you.<br>

Your booking will be on **{{ $post->created_at->format('l, F jS Y') }}**.<br>


@component('mail::button', ['url' => route('posts.show', $post->id)])
See booking details

@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent



