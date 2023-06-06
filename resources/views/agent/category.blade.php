<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden shadow-sm sm:rounded-lg bg-white">
                <h4 class="w-full text-center mx-auto font-semibold">Create Category</h4>
                <form action="{{ route('category.store') }}" method="POST" class="w-full mx-auto max-w-sm flex items-center py-2 border-b">
                @csrf    
                    <input name="name" class="appearance-none bg-transparent border rounded-md w-full h-10 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Category name..." aria-label="Full name">
                    <button type="submit" class="flex-shrink-0 border-4 text-white py-1 px-2 rounded bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700">
                        Create
                    </button>
                </form>
            </div>
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
                                            <button type="submit">
                                                <svg class="w-5 mx-auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#db0000" stroke="#db0000">
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
        </div>
    </div>
</x-app-layout>