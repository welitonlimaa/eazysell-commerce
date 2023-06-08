<div class="mt-4 p-4 overflow-hidden shadow-sm sm:rounded-lg bg-white">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ $product->url_img }}" alt="{{ $product->name }}" class="w-16 h-16">
                        <span>{{ $product->name }}</span>
                    </td>
                    <td class="border px-4 py-2">
                    <a href="{{ route('products.edit', ['id'=>$product->id]) }}" class="w-full">
                        <svg class="w-5 m-auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="edit"> <g> <path d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8" fill="none" stroke="#e8af11" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path> <polygon fill="none" points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8" stroke="#e8af11" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon> </g> </g> </g> </g>
                        </svg>
                    </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
