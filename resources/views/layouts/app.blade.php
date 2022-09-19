<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting App</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 text-sm bg-gray-background">
    <header class="flex item-center justify-between px-8 py-4">
        <a href="#">Voting App</a>

        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif

            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="Profile"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            <div class="bg-white border-2 border-blue rounded-xl mt-16" style="border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
            border-image-slice: 1;
            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
            background-origin: border-box;
            background-clip: content-box, border-box;">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Tambahkan Ide</h3>
                    <p class="text-xs mt-4">
                        Tambahkan ide menarikmu!
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text"
                            class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2"
                            placeholder="Judul idemu ..." />
                    </div>

                    <div>
                        <select name="category_add" id="category_add"
                            class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                            <option value="Category One">Kategori Satu</option>
                            <option value="Kategori Satu">Kategori Satu</option>
                            <option value="Kategori Satu">Kategori Satu</option>
                            <option value="Kategori Satu">Kategori Satu</option>
                            <option value="Kategori Satu">Kategori Satu</option>
                        </select>
                    </div>

                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4"
                            class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2 placeholder-gray-900"
                            placeholder="Deskripsikan idemu ..."></textarea>
                    </div>

                    <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                            class="flex items-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="w-6 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            Attach
                        </button>

                        <button type="submit"
                            class="text-white w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">

                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue">Semua Ide (87)</a>
                    </li>

                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Berproses
                            (1)
                        </a>
                    </li>
                </ul>

                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Dijalankan
                            (10)</a>
                    </li>

                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Ditutup
                            (55)
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>