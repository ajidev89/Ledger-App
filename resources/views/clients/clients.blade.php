@extends('layouts.dashboard')

@section('content')
<div class="flex justify-between" >
    <p class="text-2xl font-semibold" >Clients</p>
    <a href="{{ route('addpage') }}" class="btn flex space-x-2 items-center text-sm">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </div>
        <p> Add Client</p>
    </a>
</div>
@endsection