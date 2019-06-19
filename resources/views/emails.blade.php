@component('mail::message')

#Thank you!

<strong>Message</strong> {{$data}}

<p>
<a href="{{route('accept',$data)}}">Join My League</a>
</p>
@component('mail::button', ['url' => 'http://opl.test/register'])
Button Text
@endcomponent



@endcomponent
