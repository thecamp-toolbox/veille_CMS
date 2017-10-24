<div class="card">
	<div class="card-header">
		<h4><?= $lib->title() ?></h4>
	</div>
	<div class="card-body">
		<p class="card-text"><?= $lib->text()->excerpt(600) ?>...</p>
			<a href="<?= $lib->url() ?>" class="btn btn-primary">Lire</a>
	</div>
	<ul class="list-group list-group-flush">
		<?php foreach ($lib->children() as $col) : ?>
		    <li class="list-group-item">
		    	<a href="<?= $col->url() ?>">
		    		<?= $col->title() ?> (<?= $col->children()->count() ?>)
		    	</a>
			</li>
		<?php endforeach ?>
	 </ul>
</div>