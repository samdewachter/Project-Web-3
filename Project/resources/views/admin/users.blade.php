@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<h1>Table of users</h1>
			<a class="back-link" href="{{url('/admin')}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Return to dashboard</a>
	        <table class="table table-striped table-responsive">
	            <thead>
	              <tr>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Favorite console</th>
	                <th>Favorite genre</th>

	              </tr>
	            </thead>
	            <tbody>
	                @foreach ($users as $user)
	                  <tr>
	                    <td>{{ $user->name }}</td>
	                    <td>{{ $user->email }}</td>
	                    <td>{{ $user->console }}</td>
	                    <td>{{ $user->genre }}</td>
	                    <td>
            		        {!! Form::open(['action' => ['AdminController@deleteUser', $user->id]]) !!}
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Delete user
                            </button>

                        	{!! Form::close() !!}
	                    </td>

	                  </tr>
	                @endforeach

	            </tbody>
	        </table>
            <div class="text-center">
                 {!! $users->links() !!} 
            </div>

	    </div>
    </div>
</div>

@endsection