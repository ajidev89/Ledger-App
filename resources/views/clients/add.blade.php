@extends('layouts.dashboard')

@section('content')
<div class="flex justify-between" >
    <p class="text-2xl font-semibold" >Add Client</p>
</div>
   @if(session()->has('msg'))
        <p class="bg-green-500 rounded text-gray-100 p-3">{{ session()->get('msg') }}</p>
    @endif
<form action="{{ route('addClient') }}" method="post" class="mt-6">
    @csrf
    <div class="mb-4  w-3/5">
        <label class="block text-sm pb-2">{{ __('Name of client') }}</label>
        <input id="name" type="name" placeholder="{{ __('Name of client') }}" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-4 w-3/5 ">
        <label class="block text-sm pb-2">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-4 w-3/5 ">
        <label class="block text-sm pb-2">{{ __('Description') }}</label>
        <textarea rows="3" id="description" name="description" placeholder="{{ __('Description') }}" class="input @error('description') is-invalid @enderror" name="email" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button class="btn text-sm">
        Add Client
    </button>
</form>
@endsection