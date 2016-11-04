@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-dash">
        <div class="container">
            <div class="box"><h1><span><b>Welcome to the admin dashboard!</b></span></h1></div>
            <div class="box-text"><p><span>Here you can acces the tables of games and users</span></p></div>
        </div>
    </div>

<div class="container-fluid">

<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h1><b>From here you can access these tables!</b></h1>
	</div>
	
</div>
<div class="row dashboard-box">
		
	<div class="col-md-3 flex-center">

	</div>
	<div class="col-md-3 flex-center admin-dash">
		<div class="text-center">
		<a class="hvr-grow" href="{{ url('/admin/games')}}">
		<b>Games table</b>
		<div class="admin-icon">
		<i class="fa fa-gamepad admin-icon" aria-hidden="true"></i><br>
		</div>
		</a>
		</div>
	</div>
	<div class="col-md-3 flex-center admin-dash">
		<div class="text-center">
		<a class="hvr-grow" href="{{ url('/admin/users')}}">
		<b>Users table</b>
		<div class="admin-icon">
		<i class="fa fa-user" aria-hidden="true"></i><br>
		</div>
		</a>
		</div>
	</div>
	<div class="col-md-3 flex-center">
		
	</div>	
</div>
</div>

@endsection