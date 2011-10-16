<?
require_once('lib/init.php');
require_once('lib/template.php');
require_once('contrib/tropo/tropo.class.php');
require_once('contrib/simplepie/simplepie.inc');

if ( $_REQUEST['f'] == 'voice' ) {
	# tropo
	$format = 'voice';
}
elseif ( $_REQUEST['f'] == 'rss' ) {
	# tropo
	$format = 'rss';
}
elseif ( $_REQUEST['f'] == 'html' ) {
	# tropo
	$format = 'html';
}
else {
	# tropo
	$format = 'html';
}

$feeds = array();
for ( $idx = 0; $idx < count($feed); $idx++ ) {
	$feeds[$idx] = new SimplePie($resorts['mtrose']);  
	$feeds[$idx]->handle_content_type();
}


if ($format == 'html') {
	$Body = new Template('templates/home.php');
	$Body->set('feeds', $feeds);
	
	$T = new Template('templates/default.php');
	$T->set('title', 'SnowLine');
	$T->set('tagline', 'A SnowRSS Aggregator');
	$T->set('body', $Body);
	
	echo($T->fetch());
	exit;
}

?>
