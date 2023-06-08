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