<?php snippet('header') ?>

  <div class="container-fluid">
    <div class="jumbotron text-center">
      <h1><?= $site->title()?></h1>
    </div>
  </div>
  <div class="container">
    <?= $page->text()->kirbytext() ?>
  </div>

  <div class="container mt"><!-- loop through visible libraries -->
    <?php foreach ($site->pages()->visible() as $lib) : ?>
      <?php snippet('library-card', array('lib' => $lib)) ?>
    <?php endforeach ?>
  </div> <!-- end container -->

<?php snippet('footer') ?>