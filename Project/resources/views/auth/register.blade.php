@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Full name:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('town') ? ' has-error' : '' }}">
                            <label for="town" class="col-md-4 control-label">Town:</label>

                            <div class="col-md-6">
                                <input id="town" type="text" class="form-control" name="town" value="{{ old('town') }}" required autofocus>

                                @if ($errors->has('town'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('town') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('console') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="console">Your favorite console:</label>

                            <div class="col-md-6">
                                <select class="form-control" name="console" id="console">
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
                                    <span class="help-block">
                                        <strong>{{ $errors->first('console') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="genre">Your favorite genre:</label>

                            <div class="col-md-6">
                                <select class="form-control" name="genre" id="genre">
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
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
