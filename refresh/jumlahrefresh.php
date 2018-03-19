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
					<div class="card-header">
						Jumlah Refresh
					</div>
					<div class="card-body">
						<h5 class="card-text">Kamu udah refresh sebanyak<?php echo " ".$_COOKIE['count']." "; ?>kali</h5>
					</div>
					<div class="card-footer text-muted">
						Last refresh:<br>
						<?php echo $_COOKIE['date']."<br>"; ?>
						<?php echo $_COOKIE['time']."<br>"; ?>
					</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>