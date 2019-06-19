@component('mail::message')

#Thank you!

<strong>Message</strong> {{$data->name}}

<p>
<a href="{{route('accept',$data->token)}}">Join My League</a>
</p>
@component('mail::button', ['url' => 'http://opl.test/register'])
Button Text
@endcomponent



@endcomponent
