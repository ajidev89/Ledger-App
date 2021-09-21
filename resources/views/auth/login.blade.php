@extends('layouts.auth')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Login into your account</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4 ">
            <label class="block text-sm pb-2">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm pb-2">{{ __('Password') }}</label>
            <input id="password" type="password" placeholder="{{ __('Password') }}" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mt-4">
            <button type="submit" class="btn w-full">
                {{ __('Login') }}
            </button>
            <div class="flex-grow flex justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </div>
          
        </div>
    </form>
</div>
@endsection
