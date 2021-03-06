<?php snippet('header') ?>

<div class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading"><?= $page->title() ?></h1>
		<p class="lead"><?= $page->text()->kirbytext() ?></p>
	</div>
</div>

<div class="container">
  <div class="card-deck">
	  <?php if ($page->hasChildren()) : ?>
		<?php foreach ($page->children() as $col) : ?>
			<?php snippet('collection-card', array('col' => $col)) ?>
		<?php endforeach ?>
	  <?php endif ?>
  </div>
</div>

<hr>

<?php snippet('footer') ?>