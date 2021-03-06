<?php

include "connect.php";

$sql = "SELECT id, nama, email, tel, asal "
. "FROM bukutelpon";
$res = mysqli_query($link, $sql);

$rowedit = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body background="bg.jpg">
    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card text-center">
                    <div class="card-header">Database Handling</div>
                    <div class="card-body">
                    <?php while($baris = mysqli_fetch_array($res)) {
                        $id = $baris['id'];
                        if ($rowedit == $id) {?>
                        <form action="update.php" method="POST">
                            <div class="form-group row">
                                <label for="inputname" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="inputname" placeholder="Nama" value="<?php echo $baris['nama']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email" value="<?php echo $baris['email']?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtel" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="phone" class="form-control" id="inputtel" placeholder="Phone" value="<?php echo $baris['tel'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputasal" class="col-sm-2 col-form-label">Asal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="asal" class="form-control" id="inputasal" placeholder="Asal" value="<?php echo $baris['asal'] ?>" required>
                                </div>
                            </div>
                            <input type="hidden" name="row" value="<?php echo "$rowedit"?>">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" name="submit" type="submit" value="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    <?php }}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>