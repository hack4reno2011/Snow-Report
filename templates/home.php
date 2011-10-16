<p>
Welcome to <strong>SnowLine</strong>!  We collect snow conditions from different ski resorts in one place.
</p>

<h2>Resorts</h2>

<? FOREACH ( $feeds AS $feed ): ?>

<div class="resort">
	<h3><?= HtmlSpecialChars($feed->get_snowrss_resort_name()); ?></h3>
	
	<? IF ( strtolower($feed->get_snowrss_status()) == 'open' ): ?>
	<div class="open">
		OPEN
		<? IF ($close_date = $feed->get_snowrss_scheduled_close_date('n/j/Y') ): ?>
		(closing <?= HtmlSpecialChars($close_date); ?>)
		<? ENDIF; ?>
	</div>
	<? ELSEIF ( strtolower($feed->get_snowrss_status()) == 'closed' ): ?>
	<div class="closed">
		Closed
		<? IF ($open_date = $feed->get_snowrss_scheduled_open_date() ): ?>
		(<?= HtmlSpecialChars($open_date); ?>)
		<? ENDIF; ?>
	</div>
	<? ELSE: ?>
	<div class="unknown">
		Unknown
	</div>
	<? ENDIF; ?>
	
	<div class="link">
		<a href="resort.php">More</a>
	</div>
</div>

<? ENDFOREACH; ?>



