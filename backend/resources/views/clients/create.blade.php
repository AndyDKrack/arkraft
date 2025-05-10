@extends('layouts.app')
@section('title', 'Add Client')
@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-6">Add Client</h1>
<form action="{{ route('clients.store') }}" method="POST" class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700">First Name</label>
            <input type="text" name="first_name" value="{{ old('first_name') }}" class="w-full border rounded px-3 py-2 mt-1" required>
            @error('first_name')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Surname</label>
            <input type="text" name="surname" value="{{ old('surname') }}" class="w-full border rounded px-3 py-2 mt-1" required>
            @error('surname')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Company Name</label>
            <input type="text" name="company_name" value="{{ old('company_name') }}" class="w-full border rounded px-3 py-2 mt-1">
            @error('company_name')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2 mt-1" required>
            @error('email')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Phone Number</label>
            <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="w-full border rounded px-3 py-2 mt-1" required>
            @error('phone_number')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Profession</label>
            <input type="text" name="profession" value="{{ old('profession') }}" class="w-full border rounded px-3 py-2 mt-1">
            @error('profession')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Country</label>
            <input type="text" name="country" value="{{ old('country') }}" class="w-full border rounded px-3 py-2 mt-1" required>
            @error('country')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">City</label>
            <input type="text" name="city" value="{{ old('city') }}" class="w-full border rounded px-3 py-2 mt-1" required>
            @error('city')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div class="md:col-span-2">
            <label class="block text-gray-700">Address</label>
            <input type="text" name="address" value="{{ old('address') }}" class="w-full border rounded px-3 py-2 mt-1">
            @error('address')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" class="w-full border rounded px-3 py-2 mt-1">
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                <option value="prospect" {{ old('status') == 'prospect' ? 'selected' : '' }}>Prospect</option>
            </select>
            @error('status')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Referred By</label>
            <input type="text" name="referred_by" value="{{ old('referred_by') }}" class="w-full border rounded px-3 py-2 mt-1">
            @error('referred_by')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
        <div class="md:col-span-2">
            <label class="block text-gray-700">Notes</label>
            <textarea name="notes" class="w-full border rounded px-3 py-2 mt-1">{{ old('notes') }}</textarea>
            @error('notes')<div class="text-red-500 text-xs">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="mt-6 flex justify-end">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save Client</button>
    </div>
</form>
@endsection
