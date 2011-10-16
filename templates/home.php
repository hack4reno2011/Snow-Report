<p>
Welcome to <strong>SnowLine</strong>!  We collect snow conditions from different ski resorts in one place.
</p>


<table class="resorts">

<? $idx = 0; ?>
<? FOREACH ( $feeds AS $resort => $feed ): ?>

<tr<?= ($idx%2)?(' class="even"'):(' class="odd"'); ?>>
	<th><?= HtmlSpecialChars($feed->get_snowrss_resort_name()); ?></th>
	
	<td class="status">
	<? IF ( strtolower($feed->get_snowrss_status()) == 'open' ): ?>
		<span class="open">OPEN</span>
		<? IF ($close_date = $feed->get_snowrss_scheduled_close_date('n/j/Y') ): ?>
		(closing <?= HtmlSpecialChars($close_date); ?>)
		<? ENDIF; ?>
	<? ELSEIF ( strtolower($feed->get_snowrss_status()) == 'closed' ): ?>
		<span class="closed">Closed</span>
		<? IF ($open_date = $feed->get_snowrss_scheduled_open_date('n/j/Y') ): ?>
		(opening <?= HtmlSpecialChars($open_date); ?>)
		<? ENDIF; ?>
	<? ELSE: ?>
		<span class="unknown">Unknown</span>
	<? ENDIF; ?>
	</td>
	
	<td class="link">
		<a href="resort.php?resort=<?= HtmlSpecialChars($resort); ?>">More</a>
	</td>

	<? $idx++; ?>
<? ENDFOREACH; ?>
</table>



