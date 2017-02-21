@extends('layouts.master')
@section('content')

<H1>CHAT</H1>
<div id="izquierda">
<form action="{{url('chat/postCreate')}}" method="POST">
    {{method_field('PUT')}}
    {{ csrf_field() }}
    <div>
    <label>User: </label>
    <input type="text" name="name">
    </div>
    <div>
    <label>Text:</label>
    <input type="text" length="200" name="text">
    </div>
    <input type="submit" value="Send" class="btn btn-primary">
 </form>
 <br>
</div>
<div id="derecha">
<textarea rows="10" cols="70">
@foreach ($arrayMessage as $key => $message)
{{$message->name}}: {{$message->text}} 

@endforeach
</textarea>
</div>
</div>
@stop