   <div class="node <?php print $type; if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <div id="contentPanel">  	
    	<div class="meta">
    		<div class="back">
    			<a href="/news">View all news &raquo;</a>
    		</div>  
    		<h5>Published</h5>
    		<div class="info">
    		<?php print $node->field_news_date[0][view] ?>
    		</div>
    		<h5>Category</h5>
    		<div class="taxonomy">
    		   <ul class="links inline">
    		   <?php foreach ($node->taxonomy as $term) { ?>
    		      <li><a href="/news/<?php print strtolower(urlencode($term->name)) ?>"><?php print $term->name ?></a></li>
    		   <?php } ?>
    		   </ul>
    		</div>
    	</div>
    	<?php 
    	if ($node->field_news_layout[0][view]!='Photo gallery') {
			if (count($field_images) > 0) { ?>
			<div class="images">
			<?php foreach ($field_images as $field_image) { 
			if ($field_image['filepath'] != '') { ?>
			<div class="image">
				<div class="frame">
					<a href="/<?php print $field_image['filepath'] ?>" rel="lightbox">
					<img src="/sites/default/files/imagecache/thumbnail/<?php print $field_image['filename'] ?>" alt="<?php print $field_image['data'][description] ?>" />
					<span>+ Enlarge</span></a>
				</div>
				<?php if ($field_image['data'][description] != '') { ?>
				<div class="caption"><?php print $field_image['data'][description] ?></div>
				<?php } ?>
			</div>
			<?php }
			} ?>
   	 	</div>
    	<?php
    		}
    	} ?>
    </div>
    <div class="content">    	
    	<div class="contentContainer"><?php print $content?></div>
    	<?php 
    	if ($node->field_news_layout[0][view]=='Photo gallery') {
			if (count($field_images) > 0) { 
				$counter = 0; ?>
				<div class="gallery images">
				<?php foreach ($field_images as $field_image) { 
					if ($field_image['filepath'] != '') {
						if ($counter % 3 == 0) { ?>
						<div class="rowflush"><!-- --></div>
						<?php } ?>
						<div class="image">
						<div class="frame">
							<a href="/<?php print $field_image['filepath'] ?>" rel="lightbox">
							<img src="/sites/default/files/imagecache/gallery/<?php print $field_image['filename'] ?>" alt="<?php print $field_image['data'][description] ?>" />
							<?php if ($field_image['data'][description] != '') { ?>
							<?php print $field_image['data'][description] ?>
							<?php } ?>
							<span>(enlarge)</span></a>
						</div>
						</div>
						<?php 
						$counter++;
					}
				} ?>
   	 			</div><div class="rowflush"><!-- --></div>
    	<?php }
    	} ?>
    </div>   
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?>
  </div>