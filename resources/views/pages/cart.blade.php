@extends('layouts.pages')

@section('title', 'Cart')

@section('content')
  <div class="h-fit bg-gray-100 mt-6">
    <div class="w-full flex justify-center items-center">
      <svg class="w-12" height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#303030;} </style> <g> <path class="st0" d="M53.415,457.119c2.418,22.104,21.089,38.855,43.334,38.855H415.26c22.236,0,40.915-16.752,43.326-38.855 l27.956-206.229H25.459L53.415,457.119z M275.084,449.847h-38.168l-1.436-73.357h41.048L275.084,449.847z M384.472,282.255h45.987 l-5.587,63.549h-43.989L384.472,282.255z M379.143,376.49h43.037l-5.742,65.398c-0.398,4.502-4.167,7.958-8.692,7.958h-32.754 L379.143,376.49z M309.142,282.255h44.551l-3.59,63.549h-42.202L309.142,282.255z M307.3,376.49h41.064l-4.143,73.357h-38.364 L307.3,376.49z M278.377,282.255l-1.248,63.549h-42.257l-1.241-63.549H278.377z M206.144,449.847H167.78l-4.15-73.357H204.7 L206.144,449.847z M202.859,282.255l1.24,63.549h-42.202l-3.597-63.549H202.859z M137.008,449.847h-32.754 c-4.518,0-8.286-3.456-8.685-7.958l-5.75-65.398h43.037L137.008,449.847z M127.528,282.255l3.597,63.549H87.128l-5.578-63.549 H127.528z"></path> <path class="st0" d="M485.847,165.189H432.94L325.222,50.839c0.514-2.137,0.819-4.346,0.819-6.624 c0-7.74-3.183-14.879-8.263-19.935c-5.056-5.079-12.194-8.263-19.934-8.255c-7.74-0.008-14.879,3.176-19.927,8.255 c-5.08,5.056-8.263,12.195-8.263,19.935c0,7.74,3.183,14.872,8.263,19.934c5.056,5.08,12.195,8.263,19.927,8.255 c1.701,0,3.363-0.179,4.993-0.467l87.846,93.252H121.318l87.846-93.252c1.63,0.288,3.292,0.467,4.993,0.467 c7.74,0.008,14.871-3.175,19.928-8.255c5.087-5.063,8.27-12.194,8.262-19.934c0.008-7.74-3.175-14.879-8.262-19.935 c-5.056-5.079-12.187-8.263-19.928-8.255c-7.739-0.008-14.879,3.176-19.934,8.255c-5.079,5.056-8.263,12.195-8.255,19.935 c0,2.278,0.296,4.487,0.819,6.624L79.068,165.189H26.154C11.712,165.189,0,176.9,0,191.343v12.281 c0,14.442,11.712,26.153,26.154,26.153h459.694c14.442,0,26.153-11.711,26.153-26.153v-12.281 C512,176.9,500.289,165.189,485.847,165.189z M297.477,44.567l-0.14-0.352l0.148-0.367l0.359-0.148l0.367,0.148l0.008,0.016 L297.477,44.567z M213.79,43.849l0.366-0.148l0.359,0.148l0.157,0.367l-0.149,0.352l-0.741-0.702L213.79,43.849z"></path> </g> </g></svg>
      <h1 class="ml-2 text-center text-2xl font-bold">CART</h1>
    </div>
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
