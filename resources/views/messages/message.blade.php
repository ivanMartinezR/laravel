<<<<<<< HEAD
<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<div class="text-muted">Escrito por <a href="/{{$message->user->username}}" >{{$message->user->name}}</a></div>
	{{ $message->content }}
	<a href="/messages/{{ $message->id }}">Leer más</a>
</p>
<div class="card-text text-muted float-right">
	{{$message->created_at}}
=======
<div class="col-6">
	<img class="img-thumbnail" src="{{ $message->image }}">
	<p class="card-text">
		<div class="text-muted">Escrito por <a href="/{{$message->user->username}}" >{{$message->user->name}}</a></div>
		{{ $message->content }}
		<a href="/messages/{{ $message->id }}">Leer más</a>
	</p>
>>>>>>> 09dc42edc533234ff5427dcf35d566e0a5488e78
</div>

