<?php
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $city=$_POST["city"];
    $date=$_POST["date"];
    $email=$_POST["email"];
    $Radio=$_POST["Radio"];
    $kerjaan=$_POST["kerjaan"];
    $motto=$_POST["motto"];
    $nama= $_FILES['foto']['name'];
    $temp=$_FILES['foto']['tmp_name'];
    move_uploaded_file($temp, "./filebaru.jpg");
}
else{
    $name=" ";
    $city=" ";
    $date=" ";
    $email=" ";
    $Radio=" ";
    $kerjaan=" ";
    $motto=" ";
    $nama=" ";
    $temp=" ";
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body style="background-image:url('bg.jpg')">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="form.php">Form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Hasil</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" align="center">HASIL FORM DATA ANAK KONTRAKAN</h3>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">TTL</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Tingkat Pendidikan</th>
                                                    <th scope="col">Motivasi Hidup</th>
                                                    <th scope="col">Foto</th>
                                                </tr>
                                            </thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $city.",".$date;?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td><?php echo $Radio; ?></td>
                                                    <td><?php echo $kerjaan; ?></td>
                                                    <td><?php echo $motto; ?></td>
                                                    <td>
                                                        <img src="filebaru.jpg" style="width: 100px">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>