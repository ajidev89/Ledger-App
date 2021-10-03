@extends('layouts.dashboard')

@section('content')
<div class="flex justify-between" >
    <p class="text-2xl font-semibold" >Statement account for {{ $clients->name }}</p>
    <p class="text-xl">NGN {{ number_format($clients->current_balance) }}</p>
</div>
<div class="mt-8" >
    @if(count($transactions) > 0)
        @foreach ($transactions as $transaction)
        <div class="flex space-x-3 border border-gray-100 p-2 rounded mt-4" >
            <div class="h-16 w-16 rounded-full flex justify-center items-center 
            @if($transaction->type == 'CR')
                bg-red-500 
            @else
                bg-green-500 
            @endif text-gray-100" >
            <p class="text-xl" >{{ $transaction->type }}</p>
            </div>
            <div>
                <p class="font-semibold text-sm capitalize">{{ $transaction->title }}</p>
                <p class="text-sm">{{ $transaction->description}}</p>
                <p class="text-sm">NGN {{ number_format($transaction->amount) }}</p>
            </div>
        </div>
        @endforeach
    @else
    <div>
        <p>No transaction found</p>
    </div>
    @endif
</div>

@endsection