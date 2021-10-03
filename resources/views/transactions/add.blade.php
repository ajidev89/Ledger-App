@extends('layouts.dashboard')

@section('content')
<div class="flex justify-between" >
    <p class="text-2xl font-semibold" >Add Transaction</p>
</div>
   @if(session()->has('msg'))
        <p class="bg-green-500 rounded text-gray-100 p-3">{{ session()->get('msg') }}</p>
    @endif
<form action="{{ route('addTxn') }}" method="post" class="mt-6">
    @csrf
    <div class="mb-4  w-3/5">
        <label class="block text-sm pb-2">{{ __('Title') }}</label>
        <input id="title" type="text" placeholder="{{ __('Title of transaction') }}" class="input @error('name') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="name" autofocus>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
     <div class="mb-4  w-3/5">
        <label class="block text-sm pb-2">{{ __('Amount') }}</label>
        <input id="title" type="text" placeholder="{{ __('Amount') }}" class="input @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required/>
        @error('amount')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-4  w-3/5">
        <label class="block text-sm pb-2">{{ __('Select Client') }}</label>
        <select class="input  @error('clientId') is-invalid @enderror" name="clientId">
            <option value="">Select client</option>
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach

        </select>
        @error('clientId')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-4  w-3/5">
        <label class="block text-sm pb-2">{{ __('Select Client') }}</label>
        <select class="input  @error('type') is-invalid @enderror" name="type">
            <option value="">Select transaction type</option>
            <option value="CR">Credit</option>
             <option value="DB">Debit</option>
        </select>
        @error('type')
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
        Add Transaction
    </button>
</form>
@endsection