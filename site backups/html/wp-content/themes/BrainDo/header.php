<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="google-site-verification" content="ESTm7R24VkwarM2mTpMT3KkOroy6Yzjo34eqhP2xZC0" />

		<!-- icons & favicons -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">                                              
    
    <?php wp_head(); ?>		
		
		<!--[if lt IE 9]>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie8.css" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
      <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.0.3/es5-shim.min.js"></script>      
    <![endif]-->
    
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js" type="text/javascript"></script>

		<script src="http://use.typekit.net/asl7ops.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
        
	</head>

	<body <?php body_class(); ?>>
  	<script>
      // GTM Base Tag
      function _loadTagManager(dataLayerVar, id) {
        window[dataLayerVar] = window[dataLayerVar] || [];
        window[dataLayerVar].push({
          "gtm.start": new Date().getTime(),
          event: "gtm.js"
        });
        var gtmScript = document.createElement("script");
        gtmScript.async = true;
        gtmScript.src = "//www.googletagmanager.com/gtm.js?id=" + id + "&l=" + dataLayerVar;
        document.getElementsByTagName("head")[0].appendChild(gtmScript);
      }
      if (!window.coreDataLayer) _loadTagManager("coreDataLayer", "GTM-MWCND8");
    </script>
