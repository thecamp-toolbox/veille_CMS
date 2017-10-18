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
		<h4 class="card-title"><?= $item->title() ?></h4>
		<?php if ($item->creator() != '') : ?>
			<h6 class="card-subtitle mb-2 text-muted">
		        <i class="fa fa-user"></i>
		        <?= $item->creator() ?>
		    </h6>
		<?php endif ?>
		<?php if ($item->location() != '') : ?>
			<h6 class="card-subtitle mb-2 text-muted">
		        <i class="fa fa-map-pin"></i>
		        <?= $item->location() ?>
		    </h6>
		<?php endif ?>
		<p class="card-text"><?= $item->description()->kirbytext() ?></p>
		<?php if ($item->link() != '') : ?>
			<a href="<?= $item->link() ?>" class="card-link" target="_blank">
				En savoir plus
			</a>
		<?php endif ?>
	</div>
</div>