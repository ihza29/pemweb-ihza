<?php 
$panjang = $_REQUEST['p'];
$lebar = $_REQUEST['l'];
$tinggi = $_REQUEST['t'];

function hitungkelilingalas($panjang, $lebar){
    return $keliling_alas = 2*($panjang+$lebar);
    
}
function hitungluasalas($panjang, $lebar){
    return $luas_alas = $panjang*$lebar;
    
}
function hitungvolume($tinggi, $luas_alas, $keliling_alas){
        return $volume = (2*$luas_alas)+($keliling_alas*$tinggi);
    }
$keliling_alas=hitungkelilingalas($panjang,$lebar);
$luas_alas=hitungluasalas($panjang, $lebar);
$volume = hitungvolume($tinggi, $luas_alas, $keliling_alas);
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <body style="background-image:url('bg.jpg')">
    <div class="container" style="padding: 100px">
        <div class="section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-primary mb-3" style="max-width: 70rem;">
                        <div class="card-header" align="center">WELCOME TO IHZA'S COUNTING</div>
                        <div class="card-body text-hard">
                            <h3 class="card-title" align="center">Menghitung Keliling Alas, Luas Alas dan Volume Persegi Prisma Persegi Panjang</h3>
                            <form class="form-horizontal" method="POST">
                             <!-- panjang -->
                             <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Panjang</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="p" class="form-control" value="<?php echo $panjang; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- lebar -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Lebar</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="l" class="form-control" value="<?php echo $lebar; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tinggi -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tinggi</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="t" class="form-control" value="<?php echo $tinggi; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Button-->
                                <div style="margin-left: 15px">
                                    <button type="submit" class="btn btn-primary">
                                        Hitung!
                                    </button>
                                </div>
                                <br>
                                <!--keliling-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Hasil keliling Alas!</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value=<?php echo round($keliling_alas,2)?> placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Luas-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Hasil Luas Alas!</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value=<?php echo round($luas_alas,2)?> placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Volume-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Hasil Volume!</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value=<?php echo round($volume,2)?> placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </form> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>    
    </body>
</hmtl>