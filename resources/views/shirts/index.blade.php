@extends('layouts.app')

@section('content')
<div class="text-center py-10">
    <h1 class="text-5xl font-bold text-indigo-600 animate-pulse">T-shit Collection</h1>
    <p class="text-gray-700 mt-4 text-lg">Discover our unique and stylish shirts</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-6">
    @foreach($shirts as $shirt)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
        <img src="{{ $shirt->image }}" alt="{{ $shirt->name }}" class="w-full h-64 object-cover">
        <div class="p-4">
            <h3 class="text-xl font-bold text-gray-800">{{ $shirt->name }}</h3>
            <p class="text-gray-600 mt-2">${{ $shirt->price }}</p>
            <a href="{{ route('shirts.show', $shirt->id) }}" class="mt-4 bg-indigo-600 text-white py-2 px-4 rounded-lg inline-block">View Details</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
