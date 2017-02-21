@extends('layouts.master')
@section('content')

<H1>Here you can see all users registred</H1>

@foreach ($arrayUser as $key => $user)
<table>
<tr>
	<td>Usuario:{{$user->name}}  Email:{{$user->email}}</td>
</tr>
</table>

@endforeach

</div>
@stop