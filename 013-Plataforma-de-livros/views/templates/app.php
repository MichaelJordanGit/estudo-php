<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Book Wise</title>
</head>

<body class="bg-stone-950 text-stone-300">
    <header class="bg-stone-900">
        <nav class=" mx-auto max-w-screen-lg flex justify-between px-8 ">
            <div class="font-bold text-xl tracking-wider">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6 ">
        <?php
        require "views/{$view}.view.php"
        ?>


    </main>
</body>

</html>