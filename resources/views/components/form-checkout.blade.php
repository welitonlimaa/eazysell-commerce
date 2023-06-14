<div class="container mx-auto mt-8">
    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Checkout</h2>
        <form id="checkoutForm" action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input value="{{ Auth::user()->id }}" class="hidden" type="text" name="user_id" id="user_id" required>
                <label class="block text-gray-700 font-bold mb-2" for="address">Address</label>
                <input value="{{ Auth::user()->address }}" class="w-full px-3 py-2 border border-gray-300 rounded" type="text" name="address" id="address" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">Phone</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded" type="text" name="phone" id="phone" required>
            </div>
            <div id="totalField" class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="total">Total</label>
                <input class="hidden" type="text" name="total_price" id="total_price" required>
                <p id="total_price-tag"></p>
            </div>
            <div class="text-right">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Place Order</button>
            </div>
        </form>
    </div>
</div>