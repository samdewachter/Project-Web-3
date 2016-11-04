@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<h1>Table of games</h1>
			<a class="back-link" href="{{url('/admin')}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Return to dashboard</a>
	        <table class="table table-striped">
	            <thead>
	              <tr>
	                <th>Name</th>
	                <th>Console</th>
	                <th>Genre</th>
	                <th>Time added</th>

	              </tr>
	            </thead>
	            <tbody>
	                @foreach ($games as $game)
	                  <tr>
	                    <td>{{ $game->name }}</td>
	                    <td>{{ $game->console }}</td>
	                    <td>{{ $game->genre }}</td>
	                    <td>{{ $game->created_at }}</td>
	                    <td>
	                    	{!! Form::open(['action' => ['AdminController@deleteGame', $game->id]]) !!}
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Delete game
                            </button>

                        	{!! Form::close() !!}
	                    </td>

	                  </tr>
	                @endforeach

	            </tbody>
	        </table>
	                                <div class="text-center">
                             {!! $games->links() !!} 
                        </div>
	    </div>
    </div>
</div>

@endsection