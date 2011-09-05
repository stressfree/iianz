  <div class="node <?php print $type; if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <?php if (count($field_images) > 0) { ?>
    	<div class="images">
    	<?php foreach ($field_images as $field_image) { 
    	if ($field_image['filepath'] != '') { ?>
    	<div class="image">
    		<div class="frame">
    			<a href="/<?php print $field_image['filepath'] ?>" rel="lightbox">
    			<img src="/sites/default/files/imagecache/thumbnail/<?php print $field_image['filename'] ?>" alt="<?php print $field_image['data'][description] ?>" /></a>
    		</div>
	    	<?php if ($field_image['data'][description] != '') { ?>
	    	<div class="caption"><?php print $field_image['data'][description] ?></div>
	    	<?php } ?>
    	</div>
    	<?php }
    	} ?>
   	 	</div>
    	<?php } ?>
    <div class="content">    	
    	<div class="contentContainer"><?php print $content?></div>
    </div>
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?>
  </div>
