<div class="p-4 overflow-hidden shadow-sm sm:rounded-lg bg-white">
    <h4 class="w-full text-center mx-auto font-semibold">Create New Product</h4>
    <form method="POST" action="{{ route('products.store') }}" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold">Name</label>
            <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold">Description</label>
            <textarea name="description" id="description" class="form-textarea mt-1 block w-full" rows="4"></textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold">Price</label>
            <input type="number" name="price" id="price" step="0.01" class="form-input mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="url_img" class="block text-gray-700 font-semibold">URL</label>
            <input type="text" name="url_img" id="url_img" class="form-input mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold">Category</label>
            <select name="category_id" id="category" class="form-select mt-1 block w-full">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                Create Product
            </button>
        </div>
    </form>
</div>