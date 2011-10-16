<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>SnowLine</title>
	<link href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<style stype="text/css">
		
		td, th {
			text-align: left;
			vertical-align: top;
		}

		.tagline {
			text-align: center;
		}
		
		.open {
			color: #00DD33;
			font-weight: bold;
		}
		
		.closed {
			color: #990000;
		}
		
		.unknown {
			color: #FFCC33;
		}
		
		#batline {
			padding: 12px;
		}
		
	</style>
</head>
<body>


<div id="container" data-role="page" data-theme="b">

	<div id="head" data-role="header" data-theme="b">
	
		<h1><?= HtmlSpecialChars($title); ?></h1>
		
		<div class="tagline">
			<?= HtmlSpecialChars($tagline); ?>
		</div>
	</div>
	
	<div id="main" data-role="content" data-theme="b">
<?= $body; ?>
	</div>
	
	<div id="foot" data-role="footer" data-theme="a">
		<div id="batline">
			<strong>SnowLine is also available by telephone:</strong><br>
			
			Voice: (775) 387-0237<br>
			Skype Voice: +990009369996149557<br>
		</div>

	</div>

</div>


</body>
</html>
