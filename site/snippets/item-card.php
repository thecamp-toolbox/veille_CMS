<?php $image = makeImage($item) ?>

<div class="card">

	<!-- Intégration d'une image si il y en a une -->
	<?php if ($image != '') : ?>
		<div class="card-img-top">
			<?php if ($item->link() != '') : ?><!-- Lien si il y en a un -->
				<a href="<?= $item->link() ?>" target="_blank">
			<?php endif ?>
			<img class="card-img-top" src="<?= $image ?>">
			<?php if ($item->link() != '') : ?>
				</a>
			<?php endif ?>
		</div>
	<?php endif ?>

	<div class="card-body">
		<h4 class="card-title">
			<?= $item->title() ?>
			<a href="<?= $item->link() ?>" target="_blank">
				<i class="fa fa-external-link"></i>
			</a>		
		</h4>
		<?php if ($item->creator() != '') : ?>
			<h6 class="card-subtitle mb-2 text-muted">
		        <i class="fa fa-user"></i>
		        <?= $item->creator() ?>
		    </h6>
		<?php endif ?>
		<?php if ($item->location() != '') : ?>
			<h6 class="card-subtitle mb-2 text-muted">
		        <i class="fa fa-map-marker"></i>
		        <?= $item->location() ?>
		    </h6>
		<?php endif ?>
		<?php if ($item->year() != '') : ?>
			<h6 class="card-subtitle mb-2 text-muted">
		        <i class="fa fa-bolt"></i>
		        <?= $item->year() ?>
		    </h6>
		<?php endif ?>

		<?php if ($item->description() != '') : ?>
			<hr>
		<?php endif ?>

		<p class="card-text">
			<?= $item->description()->kirbytext() ?>
		</p>

		<?php if ($item->link() != '') : ?>
			<a href="<?= $item->link() ?>" class="card-link" target="_blank">
				Lire
			</a>
		<?php endif ?>
	</div><!-- end card body -->
	<div class="card-footer text-muted">
		<?php $cat = $pages->find('categories/'.$item->typology()) ?>
		<small>
			<i class="fa fa-<?= $cat->awesome() ?>"></i>
			<?= $cat->title() ?>
		</small>
	</div>
</div>