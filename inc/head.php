<head>
	<?php require_once ('config.php')?>
	<meta charset="UTF-8">
	<title><?php echo $site_name ;?></title>
	<meta name="viewport"				content="width=device-width,initial-scale=1,maximum-scale=1">	
	<meta name="description"			content="<?php echo "$site_descr" ;?>" />
	<meta property="og:type"			content="article" />
	<meta property="og:title"			content="Internet Speed Test" />
	<meta property="og:description"		content="<?php echo "$site_descr" ;?>" />
	<meta property="og:image"			content="assets/fbbanner.png" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >	
	<link rel="icon" type="image/png" href="assets/logo-w.png" />
	<link rel="stylesheet" href="css/style.css"> 	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics_tracking ;?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', '<?php echo $analytics_tracking ;?>');
	</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "<?php echo "$adsense_validation" ;?>",
			enable_page_level_ads: true
		});
	</script>
	<script>
		function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}
	</script>
</head>
<div class="intro">
	<a href="./"><img width="120px" src="assets/logo-b.png" /></a>
	<h1><?php echo $site_name ;?></h1>
	<p><?php echo "$site_descr" ;?></p>
</div>