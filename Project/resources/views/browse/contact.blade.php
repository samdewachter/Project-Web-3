@extends('layouts.app')

@section('content')


	<div class="col-md-6 col-md-offset-3">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Contact</h1>
			</div>
			<div class="panel-body">
				@if(count($loggedInUser->games) == '0' )
					You first need to <a href="{{ url('/account/addGame', $loggedInUser->id) }}">upload a game.</a>
				@else
					<div class="email-form">

						<form method="POST" action="{{ url('/browse/game/contact/sendmail', $id->id) }}">
							{{ csrf_field() }}
							<div class="form-group">
								<label>You want to trade</label>
								<select class="form-control" name="buyerGameName">
									@foreach($loggedInUser->games as $game)
										<option>{{ $game->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>For</label>
								<input type="text" name="" class="form-control" value="{{ $id->name }}" readonly>
							</div>
							<div class="form-group">
								<label>Duration</label>
								<select name="tradePeriod" class="form-control">
									<option>1 week</option>
									<option>2 weeks</option>
									<option>3 weeks</option>
									<option>+3 weeks</option>
									<option>Permanent</option>
								</select>
							</div>
							<div class="form-group">
								<label>From</label>
								<input type="text" name="emailFrom" class="form-control" value="{{ $loggedInUser->email }}" readonly>
							</div>
							<div class="form-group">
								<label>To</label>
								<input type="text" name="emailTo" class="form-control" value="{{ $id->user->email }}" readonly>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Send email</button>
							</div>
						</form>

					</div>
				@endif
			</div>
		</div>
	</div>


@endsection