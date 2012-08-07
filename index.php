<!DOCTYPE html>
<head>
	<meta charset='UTF-8' />
	
	<title>View Source Button</title>
	
	<link rel='stylesheet' href='http://css-tricks.com/examples/ViewSourceButton/css/style.css' />
	<link rel='stylesheet' href='http://css-tricks.com/examples/ViewSourceButton/css/prettify.css' />
	<style>
		#source-code { display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.8); }
		#source-code:target { display: block; }
		#source-code pre { padding: 20px; font: 14px/1.6 Monaco, Courier, MonoSpace; margin: 50px auto; background: rgba(0,0,0,0.8); color: white; width: 80%; height: 80%; overflow: auto; }
		#source-code pre a, #source-code pre a span { text-decoration: none; color: #00ccff !important; }
		#x { position: absolute; top: 30px; left: 10%; margin-left: -41px; }
		.button { background: #00ccff; padding: 10px 20px; color: white; text-decoration: none; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; }
	</style>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="http://css-tricks.com/examples/ViewSourceButton/prettify/prettify.js"></script>
	<script>
		$(function() {
			$("<pre />", {
				"html":   '&lt;!DOCTYPE html>\n&lt;html>\n' + 
						$("html")
							.html()
							.replace(/[<>]/g, function(m) { return {'<':'&lt;','>':'&gt;'}[m]})
							.replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1">$1</a>') + 
						'\n&lt;/html>',
				"class": "prettyprint"
			}).appendTo("#source-code");
			
			prettyPrint();
		});
	</script>
</head>

<body>

	<div id="page-wrap">
	
		<h1>Fancy View Source Button</h1>

		<p>Click a link, see the source of the page. Click the X or press the back button to close. This uses jQuery and CSS3. </p>

		<a class="button" href="#source-code" id="view-source">Fancy View Source</a>
		
		<h1>Primitive Version</h1>
		
		<p>Only works in Firefox and Chrome. Maybe others, but definitely not Safari or Opera.</p>
		
		<a class="button" onClick='window.location="view-source:" + window.location.href'>Primitive View Source</a>
		
		<div id="source-code">
			<a href="#" id="x"><img src="http://css-tricks.com/examples/ViewSourceButton/images/x.png" alt="close"></a>
		</div>
	
	</div>
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
		<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-68528-29");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script> 
	
</body>

</html>