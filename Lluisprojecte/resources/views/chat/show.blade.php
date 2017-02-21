@extends('layouts.master')
@section('content')

<H1>Users who commented in chat</H1>

@foreach ($arrayMessage as $key => $message)

{{$message->name}}, 


@endforeach

</div>
@stop