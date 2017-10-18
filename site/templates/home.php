<?php snippet('header') ?>

  <div class="container-fluid">
    <div class="jumbotron">
      <?= $page->intro()->kirbytext() ?>
    </div>
  </div>
  <div class="container">
    <?= $page->text()->kirbytext() ?>

    <?php foreach ($site->pages()->filterBy('template','collections') as $p) : ?>
      <a href="<?= $p->url() ?>"><?= $p->title() ?></a>
    <?php endforeach ?>
  </div> <!-- end container -->

<?php snippet('footer') ?>