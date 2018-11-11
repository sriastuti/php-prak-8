<?php
$alat_perangkat_cpu1 = "Mainboard";
$alat_perangkat_cpu2 = "Processor";
$alat_perangkat_cpu3 = "Random Access Memory";
$alat_perangkat_cpu4 = "Harddisk";

$harga_alat_perangkat_cpu1 = 750000;
$harga_alat_perangkat_cpu2 = 635000;
$harga_alat_perangkat_cpu3 = 160000;
$harga_alat_perangkat_cpu4 = 430000;

$jumlah_alat_perangkat_cpu1 = 2;
$jumlah_alat_perangkat_cpu2 = 5;
$jumlah_alat_perangkat_cpu3 = 1;
$jumlah_alat_perangkat_cpu4 = 3;

$total_alat_perangkat_cpu1 = $jumlah_alat_perangkat_cpu1 *$harga_alat_perangkat_cpu1;
$total_alat_perangkat_cpu2 = $jumlah_alat_perangkat_cpu2 *$harga_alat_perangkat_cpu2;
$total_alat_perangkat_cpu3 = $jumlah_alat_perangkat_cpu3*$harga_alat_perangkat_cpu3;
$total_alat_perangkat_cpu4 = $jumlah_alat_perangkat_cpu4 *$harga_alat_perangkat_cpu4;

$toal_harga = $total_alat_perangkat_cpu1 + 
$total_alat_perangkat_cpu2 + $total_alat_perangkat_cpu3 + $total_alat_perangkat_cpu4

$diskon = 5;

$nilai_diskon = ($diskon * $total_harga)/100;
$toal_harga_bayar = $toal_harga - $nilai_dison;
?> 
<html>
<head>
	<title>Perangkat CPU dan daftar peraltan yang di beli</title>
</head>
<body>
	<center>
		<table border="1" cellspacing="0" cellpadding="3">
			<tr>
				<td colspan="4" align="center" valign="middle">
					<br> Daftar  Pemesanan Peraltan CPU<br>
				</td>
			</tr>
			<tr>
				<td>
					<b>Nama Peralatan</b>
				</td>
				<td>
					<b>Jumlah</b>
				</td>
				<td>
					<b>Harga Satuan</b>
				</td>
				<td>
					<b>Jumlah Harga</b>
				</td>
			</tr>

			<tr>
				<td align="left"><?php echo $alat_perangkat_cpu1; ?></td>
				<td align="right"><?php echo $jumlah_alat_perangkat_cpu1; ?></td>
				<td align="right"><?php echo $harga_alat_perangkat_cpu1; ?></td>
				<td align="right"><?php echo $total_alat_perangkat_cpu1; ?></td>
			</tr>
<tr>
				<td align="left"><?php echo $alat_perangkat_cpu2; ?></td>
				<td align="right"><?php echo $jumlah_alat_perangkat_cpu2; ?></td>
				<td align="right"><?php echo $harga_alat_perangkat_cpu2; ?></td>
				<td align="right"><?php echo $total_alat_perangkat_cpu2; ?></td>
			</tr>
<tr>
				<td align="left"><?php echo $alat_perangkat_cpu3; ?></td>
				<td align="right"><?php echo $jumlah_alat_perangkat_cpu3; ?></td>
				<td align="right"><?php echo $harga_alat_perangkat_cpu3; ?></td>
				<td align="right"><?php echo $total_alat_perangkat_cpu3; ?></td>
			</tr>
<tr>
				<td align="left"><?php echo $alat_perangkat_cpu4; ?></td>
				<td align="right"><?php echo $jumlah_alat_perangkat_cpu4; ?></td>
				<td align="right"><?php echo $harga_alat_perangkat_cpu4; ?></td>
				<td align="right"><?php echo $total_alat_perangkat_cpu4; ?></td>
			</tr>
			<tr>
				<td colspan="3 align="right">Total Harga</td>
				<td align="right"><?php echo $total_harga; ?>
			</tr>
			<tr>
				<td colspan="3 align="right">Diskon <?php echo "($diskon %" ; ?></td>
				<td colspan="3 align="right">?php echo $nilai_diskon ; ?></td>
			</tr>
			<tr>
				<td colspan="3 align="right">Jumlah harus di bayar</td>
				<td align="right"><?php echo $total_harga_dibayar; ?>
			</tr>
		</table>
	</center>
</body>
</html>
?>