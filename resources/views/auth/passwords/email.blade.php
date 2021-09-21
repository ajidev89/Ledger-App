@extends('layouts.auth')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4" >{{ __('Reset Password') }}</h1>

        @if (session('status'))
            <div class="alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm pb-2">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
</div>
@endsection
