<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>SnowLine</title>
	<style type="text/css">
		
		body {
			margin: 0;
			padding: 0;
			background-color: #ffffff;
			color: #333366;
			font-family: tahoma, verdana, sans-serif;
			font-size: 14pt;
		}
		
		h2, h3, h4 {
			margin: 0.5em 0 0.5em 0;
		}
		
		h4 {
			border: 0 none;
		}
		
		img {
			border: 0 none;
		}
		
		td, th {
			text-align: left;
			vertical-align: top;
		}

		#head {
			margin: 0 0 0.5em 0;
			padding: 1em;
			background-color: #336699;
			color: #FFFFFF;
		}		
		
			#head h1 {
				margin: 0;
				font-size: 32pt;
				font-weight: normal;
			}
			
			#head .tagline {
				font-size: 95%;
			} 
			
		#main {
			padding: 12px;
		}
		
		#foot {
			padding: 24px;
			background-color: #EEEEEE;
			text-align: center;
			border-color: #CCCCCC;
			border-width: 1px 0 0 0;
			border-style: solid;
		}
		
		table.resorts {
			border-spacing: 0;
			border-width: 1px 0 0 0;
			border-color: #999999;
			border-style: solid;
		}
		
			table.resorts td, 
			table.resorts th {
				padding: 0.5em;
				background-color: #EEEEEE;
				border-width: 0 0 1px 0;
				border-color: #999999;
				border-style: solid;
			}
		
			table.resorts tr.even td, 
			table.resorts tr.even th {
				background-color: #ffffff;
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
		
		
	</style>
</head>
<body>

<div id="wrapper">

	<div id="head">
	
		<h1><?= HtmlSpecialChars($title); ?></h1>
		
		<div class="tagline">
			<?= HtmlSpecialChars($tagline); ?>
		</div>
	</div>
	
	<div id="main">
	

<?= $body; ?>

	</div>

	<div id="foot">
		<div id="batline">
			<strong>SnowLine is also available by telephone:</strong><br>
			
			Voice: (775) 387-0237<br>
			Skype Voice: +990009369996149557<br>
		</div>

		<a href="http://creativecommons.org/licenses/by-sa/1.0/"><img src="art/ccLogo.gif" alt="Creative Commons License"></a>
	</div>
	
</div>
    


</body>
</html>
