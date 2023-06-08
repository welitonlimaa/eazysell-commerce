<div class="mt-4 p-4 overflow-hidden shadow-sm sm:rounded-lg bg-white">
    <table class="table-auto mx-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Remove</th>
            </tr>
        </thead>
        <tbody>
            @if(sizeof($categories) !== 0)
                @foreach($categories as $category)
                    <tr>
                        <td class="border px-4 py-2">{{ $category->name }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('category.destroy', ['id'=>$category->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')    
                                <button type="submit" class="w-full">
                                    <svg class="w-5 m-auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#db0000" stroke="#db0000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="x-circle"> <g> <circle cx="12" cy="12" data-name="--Circle" fill="none" id="_--Circle" r="10" stroke="#eb0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle> <line fill="none" stroke="#eb0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="14.5" x2="9.5" y1="9.5" y2="14.5"></line> <line fill="none" stroke="#eb0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="14.5" x2="9.5" y1="14.5" y2="9.5"></line> </g> </g> </g> </g>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>