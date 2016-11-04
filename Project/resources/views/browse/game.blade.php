@extends('layouts.app')

@section('content')

	<div class="container">
		@if($errors->any())
			<h4 class="green">{{ $errors->first() }}</h4>
		@endif
		<div class="game">
			<div class="col-md-5">

				<img class="game-picture" src="{{ $id->photoUrl }}">

			</div>

			<div class="col-md-6 col-md-offset-1">

				<div class="game-header">
					<h1>{{ $id->name }}</h1>
				</div>

				<div class="game-body">
					<p>{{ str_limit(strip_tags($id->description, '<h2>'), 700) }}</p>

					Console: {{ $id->console }}<br>
					Genre: {{ $id->genre }}<br>
					Owner: <a href="{{ url('/profile', $id->user_id) }}">{{ $id->user->name }}</a>
				</div>
				
				@if(!Auth::guest())
				<div class="game-footer">
					<a class="btn btn-primary" href="{{ url('/browse/game/contact', $id->id) }}">Trade with Owner</a>
				</div>
				@endif
			</div>
		</div>
	</div>

@endsection