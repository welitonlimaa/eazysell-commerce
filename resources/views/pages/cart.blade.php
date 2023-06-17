@extends('layouts.pages')

@section('title', 'Cart')

@section('content')
  <div class="h-fit bg-gray-100 pt-20">
    <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
      <div id="products_cart-container" class="rounded-lg md:w-2/3">
      </div>
      <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        <div class="mb-2 flex justify-between">
          <p class="">Subtotal</p>
          <p id="total-price" class=""></p>
        </div>
        <div class="flex justify-between">
          <p class="">Shipping</p>
          <p class="">$4.99</p>
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p id="final-price" class="mb-1 text-lg font-bold"></p>
          </div>
        </div>
        <div class="flex justify-between mt-2">
        <a href="{{ route('checkout') }}" class="w-fit m-auto rounded-md bg-blue-500 p-2 font-medium text-blue-50 hover:bg-blue-600">Check out</a>
        </div>
      </div>
    </div>
  </div>
@endsection
