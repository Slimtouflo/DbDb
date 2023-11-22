<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito:400,700&display=swap" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>
</head>
<body class="font-[Nunito] flex flex-col justify-between h-screen">
    <div class="bg-orange-800 text-black-300 py-8 shadow-xl">
        <div class="max-w-5xl mx-auto px-3">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl">
                    <a href="/">Dragon ball Database</a>
                </h1>
                <nav class="space-x-3">
                    <a class="hover:underline underline-offset-8" href="/categories">Races</a>
                    <a class="hover:underline underline-offset-8" href="/films">Personnages</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-3 py-8 w-full">
        @yield('content')
    </div>

    <footer class="bg-orange-800 text-black-300 py-8">
        <div class="max-w-5xl mx-auto px-3">
            <p class="text-center text-xl">Dragon ball Database &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>