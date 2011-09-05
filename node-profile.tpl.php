  <div class="node memberprofile <?php if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <div id="contentPanel">
    	<div class="back">
    		<a href="/profile">View all profiles &raquo;</a>
    	</div>
    	<div class="meta">
    	<h5>Region</h5>
    	<div class="info">
    	<?php print $node->field_region[0][view] ?>
    	</div>
    	</div>
    	<?php if (count($field_personal_photo) > 0) { ?>
    	<div class="images">
    	<?php foreach ($field_personal_photo as $field_image) { 
    	if ($field_image['filepath'] != '') { ?>
    	<div class="image">
    		<div class="frame">
    			<img src="/<?php print $field_image['filepath'] ?>" alt="<?php print $title ?>" />
    		</div>
    	</div>
    	<?php }
    	} ?>
   	 	</div>
    	<?php } ?>
    </div>
    <div class="content">    	
    	<div class="contentContainer"><?php print $content?></div>
    </div>    
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?>
  </div>
