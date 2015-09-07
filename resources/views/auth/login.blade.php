@extends('layout')

    @section('title', 'FinnCoda - Login')

        @section('content')

            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <h1>Login</h1>

                    <hr>

                    <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">

                        {!! csrf_field() !!}

                        <div class="form-group">
                            Email
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            Password
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember"> Remember Me
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
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
