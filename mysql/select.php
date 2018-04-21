<?php

include "connect.php";

$sql = "SELECT id, nama, email, tel, asal "
. "FROM bukutelpon";
$res = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body background="bg.jpg">
	<div class="container">
		<div class="col-md-8 col-sm-12 col-xs-12" style="margin:50px auto">
			<div class="card text-center">
				<div class="card-body">
					<div class="table-responsive" style="margin: 0 auto">
						<h5 class="card-title">Data File Handling</h5>
						<table class="table table-responsive table-bordered">
							<tr class="table-primary">
								<th style="text-align: center">ID</th>
								<th style="text-align: center">Nama</th>
								<th style="text-align: center">Email</th>
								<th style="text-align: center">Phone</th>
								<th style="text-align: center">Asal</th>
								<th colspan=2 style="text-align: center">Action</th>
							</tr>
							<?php while($baris = mysqli_fetch_array($res)) {
								$id = $baris['id'];?>
								<tr>
									<td><?php echo $id?></td>
									<td><?php echo $baris['nama']?></td>
									<td><?php echo $baris['email']?></td>
									<td><?php echo $baris['tel']?></td>
									<td><?php echo $baris['asal']?></td>
									<td><a href="delete.php?id=<?php echo $id;?>">DELETE</a></td>
									<td><a href="edit.php?id=<?php echo $id;?>">EDIT</a></td>
								</tr>
								<?php }?>
							</table>
							<div class="text-center">
								<a href = "form.html" class="btn btn-primary">Tambah Data Baru</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>

	<?php

	mysqli_close($link);

	?>