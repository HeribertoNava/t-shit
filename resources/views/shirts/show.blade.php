@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center py-10">
    <div class="max-w-md bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
        <img src="{{ $shirt->image }}" alt="{{ $shirt->name }}" class="w-full h-72 object-cover">
        <div class="p-6">
            <h2 class="text-2xl font-bold text-gray-800">{{ $shirt->name }}</h2>
            <p class="text-gray-600 mt-4">{{ $shirt->description }}</p>
            <p class="text-gray-700 mt-4 text-xl">Price: ${{ $shirt->price }}</p>

            <form action="{{ route('cart.add', $shirt->id) }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="size" class="block text-sm font-medium text-gray-700">Size:</label>
                    <select id="size" name="size" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
                    <input id="quantity" name="quantity" type="number" min="1" value="1" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg transform transition duration-500 hover:bg-indigo-700 hover:scale-105">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection
