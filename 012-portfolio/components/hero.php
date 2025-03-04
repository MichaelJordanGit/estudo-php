<?php
$itens = [
  ['href' => 'http://linkedin.com', 'src' => 'img/linkedin.png', 'alt' => 'logo LinkedIn'],
  ['href' => 'http://facebook.com', 'src' => 'img/Facebook.png', 'alt' => 'logo facebook'],
  ['href' => 'http://instagram.com', 'src' => 'img/Instagram.png', 'alt' => 'logo instagram'],
]

?>



<section class="flex gap-x-3">
  <!-- titulo e descrição -->
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">Oi, meu nome é Michael</h1>
    <p class="text-xl leading-8 mt-6 mb-2">
      Falando um pouco sobre mim, sou desenvolvedor web que agora criar
      coisas novas e aprender novas tecnologias. Especializado em PHP,
      HTML e CSS.
    </p>

    <ul class="flex gap-x-3 mt-8">
      <?php foreach ($itens as $item): ?>
        <li>
          <a href="<?= $item['href'] ?>" target="_blank">
            <img class="h-8 hover:animate-pulse" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>">
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>
  <!-- imagem -->
  <div class="w-1/3  flex items-center justify-center">
    <div>
      <img class="h-60 -mt-3" src="img/IMG_4813.JPG" alt="michael jordan">
    </div>
  </div>
</section>