@extends('layouts.app')

@section('content')
<h1> {{$user->name}} </h1>
<<<<<<< HEAD
<div class="row">
	@foreach($user->messages as $message)
		<div class="col-6">
			@include('messages.message')		
		</div>
	@endforeach	
</div>

=======
>>>>>>> 09dc42edc533234ff5427dcf35d566e0a5488e78
@endsection