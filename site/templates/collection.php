<?php snippet('header') ?>

    <section class="jumbotron text-center">
	    <div class="container">
	    	<h1 class="jumbotron-heading"><?= $page->title() ?></h1>
	    	<p class="lead text-muted"><?= $page->text()->kirbytext() ?></p>
	    	<?php if ($site->user()) : ?>
	    		<p class="text-muted"><a href="<?= $site->url().'/panel/pages/'.$page->uri().'/edit' ?>" target="_blank">Edit</a></p>
	    	<?php endif ?>
	    </div>
    </section>

    <div class="album">
	    <div class="container">
	        <div class="card-columns">
	        	<?php foreach ($page->children() as $item) : ?>
	        		<?php 
	        			if ($item->template() == 'item') {
	        				snippet('item-card', array('item'=>$item));
	        			} elseif ($item->template() == 'quote') {
	        				snippet('quote-card', array('item'=>$item));
	        			}
	        		?>
	        	<?php endforeach ?>
	        </div>
	    </div>
	</div>

<?php snippet('footer') ?>