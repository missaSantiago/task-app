<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Task App</title>
</head>

{{-- 
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>

    @yield('content')
</body> --}}

<body>
    <div class="bg-white">
        <div>
            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-14">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900"> @yield('title')</h1>
                </div>

                <section class="container mx-auto p-4">
                    @yield('content')
                </section>

            </main>
        </div>
    </div>

</body>

</html>
