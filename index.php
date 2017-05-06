<?php
if (!empty($_GET['x'])) {
	if (!empty($_GET['f'])) {
		$fl = fopen($_GET['f'].".html","a+");
	} else {
		$fl = fopen("xss.html","a+");
	}
	$time=date(DATE_RFC2822);
	fwrite($fl, $time." - ".$_GET['x']."<br>");
}
elseif (!empty($_GET['view'])) {
	echo "<h1><a href=\"".$_GET['view'].".html\">show result</a></h1>";
}
else {
	echo "<script>alert(\"XSS,不存在的。\");</script>\n\n\n";
	echo "<!--Usage:<br>\n";
	echo "+ ?x=data, save data to xss.html<br>\n";
	echo "+ ?x=data&f=file, save data to file.html<br>\n";
	echo "+ ?view=file, show a link to view data in file.html<br>\n-->";
}
?>
