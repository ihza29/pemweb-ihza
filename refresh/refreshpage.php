<?php 

if (!isset($_COOKIE['count'])) {
    $cookie = 0;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
}
date_default_timezone_set("Asia/Jakarta");
setcookie("date", date("d M Y"));
setcookie("time", date("G:i:s"));
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <div class="section">
            <div class="row" style="margin-top: 200px">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Refresh this Page!</h5>
                            <p class="card-text">Untuk liat jumlah refresh klik tombol dibawah.</p>
                            <a href = "jumlahrefresh.php" target="_BLANK" class="btn btn-primary">Click here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>