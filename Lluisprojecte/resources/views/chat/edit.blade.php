@extends('layouts.master')
@section('content')

<H1>Here you can see the most active users we have on our chat</H1>
@foreach ($arrayMessage as $key => $message)
<p>
Usuario: {{$message->name}}  
</p>

@endforeach

</div>
@stop