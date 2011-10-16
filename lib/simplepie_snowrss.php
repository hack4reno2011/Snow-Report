<?
if (!defined('SIMPLEPIE_NAMESPACE_SNOWRSS')) {
	define('SIMPLEPIE_NAMESPACE_SNOWRSS', 'http://snowline.orchestra.io/snowrss.html');
}

class SimplePie_SnowRSS extends SimplePie {

	function get_snowrss_resort_name () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'resortName');
		return $data[0]['data'];
	}

	function get_snowrss_conditions_link () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'conditionsLink');
		return $data[0]['data'];
	}

	function get_snowrss_status () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Status');
		return $data[0]['data'];
	}

	function get_snowrss_scheduled_open_date ($date_format = 'j F Y, g:i a') {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'scheduledOpenDate');
		if (! empty($data[0]['data']) ) {
			$parser = SimplePie_Parse_Date::get();
			$date_parsed = $parser->parse($data[0]['data']);
		}
		else {
			$date_parsed = null;
		}
		if ($date_parsed) {
			$date_format = (string) $date_format;
			switch ($date_format)
			{
				case '':
					return $this->sanitize($date_parsed, SIMPLEPIE_CONSTRUCT_TEXT);

				case 'U':
					return $date_parsed;

				default:
					return date($date_format, $date_parsed);
			}
		}
		else {
			return null;
		}
	}

	function get_snowrss_scheduled_close_date ($date_format = 'j F Y, g:i a') {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'scheduledCloseDate');
		if (! empty($data[0]['data']) ) {
			$parser = SimplePie_Parse_Date::get();
			$date_parsed = $parser->parse($data[0]['data']);
		}
		else {
			$date_parsed = null;
		}
		if ($date_parsed) {
			$date_format = (string) $date_format;
			switch ($date_format)
			{
				case '':
					return $this->sanitize($date_parsed, SIMPLEPIE_CONSTRUCT_TEXT);

				case 'U':
					return $date_parsed;

				default:
					return date($date_format, $date_parsed);
			}
		}
		else {
			return null;
		}
	}

	function get_snowrss_temperature () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Temperature');
		return $data[0]['data'];
	}

	function get_snowrss_winds () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Winds');
		return $data[0]['data'];
	}

	function get_snowrss_weather_conditions () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'weatherConditions');
		return $data[0]['data'];
	}

	function get_snowrss_visibility () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Visibility');
		return $data[0]['data'];
	}

	function get_snowrss_forecast () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Forecast');
		return $data[0]['data'];
	}

	function get_snowrss_base_depth () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'baseDepth');
		return $data[0]['data'];
	}

	function get_snowrss_new_snow_24 () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'newSnow24');
		return $data[0]['data'];
	}

	function get_snowrss_new_snow_48 () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'newSnow48');
		return $data[0]['data'];
	}

	function get_snowrss_storm_snow_total () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'stormSnowTotal');
		return $data[0]['data'];
	}

	function get_snowrss_season_snow_total () {
		$data = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'seasonSnowTotal');
		return $data[0]['data'];
	}
	
	function get_lifts () {
		$lifts = array();
		$items = $this->get_items();
		
		foreach ($items as $item) {
			$type = $item->get_snowrss_type();
			if ( $type == 'lift') {
				$lifts[] = $item;
			}
		}
		
		return $lifts;
	}

	function get_runs () {
		$runs = array();
		$items = $this->get_items();
		
		foreach ($items as $item) {
			$type = $item->get_snowrss_type();
			if ( $type == 'run') {
				$runs[] = $item;
			}
		}
		
		return $runs;
	}

}

class SimplePie_Item_SnowRSS extends SimplePie_Item {

	function get_snowrss_type () {
		$data = $this->get_item_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Type');
		return $data[0]['data'];
	}

	function get_snowrss_status () {
		$data = $this->get_item_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Status');
		return $data[0]['data'];
	}

	function get_snowrss_lift_type () {
		$data = $this->get_item_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'liftType');
		return $data[0]['data'];
	}

	function get_snowrss_conditions () {
		$data = $this->get_item_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Conditions');
		return $data[0]['data'];
	}

	function get_snowrss_difficulty () {
		$data = $this->get_item_tags(SIMPLEPIE_NAMESPACE_SNOWRSS, 'Difficulty');
		return $data[0]['data'];
	}


}
 

?>