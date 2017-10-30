<div class="container">
	<h4><a href="<?= $lib->url() ?>"><?= $lib->title() ?></a></h4>

	<p class="card-text"><?= $lib->text()->excerpt(200) ?></p>

	<div class="card-deck">
		<?php foreach ($lib->children()->limit(3) as $col) : ?>
			<?php snippet('collection-card', array('col' => $col)) ?>
		<?php endforeach ?>
	 </div>
</div>