<?

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
ini_set('display_errors', 'Off');

$resorts = array(
	'mtrose'      => array(
		'url'  => 'http://snowrss.home.internal.org/mtrose.rss', 
		'name' => 'Mount Rose'
	), 
	'blueberry'   => array(
		'url'  => 'http://snowrss.home.internal.org/blueberryhill.rss', 
		'name' => 'Blueberry Hill'
	), 
	'mountmarley' => array(
		'url'  => 'http://snowrss.home.internal.org/mountmarley.rss', 
		'name' => 'Mount Marley'
	)
);

$tropo_voice = "Kate";


?>