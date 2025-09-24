{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex">
        <!-- Sidebar -->
        @yield('navigation_bar')

        <!-- Main -->
        <main class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">@yield('title')</h1>
                <div>
                    <span class="mr-2">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500">Logout</button>
                    </form>
                </div>
            </header>

            <section>
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html> --}}
