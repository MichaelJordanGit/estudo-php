<?php

?>

<div class="p-2 bg-stone-900 rounded border-stone-800 border-2">
    <div class="flex gap-2">
        <div class="w-1/3">
            <img src="<?= $livro->imagem?>" class="w-30 rounded " alt="">
        </div>
        <div class="space-y-2">
            <a href="/livro?id=<?= htmlspecialchars($livro->id)?>" class="font-semibold hover:underline">
                <?= htmlspecialchars($livro->titulo) ?>
            </a>
            <div class="text-xs italic"><?= htmlspecialchars($livro->autor) ?></div>
          <div class="text-xs italic"><?php str_repeat('🌟', $livro->nota_avaliacao)?>(<?=$livro->count_avaliacoes?> Avaliações)</div>
        </div>
    </div>
    <div class="text-sm">
        <?= nl2br(htmlspecialchars($livro->descricao)) ?>
    </div>
</div>