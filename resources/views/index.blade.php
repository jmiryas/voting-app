<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Kategori Satu</option>
                <option value="Kategori Satu">Kategori Satu</option>
                <option value="Kategori Satu">Kategori Satu</option>
                <option value="Kategori Satu">Kategori Satu</option>
                <option value="Kategori Satu">Kategori Satu</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Filter Lain</option>
                <option value="Filter Lain">Filter Lain</option>
                <option value="Filter Lain">Filter Lain</option>
                <option value="Filter Lain">Filter Lain</option>
                <option value="Filter Lain">Category One</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Cari sebuah ide ..."
                class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8" />

            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                    className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>