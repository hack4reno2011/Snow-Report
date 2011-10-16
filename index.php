<?
require_once('lib/init.php');
require_once('lib/template.php');
require_once('contrib/tropo/tropo.class.php');
require_once('contrib/simplepie/simplepie.php');

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

if ($type == 'html') {
	$Body = new Template('templates/home.php');
	
	$T = new Template('templates/default.php');
	$T->set('title', 'SnowLine');
	$T->set('tagline', 'A SnowRSS Aggregator');
	$T->set('body', $body);
}

?>