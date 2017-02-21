@extends('layouts.master')
@section('content')
<h1></h1>
<h1>Panel user {{$name = Auth::user()->name}}</h1>

	<div>
	<label>Nombre: {{$name = Auth::user()->name}}</label>
	</div>
	<div>
	<label>Email: {{$email = Auth::user()->email}}</label>
	</div>
	<div>
	<label>Password: {{$password = Auth::user()->password}}</label> (Encrypted)
	</div>
	<div>
	<label>Comentarios: {{$comments = Auth::USER()->comments}}</label> (Developing)
	</div>
</form>
</div>
@stop