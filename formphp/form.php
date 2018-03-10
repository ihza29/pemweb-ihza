<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>

<body style="background-image:url('bg.jpg')">

    </script>
    <body style="background-image:url('bg.jpg')">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dummy.php">Hasil</a>
                                </li>
                            </ul>
                        </div>
                        <!--judul-->
                        <div class="card-body">
                            <h3 class="card-title" align="center">FORM DATA ANAK KONTRAKAN</h3>
                            <br>
                            <form class="form-horizontal" action="dummy.php" method="post" enctype="multipart/form-data">
                            <!--nama-->    
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="inputname" class="col-md-4 control-label">Nama</label>
                                                <div class="col-sm-9">
                                                        <input type="text" name="name" class="form-control" id="inputname" placeholder="Name" aria-required="true" required="">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--ttl-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group" style="margin-left: 15px">
                                            <label for="inputTTL" class="col-md-4 control-label">TTL</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="city" class="form-control" placeholder="Kota" aria-required="true" required="">
                                        </div>
                                        <br>
                                        <div class="col-sm-6">
                                            <input type="date" name="date" class="form-control" placeholder="DD-MM-YYYY" aria-required="true" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--email-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-4 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email@example.com" aria-required="true" required="">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--gender-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div style="margin-left: 15px">
                                            <p>Gender</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Radio" id="Radios1" value="Male" aria-required="true" required="">
                                                <label class="form-check-label" for="Radios1">
                                                    Male
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="Radio" id="Radios2" value="Female" aria-required="true" required="">
                                                <label class="form-check-label" for="Radios2">
                                                    Female
                                                </label>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--kerja-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div style="margin-left: 15px">
                                            <label class="pilihan" for="inlineFormCustomSelectPref">Tingkat Pendidikan</label>
                                            <br>
                                            <select class="custom-select col-sm-9 pilihan" name="kerjaan" id="inlineFormCustomSelectPref" aria-required="true" required="">
                                                <option selected>Pilih...</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="Mahasiswa">Mahasiswa</option>
                                                <option value="Kerja">Kerja</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--Upload gambar-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group" style="margin-left: 15px">
                                            <label for="FormControlFile1">Masukan foto anda</label>
                                                <input type="file" name="foto" class="form-control-file" id="FormControlFile1" aria-required="true" required="">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--motto-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div style="margin-left: 30px">
                                            <div class="form-group">
                                                <label for="Textarea1">Motivasi Hidup</label>
                                                <textarea class="col-sm-9 form-control" name="motto" id="Textarea1" rows="2" aria-required="true" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--checkbox-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div style="margin-left: 30px">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" aria-required="true" required="">
                                                <label class="custom-control-label" for="customCheck1">Apakah data anda sudah benar?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--button-->
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9" >
                                        <div style="margin-left: 30px; margin-bottom: 30px; margin-top: 30px">
                                            <button type="submit" name="submit" class="btn btn-primary">
                                                Submit
                                            </button>
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
                                        
</body>

</html>