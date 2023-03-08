@extends('nova::auth.layout')

@section('content')
    <form method="POST" action="{{ route('nova.register') }}" class="card">
        {{ csrf_field() }}

        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="name" class="control-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password" class="control-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>

        <div class="text-center mt-3">
            <a href="{{ route('nova.login') }}">{{ __('Already registered?') }}</a>
        </div>
    </form>
@endsection
