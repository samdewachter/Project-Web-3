@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="user-profile">
			<div class="col-md-4">
				<h2>User</h2>
				<div class="profile-left">
					<div class="text-center">
						<img class="user-picture" src="{{ URL::asset('img/profilePicture.png') }}">
					</div>
					<div class="user-info">
						<div class="user-info-col">
							Sam De Wachter
						</div>
						<div class="user-info-col">
							Kattestraat 47, 9150 Kruibeke 
						</div>
						<div class="user-info-col">
							Test
						</div>
						<div class="user-info-col">
							Contacteer
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-md-offset-1">
				<h2>Reviews</h2>
				<div class="profile-right">
					<div class="reviews">
						<div class="review clearfix">
							<div class="col-md-3 text-center">
								<img class="commenter-picture" src="{{ URL::asset('img/profilePicture.png') }}"></br>
								Sam
							</div>

							<div class="col-md-9">
								<div class="header-commenter-text">
									Stars: &#x2605&#x2605&#x2605
								</div>
								<div class="body-commenter-text">
									</br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis quam non tortor ultricies condimentum. Nulla pretium, dui non commodo feugiat, ipsum mi semper lorem, sed feugiat mauris risus et leo. Quisque eleifend sem vel est gravida tincidunt. Sed scelerisque orci a tortor laoreet, sed aliquet nibh scelerisque. Suspendisse blandit, lorem quis congue egestas, tellus odio bibendum tortor, eu accumsan ante massa in ante. Nunc eu tortor tempor, sodales massa id, volutpat nisl. Donec eget consequat eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
								</div>
								<div class="footer-commenter-text">
									</br> 25/10/2016 18:25
								</div>
							</div>
						</div>
						<div class="review clearfix">
							<div class="col-md-3 text-center">
								<img class="commenter-picture" src="{{ URL::asset('img/profilePicture.png') }}"></br>
								Sam
							</div>

							<div class="col-md-9">
								<div class="header-commenter-text">
									Stars: &#x2605&#x2605&#x2605
								</div>
								<div class="body-commenter-text">
									</br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis quam non tortor ultricies condimentum. Nulla pretium, dui non commodo feugiat, ipsum mi semper lorem, sed feugiat mauris risus et leo. Quisque eleifend sem vel est gravida tincidunt. Sed scelerisque orci a tortor laoreet, sed aliquet nibh scelerisque. Suspendisse blandit, lorem quis congue egestas, tellus odio bibendum tortor, eu accumsan ante massa in ante. Nunc eu tortor tempor, sodales massa id, volutpat nisl. Donec eget consequat eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
								</div>
								<div class="footer-commenter-text">
									</br> 25/10/2016 18:25
								</div>
							</div>
						</div>
						

<!--<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars" ></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>-->
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h2>Games</h2>
				<div class="user-games">
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
					<div class="col-md-3"><img class="user-game-img" src="{{ URL::asset('img/game_preview.png') }}"></div>
				</div>
			</div>
		</div>
	</div>

@endsection