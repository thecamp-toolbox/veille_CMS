<?php snippet('header') ?>

  <div class="container-fluid">
    <div class="jumbotron text-center">
      <h1><?= $site->title()?></h1>
      <em class="text-muted">(Beta)</em>
    </div>
  </div>

  <div class="container">
    <?= $page->text()->kirbytext() ?>
  </div>

  <?php foreach ($site->pages()->visible() as $lib) : ?>
    <hr>
    <?php snippet('library-card', array('lib' => $lib)) ?>
  <?php endforeach ?>

  <hr>


<?php snippet('footer') ?>