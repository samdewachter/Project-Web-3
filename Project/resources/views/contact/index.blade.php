@extends('layouts.app')

@section('content')

<div class="container">
    @if($errors->any())
        <h4 class="green">{{ $errors->first() }}</h4>
    @endif
    <div class="account-info col-md-6 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading account-heading">
                <h2 class="account-title">Send us a message!</h2>
            </div>
            <div class="panel-body">

                <form method="POST" action="{{ url('/contact/sendmail') }}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email">
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message">Message</label>
                        <textarea rows="5" class="form-control" id="message" name="contactMessage" placeholder="type your message here"></textarea>
                        @if ($errors->has('message'))
                            <span class="help-block"><strong>{{ $errors->first('message') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>


                </form>
            </div>          
        </div>
    </div>

</div>

@endsection
