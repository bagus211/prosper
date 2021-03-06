<? include_once($_SERVER['DOCUMENT_ROOT'] . '/202-config/connect.php'); 

AUTH::require_user();

template_top($server_row,'Get Pixel and Post Back URLs',NULL,NULL,NULL);  ?>

<div id="info">
	<h2>Get your PIXEL or Post Back URL</h2>
	 By placing a pixel on the advertiser page, everytime you get a conversion it will fire a tracking pixel and update your subids automatically. <br/>
	 Watch Conversions in REAL-TIME in your SPY view!  The Post Back URL is supported by some networks, this will automatically post back to <br/>
	 T202 when you get a lead and again, automatically update your subids. <br/>
</div>



<? 

//the pixel
$unSecuredPixel = '<img height="1" width="1" border="0" style="display: none;" src="http://'. $_SERVER['SERVER_NAME'].'/tracking202/static/gpx.php"/>';
$securedPixel = '<img height="1" width="1" border="0" style="display: none;" src="https://'. $_SERVER['SERVER_NAME'].'/tracking202/static/gpx.php"/>';


//post back url
$unSecuredPostBackUrl = 'http://'.$_SERVER['SERVER_NAME'].'/tracking202/static/gpb.php?subid=';
$securedPostBackUrl = 'https://'.$_SERVER['SERVER_NAME'].'/tracking202/static/gpb.php?subid=';

echo '<style> textarea.code_snippet { width: 100%; height: 40px; } </style>';

printf('<h2>Global Tracking Pixel</h2>
              Here is the tracking pixel for your t202 account, give this to the network or advertiser you are working with and ask them to place it on the confirmation page.
              With the pixel installed on the confirmation page, everytime you get a lead or sale, it will fire the pixel and update your leads automatically when this pixel fires.
              If you are confused about which pixel you need, the secured or the unsecured, please contact the advertiser or network and they should be able to tell you which one you\'ll need.<br/><br/>
             
              <strong>Unsecured http:// link</strong><br/>
              <textarea class="code_snippet">%s</textarea>
              <strong>Secured SSL https:// link <font style="color: #900;">(this https:// url will only work if your domain has an SSL installed)</font></strong><br/>
              <textarea class="code_snippet">%s</textarea><br/>
              ', $unSecuredPixel, $securedPixel);


printf('<h2>Global Post Back URL</h2>
              If the network you work with supports post back URLS, you can use this URL.  The network should use this post-back URL and call it when a lead or sale takes place
              and they should put the SUBID at the end of the url.  When the post back url is called it should automatically update your subids for you.
              If you are confused about which link you need, the secured or the unsecured, please contact the advertiser or network and they should be able to tell you which one you\'ll need.<br/><br/>
              If the affiliate network you are working with can only pass the ?sid= variable, you can replace ?subid= with ?sid= <br/><br/>
              
              <strong>Unsecured http:// link</strong><br/>
              <textarea class="code_snippet">%s</textarea>
              <strong>Secured SSL https:// link <font style="color: #900;">(this https:// url will only work if your domain has an SSL installed)</font></strong><br/>
              <textarea class="code_snippet">%s</textarea><br/>
              ', $unSecuredPostBackUrl, $securedPostBackUrl);

 
template_bottom($server_row);