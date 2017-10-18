<div class="card">
	<div class="card-body">
		<blockquote class="blockquote">
			<i class="fa fa-quote-left"></i>
	    	   <?= $item->description()->kirbytext() ?>
	    	<p class="blockquote-footer">
				<cite title="Source Title">
					<a href="<?= $item->link() ?>" target="_blank">
						<?= $item->creator() ?>
					</a> 
				</cite>
			</p>
	    </blockquote>
	</div>
</div>