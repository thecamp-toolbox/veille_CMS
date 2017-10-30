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
		
		<?php if ($item->description() != '') : ?>
			<hr>
		<?php endif ?>

		<p class="card-text">
			<?= $item->description()->kirbytext() ?>
			<?php if ($item->baseline() != '') : ?>
				<div class="alert alert-secondary" role="alert">
				  <?= $item->baseline() ?>
				</div>
			<?php endif ?>
		</p>

		<?php if ($item->link() != '') : ?>
			<a href="<?= $item->link() ?>" class="card-link" target="_blank">
				<?php if ($item->typology() == 'fact') : ?>
					Source
				<?php else : ?>
					Lire
				<?php endif?>
			</a>
		<?php endif ?>
	</div><!-- end card body -->

	<?php if ($item->typology() != '' || $item->creator() != '' || $item->location() || $item->year()) : ?>
		<div class="card-footer text-muted">
			<small>
				<?php if ($item->typology() != '') : ?>
					<?php $cat = $pages->find('categories/'.$item->typology()) ?>
					<i class="fa fa-<?= $cat->awesome() ?>"></i>
					<?= $cat->title() ?>
				<?php endif ?>
				<?php if ($item->creator() != '') : ?>
				        <i class="fa fa-user"></i>
				        <?= $item->creator() ?>
				<?php endif ?>
				<?php if ($item->location() != '') : ?>
				        <i class="fa fa-map-marker"></i>
				        <?= $item->location() ?>
				<?php endif ?>
				<?php if ($item->year() != '') : ?>
				        <i class="fa fa-calendar-o"></i>
				        <?= $item->year() ?>
				<?php endif ?>
			</small>
		</div><!-- end card-footer -->
	<?php endif ?>

</div>