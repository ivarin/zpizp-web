<?php
	$schedule_source = "source.txt";
	if (is_file($schedule_source)) {
		$out = file($schedule_source);
	}
	else {
		$out = "- \ -";
	}
?>


<html>
<head>
<style>
	table, th, td {
		border: 1px solid black;
	}
	
	.thead {
		background-color: yellow;
	}
</style>
<meta charset="utf-8">
<meta name="student" content="ivan kanivets">
<title>lab5. reading from file</title>
</head>

<h2 style="color: gray;">schedule</h2>
<table  cellspacing="0"; cellpadding="12">
<tr class="thead">
	<th>Дата</th>
	<th>Час</th>
	<th>Подiя</th>
</tr>
<?php

//echo var_dump($out);
echo "<br>";


foreach ($out as $line) {
	echo "<tr>";
	foreach (explode("/", $line) as $values) {
		echo "<td>$values</td>";
	}
	echo "</tr>";
}



?>
</table>
</html>