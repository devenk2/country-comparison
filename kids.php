<?php

	function get_code($fname) {
		$site = file_get_contents('https://www.kids-world-travel-guide.com/' . $fname . '-facts.html');
		$s = strpos($site, '<div id="ContentColumn">');
		$e = strrpos($site, "</div><!-- end ContentColumn -->");
		$e += 6;
		$d = $e - $s;
		return substr($site, $s, $d);
	}

	$left = get_code($_GET["dropdownl"])."\n";
	$right = get_code($_GET["dropdownr"])."\n";

?>

<html>
<head>
	<link rel="stylesheet" href="rstyle.css">
	<title>Compare Countries</title>
</head>
<body>

<h1 class="title">Compare Countries</h1>

	<div class="row">
		
			<div class="column" id="left">
				<?php echo $left ?>
			</div>
			<div class="column" id="right">
				 <?php echo $right ?>
			</div>
			
		
	</div>
	
</body>

</html>
