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

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xss uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Profile"
                        class="w-14 h-14 rounded-xl">
                </a>

                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis omnis asperiores
                        placeat sapiente incidunt aliquam alias itaque nemo eaque perferendis laboriosam dolorem, esse
                        maiores corporis eligendi nihil quo voluptatum!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Kategori 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xss font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>

                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="w-6 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgba(163, 163, 163, .9); width: 24; height: 14;">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>

                                <ul
                                    class="ml-8 absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl">
                                    <li>
                                        <a href="#"
                                            class="rounded-xl hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                            class="rounded-xl hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-blue hover:bg-blue-hover font-bold text-xss uppercase rounded-xl transition duration-150 ease-in px-4 py-3 text-white">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Profile"
                        class="w-14 h-14 rounded-xl">
                </a>

                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis omnis asperiores
                        placeat sapiente incidunt aliquam alias itaque nemo eaque perferendis laboriosam dolorem, esse
                        maiores corporis eligendi nihil quo voluptatum!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Kategori 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-white text-xss font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Berproses
                            </div>

                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="w-6 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgba(163, 163, 163, .9); width: 24; height: 14;">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xss uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Profile"
                        class="w-14 h-14 rounded-xl">
                </a>

                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis omnis asperiores
                        placeat sapiente incidunt aliquam alias itaque nemo eaque perferendis laboriosam dolorem, esse
                        maiores corporis eligendi nihil quo voluptatum!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Kategori 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-red text-white text-xss font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Ditutup
                            </div>

                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="w-6 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgba(163, 163, 163, .9); width: 24; height: 14;">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xss uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Profile"
                        class="w-14 h-14 rounded-xl">
                </a>

                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis omnis asperiores
                        placeat sapiente incidunt aliquam alias itaque nemo eaque perferendis laboriosam dolorem, esse
                        maiores corporis eligendi nihil quo voluptatum!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Kategori 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-green text-white text-xss font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Dijalankan
                            </div>

                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="w-6 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgba(163, 163, 163, .9); width: 24; height: 14;">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xss uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Profile"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis omnis asperiores
                        placeat sapiente incidunt aliquam alias itaque nemo eaque perferendis laboriosam dolorem, esse
                        maiores corporis eligendi nihil quo voluptatum!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Kategori 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-purple text-white text-xss font-bold uppercase leading-none rounded-full text-center w-30 h-7 py-2 px-4">
                                Dipertimbangkan
                            </div>

                            <button
                                class="bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="w-6 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgba(163, 163, 163, .9); width: 24; height: 14;">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>