@extends('layout')

@section('title', 'FinnCoda - Login')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1> Register </h1>

            <hr>

            <form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">

                {!! csrf_field() !!}

                <div class="form-group col-md-6">
                    First Name
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    Last Name
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control">
                </div>

                <div class="form-group">
                    Email
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>

                <div class="form-group">
                    Password
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    Confirm Password
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </div>
    </div>


@stop
