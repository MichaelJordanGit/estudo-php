<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Meu Portfolio</title>
</head>

<body class="bg-slate-900 text-white">
  <?php include('./components/header.php');
  ?>
  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <?php
    include('./components/hero.php')
    ?>

    <!-- projetos -->
    <section class=" space-y-3 py-6">
      <h2 class="text-2xl font-bold">Meus Projetos</h2>
      <!-- projeto -->
      <?php
      include('./components/projetos.php');
      ?>
    </section>
  </main>

  <?php
  include('./components/footer.php');
  ?>
</body>

</html>