@extends('layouts.app')

@section('content')

<div class="container">

    <div class="account-info col-md-10 col-md-offset-1">
        <div class="panel">
            <div class="panel-heading account-heading">
                <h2 class="account-title">Add game</h2>
            </div>
            <div class="panel-body">


			<form action="addGame/store" method="POST" enctype="multipart/form-data">
				{{ method_field('POST') }}
				{{ csrf_field() }}
				
				<ul>
					<li class="{{ $errors->has('name') ? 'has-error' : '' }}">
						<label class="control-label">Name</label><input class="form-control" type="text" id="search-game" name="name" autocomplete="off" placeholder="Search here for the game you want to add and select it bollow this box">
						@if ($errors->has('name'))
							<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
						@endif
					</li>
					<div class="game-name-wrapper">
						<h3>Is this the game you're looking for?</h3>
						<div class="game-name">

					
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<li class="{{ $errors->has('console') ? 'has-error' : '' }}"><label>Console</label>
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
							</li>	
						</div>
						<div class="col-md-6">
							<li class="{{ $errors->has('genre') ? 'has-error' : '' }}"><label>Genre</label>
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
							</li>
						</div>
					</div>


					<li><label>Photo</label></li>
					<li>
						<input type="file" id="photo-url" name="photoUrl">
						<img id="picture-game" src=""><input  type="hidden" id="photo-url-giant" name="photoUrlGiant">
					</li>
					<li class="{{ $errors->has('description') ? 'has-error' : '' }}">
						<label>Description</label>
						<textarea class="form-control" rows="5" id="game-description" name="description"></textarea>
						@if ($errors->has('description'))
							<span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
						@endif
					</li>
					<li><button type="submit">Add game</button></li>
				</ul>

			</form>

            </div>          
        </div>
    </div>

</div>













@endsection