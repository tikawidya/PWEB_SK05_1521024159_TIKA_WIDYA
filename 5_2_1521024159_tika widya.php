<!DOCTYPE html>
<html>
<head>
	<title>tika widya o </title>
	<style type="text/css">
		table{
			margin-left: 37%;
			margin-top: 7%;
		}
	</style>
</head>
<body>
	<?php
		$barang = array 
			(
				array(1001,"Sabun Lifebuoy","Rp.  1.500,-"),
				array(1002,"Permen Blaster","Rp.  5.600,-"),
				array(1003,"Pasta Gigi Pepsodent","Rp.  4.560,-"),
				array(1004,"Madu Arbain","Rp. 30.000,-"),
				array(1005,"Kecap ABC","Rp.  7.250,-"),
				array(1006,"Saus Tomat ABC","Rp.  6.700,-"),
				array(1007,"Gula Gulaku","Rp.  8.900,-"),
				array(1008,"Rinso","Rp.  7.100,-"),
				array(1009,"Super Pel","Rp.  6.450,-"),
				array(1010,"Permen Tango","Rp.  5.600,-")
			);
		echo "<table>";
		echo "<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Harga Satuan</th>
			</tr>";
		echo "<tr>
				<td>".$barang[0][0]."</td>
				<td>".$barang[0][1]."</td>
				<td>".$barang[0][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[1][0]."</td>
				<td>".$barang[1][1]."</td>
				<td>".$barang[1][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[2][0]."</td>
				<td>".$barang[2][1]."</td>
				<td>".$barang[2][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[3][0]."</td>
				<td>".$barang[3][1]."</td>
				<td>".$barang[3][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[4][0]."</td>
				<td>".$barang[4][1]."</td>
				<td>".$barang[4][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[5][0]."</td>
				<td>".$barang[5][1]."</td>
				<td>".$barang[5][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[6][0]."</td>
				<td>".$barang[6][1]."</td>
				<td>".$barang[6][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[7][0]."</td>
				<td>".$barang[7][1]."</td>
				<td>".$barang[7][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[8][0]."</td>
				<td>".$barang[8][1]."</td>
				<td>".$barang[8][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$barang[9][0]."</td>
				<td>".$barang[9][1]."</td>
				<td>".$barang[9][2]."</td>
			</tr>";
		echo "</table>";
	?>
</body>
</html>
