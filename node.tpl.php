  <div class="node <?php print $type; if ($sticky) { print " sticky"; } if (!$status) { print " node-unpublished"; } ?>">
    <div class="content">
    	<div class="contentContainer"><?php print $content?></div>
    </div>
    <?php if ($links) { ?><div class="links"> &raquo; <?php print $links; ?></div><?php }; ?>
  </div>
