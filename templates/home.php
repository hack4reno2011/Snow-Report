<p>
Welcome to <strong>SnowLine</strong>!  We collect snow conditions from different ski resorts in one place.
</p>

<h2>Resorts</h2>

<? FOREACH ( $feeds AS $feed ): ?>

<div class="resort">
	<h3><?= HtmlSpecialChars($feed->get_snowrss_resort_name()); ?></h3>
	
	<div class="status">
	<? IF ( strtolower($feed->get_snowrss_status()) == 'open' ): ?>
		<span class="open">OPEN</span>
		<? IF ($close_date = $feed->get_snowrss_scheduled_close_date('n/j/Y') ): ?>
		(closing <?= HtmlSpecialChars($close_date); ?>)
		<? ENDIF; ?>
	<? ELSEIF ( strtolower($feed->get_snowrss_status()) == 'closed' ): ?>
		<span class="closed">OPEN</span>
		<? IF ($open_date = $feed->get_snowrss_scheduled_open_date() ): ?>
		(<?= HtmlSpecialChars($open_date); ?>)
		<? ENDIF; ?>
	<? ELSE: ?>
		<span class="unknown">Unknown</span>
	<? ENDIF; ?>
	</div>
	
	<div class="link">
		<a href="resort.php">More</a>
	</div>
</div>

<? ENDFOREACH; ?>



