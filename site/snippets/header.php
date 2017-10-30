<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="icon" type="image/png" href="<?= $site->url() ?>/assets/images/favicons/favicon.png">

  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/font-awesome.min.css') ?>

  <?= css('assets/css/main.css') ?>

</head>
<body>

	<?php if ($page->template() != 'home') : ?>
		<nav>
			<a href="<?= $site->url() ?>" class="nav text-muted">
				<h5><i class="fa fa-home"></i></h5>
			</a>
		</nav>
	<?php endif ?>
