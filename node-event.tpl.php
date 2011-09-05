  <div class="node <?php print $type; if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <div id="contentPanel">
    	<div class="meta">
    		<div class="back">
    			<a href="/events">View all events &raquo;</a>
    		</div>
    		<?php
    		if ($node->field_event_time[0][view] != '') {
    			if ($node->field_tbc[0][view] == 'Date yet to be confirmed') { ?>
    			<h5>Time to be Confirmed</h5>
    			<div class="info">
    			<?php print $node->field_duration[0][view] ?> sometime between:<br/>
    			<em><?php print $node->field_event_time[0][view] ?></em>
    			</div>
    		<?php } else { ?>
    			<h5>Start & End Times</h5>
    			<div class="info">
    			<?php print $node->field_event_time[0][view] ?>
    			</div>
    		<?php }
    		}   		
    		if ($node->field_location[0][view] != '') { ?>
    		<h5>Location</h5>
    		<div class="info">
    		<?php print $node->field_location[0][view] ?>
    		</div>
    		<?php 
    		} ?>
    		<h5>Category</h5>
    		<div class="taxonomy">
    			<ul class="links inline">
    		   <?php foreach ($node->taxonomy as $term) { ?>
    		      <li><a href="/events?tid=<?php print $term->tid ?>"><?php print $term->name ?></a></li>
    		   <?php } ?>
    		   </ul>
    		</div>
    	</div>    
    	<?php if (count($field_images) > 0) { ?>
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
    	<?php } ?>
    </div>
    <div class="content">    	
    	<div class="contentContainer"><?php print $content?></div>
    </div>
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?>	
  </div>
