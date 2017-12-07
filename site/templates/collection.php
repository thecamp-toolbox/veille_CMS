<?php snippet('header') ?>


	    <div class="container-fluid jumbotron">
	    	<div class="row">
		    	<div class="col-sm-2 text-center">
		    		<?php if($page->hasPrevVisible()): ?>
						<a href="<?php echo $page->prevVisible()->url() ?>">
							<i class="arrow fa fa-caret-left"></i>
						</a>
					<?php endif ?>
		    	</div>
		    	<div class="col-sm-8 text-center">
		    		<a href="<?= $page->parent()->url() ?>" class="text-muted"><?= $page->parent()->title() ?></a>
			    	<h1 class="jumbotron-heading">
			    		<i class="fa fa-bookmark-o"></i>
			    		<?= $page->title() ?>
			    	</h1>
			    	<p class="lead text-muted"><?= $page->text()->kirbytext() ?></p>
			    	<?php if ($site->user()) : ?>
			    		<p class="text-muted"><a href="<?= $site->url().'/panel/pages/'.$page->uri().'/edit' ?>" target="_blank">Edit</a></p>
			    	<?php endif ?>
			    </div>
			    <div class="col-sm-2 text-center">
			    	<?php if($page->hasNextVisible()): ?>
						<a href="<?php echo $page->nextVisible()->url() ?>">
							<i class="arrow fa fa-caret-right"></i>
						</a>
					<?php endif ?>
			    </div>
		    </div>
	    </div>

    <div class="album">
	    <div class="container">
	        <div class="card-columns">
	        	<?php foreach ($page->children() as $item) : ?>
	        		<?php 
	        			if ($item->template() == 'card-item') {
	        				snippet('item-card', array('item'=>$item));
	        			} elseif ($item->template() == 'card-quote') {
	        				snippet('quote-card', array('item'=>$item));
	        			} elseif ($item->template() == 'card-tweet') {
	        				snippet('tweet-card', array('item'=>$item));
	        			}
	        		?>
	        	<?php endforeach ?>
	        </div>
	    </div>
	</div>

<?php snippet('footer') ?>