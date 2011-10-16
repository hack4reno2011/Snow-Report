<?
require_once('lib/init.php');
require_once('lib/template.php');
require_once('contrib/tropo/tropo.class.php');
require_once('contrib/simplepie/simplepie.inc');
require_once('lib/simplepie_snowrss.php');

if ( isset($_REQUEST['f']) ) {
	if ( $_REQUEST['f'] == 'voice' ) {
		# tropo
		$format = 'voice';
	}
	elseif ( $_REQUEST['f'] == 'html' ) {
		# html
		$format = 'html';
	}
	else {
		# html
		$format = 'html';
	}
}
else {
	# html
	$format = 'html';
}


if ( isset($_REQUEST['resort']) ) {
	$code = $_REQUEST['resort'];
	if ( isset($resorts[$code]) ) {
	}
	else {
		die('unknown resort');
	}
}
else {
	die('Resort code missing');
}

$url = $resorts[$code]['url'];
$feed = new SimplePie_SnowRSS($url, sys_get_temp_dir());  
$feed->set_item_class('SimplePie_Item_SnowRSS');
$feed->init();
$feed->handle_content_type();


if ($format == 'html') {
	if ( $mobile ) {
		$body_tpl = 'templates/resort.php';
		$page_tpl = 'templates/mobile/default.php';
	}
	else {
		$body_tpl = 'templates/resort.php';
		$page_tpl = 'templates/default.php';
	}
	
	$Body = new Template($body_tpl);
	$Body->set('feed', $feed);
	
	$T = new Template($page_tpl);
	$T->set('title', 'SnowLine');
	$T->set('tagline', 'A SnowRSS Aggregator');
	$T->set('body', $Body);
	
	echo($T->fetch());
	exit;
}

?>
