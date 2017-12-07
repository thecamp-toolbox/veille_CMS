<div class="card border-dark collection text-center">
	<div class="card-header border-dark">
		<h4>
			<a href="<?= $col->url() ?>" class="text-muted">
				 <?= $col->title() ?>
			</a>
		</h4>
	</div>
	<div class="card-body">
		<p class="card-text">
			<?= $col->text()->kirbytext()->excerpt(250) ?>	
		</p>
		<p class="card-text">
			<a href="<?= $col->url() ?>" class="btn btn-light">Voir la collection</a>
		</p>
	</div>
	<div class="card-footer border-dark text-muted">
		<i class="fa fa-bookmark-o"></i>
		<?php echo $col->children()->count() ?>
	</div>
</div>
