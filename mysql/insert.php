<?php

include "connect.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$asal = $_POST['asal'];

$sql = "INSERT INTO bukutelpon (nama, email, tel, asal) "
."VALUES ('$nama', '$email', '$tel', '$asal')";

//eksekusi query SQL
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
		<div class="row" style="margin-top: 100px">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card text-center">
				<?php if($res) { ?>
					<div class="card-body">
						<h5 class="card-title">Data berhasil disimpan!</h5>
						<p class="card-text">Untuk melihat data klik tombol dibawah.</p>
						<a href = "select.php" class="btn btn-primary">Click here!</a>
					</div>
				</div>
				<?php } else {?>
				<div class="card text-center">
					<div class="card-body">
						<h5 class="card-title">Terjadi Error:</h5>
						<p class="card-text"><?php echo mysqli_error($link);?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>

<?php
//tutup koneksi MYSQL
mysqli_close($link);
