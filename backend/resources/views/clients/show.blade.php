@extends('layouts.app')
@section('title', 'Client Details')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded shadow p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Client Details</h1>
    <div class="mb-4">
        <span class="font-semibold text-gray-700">Customer ID:</span> {{ $client->customer_id }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Name:</span> {{ $client->first_name }} {{ $client->surname }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Company:</span> {{ $client->company_name }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Email:</span> {{ $client->email }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Phone:</span> {{ $client->phone_number }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Profession:</span> {{ $client->profession }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Country:</span> {{ $client->country }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">City:</span> {{ $client->city }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Address:</span> {{ $client->address }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $client->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-600' }}">{{ ucfirst($client->status) }}</span>
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Referred By:</span> {{ $client->referred_by }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Registered At:</span> {{ $client->registered_at ? $client->registered_at->format('Y-m-d') : '' }}
    </div>
    <div class="mb-2">
        <span class="font-semibold text-gray-700">Notes:</span> <span class="block text-gray-600">{{ $client->notes }}</span>
    </div>
    <div class="mt-6 flex gap-4">
        <a href="{{ route('clients.edit', $client) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
        <a href="{{ route('clients.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Back to List</a>
    </div>
</div>
@endsection
