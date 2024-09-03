@extends('layouts.app')

@section('content')
<div class="py-10">
    <h1 class="text-4xl font-bold text-center text-indigo-600 animate-pulse">Your Cart</h1>

    <div class="max-w-4xl mx-auto mt-8">
        @if($cartItems->isEmpty())
        <div class="text-center p-6 bg-white rounded-lg shadow-lg">
            <p class="text-gray-700">Your cart is empty. Go back and add some amazing shirts!</p>
            <a href="{{ route('shirts.index') }}" class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg">Shop Now</a>
        </div>
        @else
        <div class="grid grid-cols-1 gap-6">
            @foreach($cartItems as $item)
            <div class="flex bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ $item->shirt->image }}" alt="{{ $item->shirt->name }}" class="w-32 h-32 object-cover">
                <div class="p-4 flex flex-col justify-between w-full">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">{{ $item->shirt->name }}</h3>
                        <p class="text-gray-600">Size: {{ $item->size }}</p>
                        <p class="text-gray-600">Quantity: {{ $item->quantity }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-gray-700 font-bold">${{ $item->shirt->price * $item->quantity }}</p>
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-6 text-right">
            <a href="#" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg transform transition duration-500 hover:bg-indigo-700 hover:scale-105">Proceed to Checkout</a>
        </div>
        @endif
    </div>
</div>
@endsection
