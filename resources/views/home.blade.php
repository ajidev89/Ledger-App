@extends('layouts.dashboard')

@section('content')
<div>
    <p class="text-2xl font-semibold" >Dashboard</p>
</div>
<div class="grid grid-cols-4 gap-4 mt-4">
    <div class="bg-indigo-500 p-4 text-gray-100 rounded-l-lg">
        <p class="text-3xl">80</p>
        Clients
    </div>
    <div class="bg-red-500 p-4 text-gray-100 rounded-l-lg">
        <p class="text-3xl">80</p>
        Transactions
    </div>
       <div class="bg-yellow-500 p-4 text-gray-100 rounded-l-lg">
        <p class="text-3xl">80</p>
        Users
    </div>
       <div class="bg-green-500 p-4 text-gray-100 rounded-l-lg">
        <p class="text-3xl">80</p>
        Clients
    </div>
</div>
@endsection
