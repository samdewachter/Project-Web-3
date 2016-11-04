@extends('layouts.app')

@section('content')

<div class="container-fluid">
	@if($errors->any())
		<h4 class="green">{{ $errors->first() }}</h4>
	@endif
	<div class="account-info col-md-4">
		<div class="panel">
			<div class="panel-heading account-heading">
				<h2 class="account-title">Your info</h2>
			</div>
			<div class="panel-body">
				<ul>
					<li class="info-list"><span class="bold">Your name:</span> <span class="account-items">{{ $id->name }}</span></li>
					<li class="info-list"><span class="bold">Your email:</span> <span class="account-items">{{ $id->email }}</span></li>
					<li class="info-list"><span class="bold">Your favorite console:</span> <span class="account-items">{{ $id->console }}</span></li>
					<li class="info-list"><span class="bold">Your favorite genre:</span> <span class="account-items">{{ $id->genre }}</span></li>
					<li class="info-list"><span class="bold">Your town:</span> <span class="account-items">{{ $id->town }}</span></li>
					<li><a href="{{ Auth::user()->id }}/edit">Edit</a></li>
				</ul>		
			</div>			
		</div>
	</div>
	<div class="col-md-7 col-md-offset-1">
		<div class="panel">
			<div class="panel-heading account-heading">
				<h2 class="account-title">Reviews</h2>
			</div>
			<div class="panel-body">
				@if(count($reviews) != '0')
					@foreach($reviews as $review)
						<div class="reviews">
							<div class="review clearfix">
								<a href="{{ url('/profile', $review->commenter_id) }}">
									<div class="col-md-3 text-center">
										<i class="fa fa-user" aria-hidden="true"></i><br>
										{{$review->commenter}}
									</div>
								</a>
								<div class="col-md-9">
									<div class="header-commenter-text">
										<b>Score:</b>
										@for($i = 0; $i < $review->stars; $i++)
											<i class="fa fa-star" aria-hidden="true"></i>
										@endfor
									</div>
									<div class="body-commenter-text">
										</br>
										{{$review->text}}
									</div>
									<div class="footer-commenter-text">
										</br> 25/10/2016 18:25 
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@else
					You have no reviews yet.
				@endif
				<div class="text-center">
				{!! $reviews->links() !!} 
				</div>
			</div>
		</div>
	</div>
<div class="row">
	<div class="col-md-12">

		<div class="panel">
			<div class="panel-heading account-heading	">
				<h2 class="account-title">Email history</h2>
			</div>
			<div class="panel-body">
				@if(count($id->emails) != '0')
					@foreach($id->emails as $email)

						<ul>
							<li>{{$email->sendTo}} <a href="{{ url('/profile', $email->profile_id) }}">Go to account</a> ({{ $email->buyerGameName }} for {{ $email->sellerGameName }})</li>
						</ul>

					@endforeach
				@else
					You have not contacted someone. Go <a href="{{ url('/browse') }}">find a game</a> to trade!
				@endif
			</div>
		</div>		
	</div>
	</div>
		
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading account-heading">
				<h2 class="account-title">Your games</h2>
			</div>
			<div class="panel-body">
				<div class="user-games">
						@if(count($games) != '0')

							@foreach($games as $game)
							<div class="game-preview-account">
								<a href="{{ url('/browse/game', $game->id) }}">
									<div class="col-md-4 img-box">
	                                    <a href="{{ url('/browse/game', $game->id) }}">
	                                    <img class="preview-image" src="{{ $game->photoUrl }}">
	                                    </a>                                    
	                                </div>
	                                <div class="col-md-6">
	                                    <a href="{{ url('/browse/game', $game->id) }}"><h3 class="game-title">{{ $game->name }}</h3></a>
	                                    <p><span class="bold">Console:</span> {{ $game->console }}</p>
	                                    <p><span class="bold">Genre:</span> {{ $game->genre }}</p>



	                                </div>
	                                <div class="col-md-2">
	                            		{!! Form::open(['action' => ['AccountController@deleteGame', $game->id]]) !!}
		                                {{ csrf_field() }}
		                                {{ method_field('DELETE') }}

		                                <button type="submit" class="btn btn-danger delete-game">
		                                    <i class="fa fa-trash"></i> Delete game
		                                </button>

		                            	{!! Form::close() !!}
	                                </div>
	<!-- 								<div class="col-md-3">
										<img class="preview-image user-game-img" src="{{ $game->photoUrl }}">
									</div> -->
								</a>
							</div>

							<div class="line-account-page"></div>

							@endforeach
						@else

						<p>You have no games yet. <a href="{{ url('account/addGame', Auth::user()->id) }}">Upload one now.</a></p>

					@endif
				</div>
			</div>
		</div>
	</div>

</div>
@endsection