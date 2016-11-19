<html>
<?php
$id     = $_POST['_id'];
$nama   = $_POST['_nama'];
$beli   = $_POST['_hbeli'];
$jual   = $_POST['_hjual'];
$jumlah = $_POST['_jumlah'];
$bc     = $_POST['_bc'];
$kt     = $_POST['_kt'];

?>
<h1>Barang yang diinputkan</h1>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Harga Beli</th>
		<th>Harga Jual</th>
		<th>Jumlah</th>
		<th>Kode Barcode</th>
		<th>Keterangan</th>
	</tr>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $nama; ?></td>
		<td><?php echo $beli; ?></td>
		<td><?php echo $jual ?></td>
		<td><?php echo $jumlah ?></td>	
		<td><?php echo $bc ?></td>
		<td><?php echo $kt ?></td>	
	</tr>				
</table>
</html>