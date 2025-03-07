<main class="mx-auto max-w-screen-lg space-y-6 ">
    <?= $livro['titulo'] ?>
    <div class="  p-2 bg-stone-900 rounded border-stone-800 border-2">
        <div class=" flex">
            <div class="w-1/3">imagem</div>
            <div class="space-y-2">
                <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                <div class="text-xs italic"><?= $livro['autor'] ?></div>
                <div class="text-xs italic">🌟🌟🌟🌟🌟(3 avaliações)</div>
            </div>
        </div>
        <div class="text-sm">
            <?= $livro['descricao'] ?>
        </div>
    </div>
</main>