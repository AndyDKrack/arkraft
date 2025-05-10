@extends('layouts.app')
@section('title', 'Clients')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Clients</h1>
    <a href="{{ route('clients.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Client</a>
</div>
@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
@endif
<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Customer ID</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($clients as $client)
                <tr>
                    <td class="px-4 py-2">{{ $client->customer_id }}</td>
                    <td class="px-4 py-2">{{ $client->first_name }} {{ $client->surname }}</td>
                    <td class="px-4 py-2">{{ $client->company_name }}</td>
                    <td class="px-4 py-2">{{ $client->email }}</td>
                    <td class="px-4 py-2">{{ $client->phone_number }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-xs {{ $client->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-600' }}">
                            {{ ucfirst($client->status) }}
                        </span>
                    </td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="{{ route('clients.show', $client) }}" class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('clients.edit', $client) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Delete this client?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-gray-400">No clients found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">{{ $clients->links() }}</div>
@endsection
