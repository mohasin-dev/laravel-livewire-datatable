<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@1.1.2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .a-tag-default a{
                color: blue;
            }

            .a-tag-default a:hover{
                text-decoration: underline;
            }
        </style>
        @livewireStyles
    </head>
    <body>
        <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
            <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
            <div class="h-24 bg-gray-900">
                <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel-livewire.png">
            </div>
            <nav class="flex-1 flex flex-col text-semibold text-gray-100 bg-gray-900">
                <a href="#" class="px-4 py-2">Dashboard</a>
                <a href="#" class="px-4 py-2" style="border: 1px solid #ccc">Users</a>
                <a href="#" class="px-4 py-2">Products</a>
                <a href="#" class="px-4 py-2">Orders</a>
            </nav>
            </aside>
            <div class="flex-1">
            <header class="flex items-center p-4 text-semibold text-gray-100 bg-gray-900" style="justify-content: space-between">
                <button class="p-1 mr-4" @click="sidebarOpen = !sidebarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                </button>
                Laravel Livewire Datatable (TALL Stack)

                <div class="flex-shrink-0 w-10 h-10">
                    <img
                        class="w-full h-full rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                        alt=""
                    />
                </div>
            </header>
            <main class="p-4">
                @livewire('user-table')
            </main>
            </div>
        </div>
        
        @livewireScripts

        <!-- Script -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>
</html>
