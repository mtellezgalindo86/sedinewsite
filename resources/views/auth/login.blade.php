@extends('layouts.app')

@section('content')
<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>Inicia sesión</h2>

            <form  method="POST" action="{{ route('login') }}">
            @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            

                <button type="submit">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
