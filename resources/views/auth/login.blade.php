@section('title')
    Login
@endsection

@extends('layouts.app')

@section('content')

<head>
    <style type="text/css">
        .login_form{
            padding: 30px 0;
        }
        .card{
            padding: 10px 0;
        }
        .card-body{
            margin: 0 20px;
        }
        label{
            margin-top: 20px;
        }

        .login_input{
            width: 100%;
            padding: 5px;
            margin: 0 10px;
        }

        .login_input:active{
            border: none;
        }

    </style>
</head>

<body class="antialiased">
    <div class="container login_form">
        <div class="card mb-3">
            <div class="row g-0">
            
                {{-- login image --}}
                <div class="col-md-6">
                    <img src="images/login_img.svg" class="img-fluid" alt="login image">
                </div>

                {{-- login form starts --}}
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 style="text-align: center; color:#003366; font-weight: bold;">Login Form</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="">
                                <label for="email" class="">{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email" class=" login_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" class=" login_input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="" for="remember">
                                            {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <label for="">Forgot password?</label>
                                </div>
                            </div>


                            <div class="">
                                <button type="submit" class="btn" style="margin-top: 20px; width: 100%; background-color: #2F4B26; color: white;" >
                                    {{ __('Login') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                {{-- login form ends --}}
            </div>
        </div>
    </div>
</body>
@endsection
