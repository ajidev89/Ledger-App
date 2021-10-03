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

<table class="w-full mt-8" >
    <thead class="bg-gray-100 border-gray-100 border" >
        <tr class="" >
            <th class="text-sm py-3 px-3 text-left">Name</th>
            <th class="text-sm py-3 px-3 text-left">Description</th>
            <th class="text-sm py-3 px-3 text-left">Current balance</th>
            <th class="text-sm py-3 px-3 text-left">Last Transaction date</th>
            <th class="text-sm py-3 px-3 text-left">Date added</th>
        </tr>
    </thead>
    <tbody>
        @if(count($allClients) > 0)
             @foreach ($allClients as $client)
                <tr class="border border-t-0" >
                    <td class="text-sm p-3"><a href="{{ route('getAllTranx',['id'=> $client->id ]) }}" class="text-blue-700" > {{ $client->name }}</a></td>
                    <td class="text-sm p-3">{{ $client->description }}</td>
                    <td class="text-sm p-3">NGN {{ number_format($client->current_balance) }}</td>
                    <td class="text-sm p-3">{{ date("F jS, Y", strtotime($client->updated_at)) }}</td>
                    <td class="text-sm p-3">{{ date("F jS, Y", strtotime($client->created_at)) }}</td>
                </tr>
            @endforeach
        @else
            <tr class="border border-t-0" >
                <td  class="text-sm p-3 text-center" colspan="4">No data found</td>  
            </tr>
        @endif
   
    </tbody>
</table>

@endsection