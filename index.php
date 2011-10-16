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
}
else {
	# tropo
	$format = 'html';
}

$feeds = array();
foreach ($resorts as $resort => $url) {
	$feeds[$resort] = new SimplePie_SnowRSS($url, sys_get_temp_dir());  
#	$feeds[$resort]->set_cache_location(sys_get_temp_dir());
	$feeds[$resort]->set_item_class('SimplePie_Item_SnowRSS');
	$feeds[$resort]->init();
	$feeds[$resort]->handle_content_type();
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
if ($format == 'voice') {
	$tropo = new Tropo(); 
	
	if ( ! $_REQUEST['goto'] ) {
		// Welcome prompt.
    	$tropo->say('Welcome to Snow Line');
 
		// Set up options for input.
		$options = array(
			"attempts" => 3, 
			"bargein"  => true, 
			"choices"  => 'Mount Rose, Blueberry Hill, Mount Marley', 
			"name"     => "resort", 
			"timeout"  => 30, 
			"voice"    => $tropo_voice
		);
 
		// Ask the caller for input, pass in options.
		$tropo->ask('Please speak the name of a ski resort', 
			$options
		);
		
		# Tell Tropo what to do when the user has entered input, 
		# or if there's an error. 
		$tropo->on(array(
			"event" => "continue", 
			"next"  => "index.php?f=voice&goto=choice", 
			"say"   => "One moment."
		));
		$tropo->on(array(
			"event" => "error", 
			"next"  => "index.php?f=voice&goto=incomplete"
		));
     
 	}
	elseif ( $_REQUEST['goto'] == 'choice' ) {

#		$result = new Result();
#		$choice = $result->getValue();
$resort = 'mtrose';
		if ( isset($feeds[$resort])) {
			$feed =& $feeds[$resort];
			$conditions = $feed->get_snowrss_resort_name() 
				. ' is currently ';
				
			if ( strtolower($feed->get_snowrss_status()) == 'open' ) {
				$conditions .= ' open';
				if ($close_date = $feed->get_snowrss_scheduled_close_date('F jS') ) {
					$conditions .= ', but is scheduled to close on ' 
						. $close_date;
				}
			}
			elseif ( strtolower($feed->get_snowrss_status()) == 'closed' ) {
				$conditions .= ' closed';
				if ($open_date = $feed->get_snowrss_scheduled_open_date() ) {
					$conditions .= ', but is scheduled to open on ' 
						. $open_date;
				}
			}
			else {
				$conditions .= ' unknown';
			}
			$tropo->say(
				"You chose " . $resort . '. ' . $conditions, 
				array("voice" => $tropo_voice)
			);
		}
		else {
			$tropo->say("I'm confused again.");
		}
		
 	}
	elseif ( $_REQUEST['goto'] == 'error' ) {
		$tropo->say("I'm confused now", array("voice" => $tropo_voice));
	}
 
    $tropo->RenderJson();

	echo("\n");
	exit;
}

?>
