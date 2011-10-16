<h2><?= HtmlSpecialChars($feed->get_snowrss_resort_name()); ?></h2>

<table class="resorts">
<tr>
	<th>Conditions Link</th>
	<td><a href="<?= HtmlSpecialChars($feed->get_snowrss_conditions_link()); ?>"><?= HtmlSpecialChars($feed->get_snowrss_conditions_link()); ?></a></td>
</tr>

<tr>
	<th>Status</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_status()); ?></td>
</tr>

<tr>
	<th>Scheduled Open Date</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_scheduled_open_date('n/j/Y')); ?></td>
</tr>

<tr>
	<th>Scheduled Close Date</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_scheduled_close_date('n/j/Y')); ?></td>
</tr>

<tr>
	<th>Temperature</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_temperature()); ?></td>
</tr>

<tr>
	<th>Winds</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_winds()); ?></td>
</tr>

<tr>
	<th>Conditions</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_weather_conditions()); ?></td>
</tr>

<tr>
	<th>Visibility</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_visibility()); ?></td>
</tr>

<tr>
	<th>Forecast</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_forecast()); ?></td>
</tr>

<tr>
	<th>Base Depth</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_base_depth()); ?></td>
</tr>

<tr>
	<th>New Snow (last 24 hours)</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_new_snow_24()); ?></td>
</tr>

<tr>
	<th>New Snow (last 48 hours)</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_new_snow_48()); ?></td>
</tr>

<tr>
	<th>Snow Storm Total</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_storm_snow_total()); ?></td>
</tr>

<tr>
	<th>Season Snow Total</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_season_snow_total()); ?></td>
</tr>


</table>



