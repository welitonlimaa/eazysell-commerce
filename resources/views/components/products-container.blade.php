<main class="">
    <div class="container px-6 py-8 mx-auto">
        <div class="lg:flex lg:-mx-2">
            <div id="category-cards" class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
                <div>
                    <button id="all-categories" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">All</button>
                </div>
            </div>

            <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
                <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
                    <p id="items-number" class="text-gray-500 dark:text-gray-300"></p>
                    <div class="flex items-center">
                        <p class="text-gray-500 dark:text-gray-300">Sort</p>
                        <select id="options-sort" class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                            <option value="recommended">Recommended</option>
                            <option value="price">Price</option>
                            <option value="Size">Size</option>
                        </select>
                    </div>
                </div>

                <div id="product-cards" class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                </div>
            </div>
        </div>
    </div>
</main>