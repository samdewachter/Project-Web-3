@extends('layouts.app')

@section('content')

<div class="container">

    <div class="account-info col-md-6 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading account-heading">
                <h2 class="account-title">Send us a message!</h2>
            </div>
            <div class="panel-body">
                {!! Form::open() !!}
                    {{ csrf_field() }}

                    <div class="form-group">

                        {{ Form::label('name', 'Name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type your name here']) }}
                        
                        {{ Form::label('email', 'Email Adress:') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Type you email here']) }}           

                        {{ Form::label('message', 'Message:') }}
                        {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Type your message here']) }}

                    </div>

                {!! Form::close() !!}
            </div>          
        </div>
    </div>

</div>

@endsection
