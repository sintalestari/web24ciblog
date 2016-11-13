<!DOCTYPE html>
<html>
<head>
	<title>KUMPULAN USER</title>
</head>
<body>
<center><h1>KUMPULAN USER</h1></center>

<?php echo anchor('user/tambah', 'Tambah Data');
?>

<table style="margin:20px auto;"
border="1">

<tr>
<th>id_user</th>	
<th>nama</th>
<th>email</th>
</tr>


<?php
	foreach ($user as $u){
?>
	
<tr>
<td><?php echo $u->id_user ?></td>
<td><?php echo $u->nama ?></td>
<td><?php echo $u->email ?></td>
<td>
	<?php echo anchor_'user/edit/'.$u->id_user,'Edit'); ?>
	<?php echo anchor_'user/hapus/'.$u->id_user,'Hapus'); ?>
	</td>
</tr>
<?php  } ?>

</table>

</body>
</html>