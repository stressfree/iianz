  <div class="node <?php print $type; if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <div class="content">
		<?php 
		if (count($field_brochure_images) > 0) { ?>
    	<div class="images">
    	<?php 
		if (count($field_brochure_images) > 1) { ?>
		<div id="pager">
			<div class="pagerContainer">
			<ul><?php 
			$imageNo = 0;
			foreach ($field_brochure_images as $field_brochure_image) { 
			$imageNo++;
			$imageClass = "notselected"; 
			if ($imageNo == 1) {
				$imageClass = "selected";
			} ?>
			<li id="brochurePager<?php print $imageNo ?>" class="<?php print $imageClass ?>"><a href="javascript:showBrochureImage(<?php print $imageNo ?>)"><?php print $imageNo ?></a></li>
			<?php
			} ?>
			</ul>
			</div>
		</div><?php
		}
    	$imageNo = 0;
    	foreach ($field_brochure_images as $field_brochure_image) { 
			$imageNo++; ?>
    		<div id="brochureImage<?php print $imageNo ?>" class="image" <?php 
    		if ($imageNo != 1) { ?>style="display: none;"<?php } ?>>
	    		<div class="frame"><img src="/<?php print $field_brochure_image['filepath'] ?>" alt="<?php print $field_brochure_image['data'][description] ?>" /></div>
	    		<div class="caption"><?php print $field_brochure_image['data'][description] ?></div>
	    	</div>
	    <?php } ?>
    	</div>
    	<script type="text/javascript" language="javascript"> 
		//<![CDATA[
    	totalBrochureImages = <?php print $imageNo ?>;
    	//]]>
		</script>
    	<?php } ?>
    	<?php print $content?>   	
    </div>
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?>
  </div>
