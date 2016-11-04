@extends('layouts.app')

@section('content')

<div class="container">

	<div class="panel">
		<div class="panel-heading account-heading">
			<h1 class="panel-title"></h1>Edit
		</div>
		<div class="panel-body">
			<form action="update" method="POST">
				{{ method_field('POST') }}
				{{ csrf_field() }}

				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="{{$id->name}}">
					@if ($errors->has('name'))
						<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
					@endif
				</div>

				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" value="{{$id->email}}">
					@if ($errors->has('email'))
						<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
					@endif
				</div>

				<div class="form-group {{ $errors->has('console') ? 'has-error' : '' }}">
					<label for="consoles">Favorite console</label>
					<select class="form-control" id="console-game" name="console">
						<option>PlayStation 4</option>
						<option>PlayStation 3</option>
						<option>PlayStation 2</option>
						<option>PlayStation 1</option>
						<option>PS Vita</option>
						<option>Xbox One</option>
						<option>Xbox 360</option>
						<option>Xbox</option>
						<option>Wii</option>
						<option>Wii U</option>
						<option>Nintendo 3DS</option>
					</select>
					@if ($errors->has('console'))
						<span class="help-block"><strong>{{ $errors->first('console') }}</strong></span>
					@endif
				</div>

				<div class="form-group {{ $errors->has('genre') ? 'has-error' : '' }}">
					<label for="genre">Favorite genre</label>
					<select class="form-control" name="genre">
						<option>Action</option>
						<option>Adventure</option>
						<option>Education</option>
						<option>Fighting</option>
						<option>Flight</option>
						<option>Horror</option>
						<option>MMO</option>
						<option>Music</option>
						<option>Party</option>
						<option>Race</option>
						<option>RPG</option>
						<option>Shooter</option>
						<option>Simulation</option>
						<option>Sport</option>
						<option>Stealth</option>
						<option>Strategy</option>
					</select>
					@if ($errors->has('genre'))
						<span class="help-block"><strong>{{ $errors->first('genre') }}</strong></span>
					@endif
				</div>

				<div class="form-group {{ $errors->has('town') ? 'has-error' : '' }}">
					<label for="town">Town</label>
					<input type="text" class="form-control" name="town" value="{{$id->town}}">
					@if ($errors->has('town'))
						<span class="help-block"><strong>{{ $errors->first('town') }}</strong></span>
					@endif
				</div>

				<button class="btn btn-primary" type="submit">Edit</button>
			</form>
		</div>
	</div>

</div>
@endsection