<?php

include "connect.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$asal = $_POST['asal'];
$rowedit = $_POST['row'];

$sql = "UPDATE bukutelpon SET nama='$nama', email='$email', tel='$tel', asal='$asal'
		where id=$rowedit";

$res = mysqli_query($link, $sql);

header('location:select.php');	