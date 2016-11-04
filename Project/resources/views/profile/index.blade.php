@extends('layouts.app')

@section('content')

<div class="container">
	@if($errors->any())
		<h4 class="green">{{ $errors->first() }}</h4>
	@endif
	<div class="account-info col-md-4">
		<div class="panel">
			<div class="panel-heading account-heading">
				<h2 class="account-title">{{ $id->name }}'s info</h2>
			</div>
			<div class="panel-body">
				<ul>
					<li class="info-list"><span class="bold">Name:</span> <span class="account-items">{{ $id->name }}</span></li>
					<li class="info-list"><span class="bold">Email:</span> <span class="account-items">{{ $id->email }}</span></li>
					<li class="info-list"><span class="bold">Favorite console:</span> <span class="account-items">{{ $id->console }}</span></li>
					<li class="info-list"><span class="bold">Favorite genre:</span> <span class="account-items">{{ $id->genre }}</span></li>
					<li class="info-list"><span class="bold">Town:</span> <span class="account-items">{{ $id->town }}</span></li>
				</ul>		
			</div>			
		</div>
	</div>
	<div class="col-md-7 col-md-offset-1">
		<div class="panel">
			<div class="panel-heading account-heading">
				<h2 class="account-title">{{ $id->name }}'s Reviews</h2>
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
				@elseif (!Auth::guest())
					This user hasn't got any reviews yet! Be the first!
				@endif
				<div class="col-md-12">
					@if(Auth::check())
						<form action="{{ Auth::user()->id }}/addComment" method="POST">
							{{ method_field('POST') }}
							{{ csrf_field() }}
							<fieldset class="rating">

							    <input type="radio" id="star5" name="stars" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							   
							    <input type="radio" id="star4" name="stars" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>

							    <input type="radio" id="star3" name="stars" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    
							    <input type="radio" id="star2" name="stars" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

							    <input type="radio" id="star1" name="stars" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							 
							</fieldset>

							<input type="hidden" name="user_id" value="{{ $id->id }}">
							<div class="{{ $errors->has('text') ? 'has-error' : '' }} {{ $errors->has('stars') ? 'has-error' : '' }}">
								<textarea name="text" style="width: 100%;">{{ old('text') }}</textarea>
								@if ($errors->has('stars'))
									<span class="help-block"><strong>{{ $errors->first('stars') }}</strong></span>
								@endif
								@if ($errors->has('text'))
									<span class="help-block"><strong>{{ $errors->first('text') }}</strong></span>
								@endif
							</div>
							
							
							<button class="btn btn-primary" type="submit">Comment</button>
						</form>
					@else

						<p>Please login to comment</p>

					@endif
				</div>
				<div class="text-center">
				{!! $reviews->links() !!} 
				</div>
			</div>
		</div>
	</div>
		
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading account-heading">
				<h2 class="account-title">{{ $id->name }}'s games</h2>
			</div>
			<div class="panel-body">
				<div class="user-games">
						@if(count($id->games) != '0')

							@foreach($id->games as $game)
							<div class="game-preview-account">
								<a href="{{ url('/browse/game', $game->id) }}">
									<div class="col-md-4 img-box">
	                                    <a href="{{ url('/browse/game', $game->id) }}">
	                                    <img class="preview-image" src="{{ $game->photoUrl }}">
	                                    </a>                                    
	                                </div>
	                                <div class="col-md-8">
	                                    <a href="{{ url('/browse/game', $game->id) }}"><h3 class="game-title">{{ $game->name }}</h3></a>
	                                    <p><span class="bold">Console:</span> {{ $game->console }}</p>
	                                    <p><span class="bold">Genre:</span> {{ $game->genre }}</p>
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