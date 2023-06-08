<div class="p-4 overflow-hidden shadow-sm sm:rounded-lg bg-white">
    <h4 class="w-full text-center mx-auto font-semibold">Edit Product</h4>
    <form method="POST" action="{{ route('products.update', ['id'=>$product->id]) }}" class="max-w-md mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold">Name</label>
            <input type="text" name="name" value="{{ $product->name }}" id="name" class="form-input mt-1 block w-full">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold">Description</label>
            <textarea name="description" value="{{ $product->description }}" id="description" class="form-textarea mt-1 block w-full" rows="4">{{ $product->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold">Price</label>
            <input type="number" name="price" value="{{ $product->price }}" id="price" step="0.01" class="form-input mt-1 block w-full">
        </div>

        <div class="mb-4">
            <label for="url_img" class="block text-gray-700 font-semibold">URL</label>
            <input type="text" name="url_img" value="{{ $product->url_img }}" id="url_img" class="form-input mt-1 block w-full">
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-semibold">Status</label>
            <select name="status" id="status" class="form-select mt-1 block w-full">
                <option value="">Status</option>
                <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold">Category</label>
            <select name="category_id" value="{{ $product->category_id }}" id="category" class="form-select mt-1 block w-full">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                Update
            </button>
        </div>
    </form>
</div>