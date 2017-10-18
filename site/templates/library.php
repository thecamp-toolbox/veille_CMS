<?php snippet('header') ?>

<div class="jumbotron text-center">
	<h1 class="jumbotron-heading"><?= $page->title() ?></h1>
	<p class="lead text-muted"><?= $page->text()->kirbytext() ?></p>
</div>

<div class="container">
  
  <?php if ($page->hasChildren()) : ?>
	<?php foreach ($page->children() as $c) : ?>

	    <a href="<?= $c->url() ?>">
	    	<h3><?= $c->title() ?></h3>
	    </a>
	   	<?= $c->text() ?>
	<?php endforeach ?>
  <?php endif ?>
</div>

<?php snippet('footer') ?>