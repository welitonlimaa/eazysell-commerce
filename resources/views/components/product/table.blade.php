<div class="mt-4 p-4 overflow-hidden shadow-sm sm:rounded-lg bg-white">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">
                        @if ($product->image)
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-16 h-16">
                        @else
                            No image available
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
