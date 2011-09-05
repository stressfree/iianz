<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<head>
  <title><?php print $head_title ?></title>
  	<?php print $head ?>
    <?php print $styles ?>
    <!--[if lt IE 7]>
	<link rel="stylesheet" media="all" type="text/css" href="/sites/all/themes/iianz/ie6.css" />
	<![endif]-->
    <?php print $scripts ?>
    <link rel="alternate" type="application/rss+xml" title="IIANZ | Latest News" href="http://feeds.feedburner.com/iianz" />
    <meta name="description" content="A vibrant, professional organisation for Auditors within New Zealand" />
    <meta name="keywords" content="auditing, internal auditor, non-profit, New Zealand" />
	<meta name="google-site-verification" content="uf4HdyijwhBiDjyZsd5eYQDhNtVwm29GP6A5J1noaU0" />
	<meta name="msvalidate.01" content="DCD260F973869398158C89916E599501" />
</head>
<body class="webpage">
<?php if (!empty($admin)) print $admin; ?>
<div id="webpageBody">
<div id="webpageContainer">
<div id="title">
 <?php if ($logo) { ?><div id="logo"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
 <?php if ($site_name) { ?><h2 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h2><?php } ?>
 <?php if ($search_box): ?><div id="searchBox"><?php print $search_box ?></div><?php endif; ?>
 <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>  
 <div id="primary">
	<div class="primaryContainer">
	<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
	</div>
 </div>
 <div id="secondary">
	<div class="secondaryContainer">
	<?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
	</div>
 </div>
</div>
<div id="container">
    <div id="header">
    	<?php print $header ?>
    </div>    
	<div id="content">
		<?php if($right) { ?>
		<div id="sidebar">
			<div id="sidebar-right">
				<?php print $right ?>
			</div>
		</div>
    	<?php } ?>
        <div id="main" <?php if ($is_front) { ?>class="homepage"<?php } ?>>
        	<h1 class="pagetitle"><?php print $title ?></h1>
        	<div class="tabs"><?php print $tabs ?></div>
        	<?php print $help ?>
        	<?php print $messages ?>
        	<?php print $content; ?>
        	<div class="clear"><!-- --></div>
      	</div>
      	<div id="contentDivider"><!-- --></div>
		<?php if($footer) { ?>
    	<div id="contentFooter">
    		<div class="contentFooterContainer">
	  			<?php print $footer ?>
    			<div class="clear"><!-- --></div>
    		</div>
    	</div>
    	<?php } ?>
    	<div class="clear"><!-- --></div>
	</div>
</div>
<div id="footer">
  <div class="footerContainer">
  <?php if($left) { ?>
		<div id="footerLinks">
			<?php print $left ?>
		</div>
  <?php } ?>
  <div id="footerMessage"><?php print $footer_message ?></div>	
  <div class="clear"><!-- --></div>
  </div>
</div>
</div>
</div>
<?php print $closure ?>
</body>
</html>
