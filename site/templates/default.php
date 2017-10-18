<?php snippet('header') ?>

<div class="container">
  <?= $page->title() ?>
  <?= $page->description() ?>
  <?php if ($page->hasChildren()) : ?>
    <ul>
      <?php foreach ($page->children() as $c) : ?>
        <li><a href="<?= $c->url() ?>"><?= $c->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>
</div>

<?php snippet('footer') ?>