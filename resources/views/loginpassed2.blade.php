@extends ('layouts.appmaster')
@section('title', 'Login Passed Page')

@section('content')
	@if($model->getUsername() == 'hsidhu9')
		<h3>Harpreet you have logged in succesfully</h3>
	@else
		<h3>Someone besides Harpreet logged in succesfully</h3>
	@endif
	<br>
	<a href="login2">Login Again</a>
@endsection
