
<h2><?= HtmlSpecialChars($feed->get_snowrss_resort_name()); ?></h2>

<table class="resorts">
<tr class="odd">
	<th>Conditions Link</th>
	<td><a href="<?= HtmlSpecialChars($feed->get_snowrss_conditions_link()); ?>"><?= HtmlSpecialChars($feed->get_snowrss_conditions_link()); ?></a></td>
</tr>

<tr class="even">
	<th>Status</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_status()); ?></td>
</tr>

<tr>
	<th>Scheduled Open Date</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_scheduled_open_date('n/j/Y')); ?></td>
</tr>

<tr class="even">
	<th>Scheduled Close Date</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_scheduled_close_date('n/j/Y')); ?></td>
</tr>

<tr>
	<th>Temperature</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_temperature()); ?></td>
</tr>

<tr class="even">
	<th>Winds</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_winds()); ?></td>
</tr>

<tr>
	<th>Conditions</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_weather_conditions()); ?></td>
</tr>

<tr class="even">
	<th>Visibility</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_visibility()); ?></td>
</tr>

<tr>
	<th>Forecast</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_forecast()); ?></td>
</tr>

<tr class="even">
	<th>Base Depth</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_base_depth()); ?></td>
</tr>

<tr>
	<th>New Snow (last 24 hours)</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_new_snow_24()); ?></td>
</tr>

<tr class="even">
	<th>New Snow (last 48 hours)</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_new_snow_48()); ?></td>
</tr>

<tr>
	<th>Snow Storm Total</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_storm_snow_total()); ?></td>
</tr>

<tr class="even">
	<th>Season Snow Total</th>
	<td><?= HtmlSpecialChars($feed->get_snowrss_season_snow_total()); ?></td>
</tr>

<? $items = $feed->get_lifts(); ?>
<? IF ( count($items) > 0 ): ?>
<tr class="odd">
	<th>Lifts</th>
	<td>
	<? FOREACH ($items as $item): ?>
		<div>
		<?= HtmlSpecialChars($item->get_description()); ?>
		</div>
	<? ENDFOREACH; ?>
</td></tr>

<? ENDIF; ?>

<? $items = $feed->get_runs(); ?>
<? IF ( count($items) > 0 ): ?>
<tr class="odd">
	<th>Runs</th>
	<td>
	<? FOREACH ($items as $item): ?>
		<div>
		<?= HtmlSpecialChars($item->get_description()); ?>
		</div>
	<? ENDFOREACH; ?>
</td></tr>

<? ENDIF; ?>


</table>



