<!DOCTYPE html>
<html>
<head>
<title>tika widya o</title>
</head>
<body>
	<?php
$angka = array(
    array(5,10,15,20,25,30),
    array(6,11,16,21,26,31),
    array(7,12,17,22,27,32),
    array(8,13,18,23,28,33),
	array(9,14,19,24,29,34),
	array(10,15,20,25,30,35),
	array(11,16,21,26,31,36),
	array(12,17,22,27,32,37),
	array(13,18,23,28,33,38),
	array(14,19,24,29,34,39)
);
echo "<table>";
	for ($row = 0; $row <  10; $row++) {
		echo "<tr>";
		for ($col = 0; $col <  5; $col++) {
			echo "<td>".$angka[$row][$col]."</td>";
		}
		echo "</tr>";
	};
	for ($x = 5; $x <= 100; $x++){
		echo '<tr>';
		for($y = $x; $y <= $x+4995; $y = $y + 5){
			echo "<td/>$y</td>";
		}
		echo '</tr>';
	};
	echo "</table>";
?>
</body>
</html>