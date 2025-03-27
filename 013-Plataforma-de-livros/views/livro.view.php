<?php
    $notaTotal = array_reduce($avaliacoes, function($carry, $aval){
        return ($carry ?? 0) + $aval->nota;
    }) ?? 0;
    $notaTotal = round($notaTotal / 5);
    $notaFinal = str_repeat('🌟', $notaTotal);
?>
<main class="mx-auto max-w-screen-lg space-y-6">
    <?php if (isset($livro)): ?>
        <h1><?= htmlspecialchars($livro->titulo) ?></h1>
        <div class="p-2 bg-stone-900 rounded border-stone-800 border-2">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-2">
                    <a href="/livro?id=<?= htmlspecialchars($livro->id) ?>" class="font-semibold hover:underline">
                        <?= htmlspecialchars($livro->titulo) ?>
                    </a>
                    <div class="text-xs italic"><?= htmlspecialchars($livro->autor) ?></div>
                    <div class="text-xs italic"><?=$notaFinal?>(<?=count($avaliacoes)?> avaliações)</div>
                </div>
            </div>
            <div class="text-sm">
                <?= nl2br(htmlspecialchars($livro->descricao)) ?>
            </div>
        </div>
    <?php else: ?>
        <p class="text-red-500">Livro não encontrado.</p>
    <?php endif; ?>

    <h2>Avaliações</h2>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3 gap-4 grid">
            <?php if (!empty($avaliacoes)): ?>
                <?php foreach ($avaliacoes as $avaliacao): ?>    
                    <div class="border border-stone-700 rounded p-2">
                        <?= htmlspecialchars($avaliacao->avaliacao) ?> 
                        <?php
                            $nota = str_repeat("🌟", $avaliacao->nota);
                        ?>
                        <?=$nota?>
                        <p class="text-yellow-400">Nota: <?= htmlspecialchars($avaliacao->nota) ?></p>
                    </div>
                <?php endforeach; ?>    
            <?php else: ?>
                <p class="text-gray-400">Nenhuma avaliação disponível.</p>
            <?php endif; ?>
        </div>

        <div>
            <?php if (auth()): ?>
                <div class="border border-stone-700 rounded">
                    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Me conte o que achou</h1>
                    <form class="px-4 py-6 space-y-4" method="POST" action="/avaliacao-criar">
                        <?php if ($validacoes = flash()->get('validacoes')): ?>
                            <div class="border-red-800 bg-red-900 text-red-400 px-4 py-2 rounded-md border-2 text-small font-bold">
                                <ul>
                                    <?php foreach ($validacoes as $validacao): ?>
                                        <li><?= htmlspecialchars($validacao) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="flex flex-col">
                            <label class="text-stone-400 mb-1">Avaliação</label>
                            <textarea name="avaliacao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"></textarea>
                        </div>

                        <div class="flex flex-col">
                            <input name="livro_id" type="hidden" value="<?= htmlspecialchars($livro->id) ?>">
                            <label class="text-stone-400 mb-1">Nota</label>
                            <select name="nota" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <button type="submit" class="border-stone-800 bg-stone-900 px-4 py-2 rounded-md border-2 hover:bg-stone-700">
                            Salvar
                        </button>
                    </form>
                </div>
            <?php else: ?>
                <p class="text-gray-400">Faça login para deixar uma avaliação.</p>
            <?php endif; ?>
        </div>
    </div>
</main>
