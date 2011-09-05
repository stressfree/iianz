  <div class="node <?php print $type; if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <div id="contentPanel">
    	<div class="meta">
    	<div class="back">
    		<a href="/vacancy">View all vacancies &raquo;</a>
    	</div>
    	<h5>Region</h5>
    	<div class="info">
    	<?php print $node->field_region[0][view] ?>
    	</div>
    	<h5>Closing date</h5>
    	<div class="info">
    	<?php print $node->field_vacancy_closes[0][view] ?>
    	</div>
    	</div>
    	<?php if (count($field_company_logo) > 0) { ?>
    	<div class="images">
    	<?php foreach ($field_company_logo as $field_image) { 
    	if ($field_image['filepath'] != '') { ?>
    	<div class="image">
    		<div class="frame">
    			<img src="/sites/default/files/imagecache/thumbnail/<?php print $field_image['filename'] ?>" alt="<?php print $node->field_company[0][view] ?>" />
    		</div>
    	</div>
    	<?php }
    	} ?>
   	 	</div>
    	<?php } ?>
    </div>
    <div class="content">    	
    	<div class="contentContainer">
    	<h2><a href="<?php print $node->field_company_url[0][view] ?>"><?php print $node->field_company[0][view] ?></a></h2>
    	<?php print $content?>
    	</div>
    </div>    
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?> 
 </div>
