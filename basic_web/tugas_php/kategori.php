<!doctype html>
<html lang="en">
  <head>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>hitung BMI</title>
</head>
<body>
    
    <div class="container d-flex justify-content-center">
        <div class="card mt-4" style="width:18rem">
            <div class="card-header">menghitung BMI</div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control form-control-sm" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan (Cm)</label>
                        <input type="number" class="form-control form-control-sm" name="tb" required>
                    </div>
                    <div class="form-group">
                        <label>Berat Badan (Kg)</label>
                        <input type="number" class="form-control form-control-sm" name="bb" required>
                    </div>
                    <button type="submit" name="proses" class="btn btn-primary btn-sm">Hitung</button>
                </form>
            </div>

            <?php 
                if(isset($_GET['proses'])){
                    $tbp = $_GET['tb'];
                    $bb = $_GET['bb'];
                    $name = $_GET['name'];

                    $tb = $tbp/100;
                    $hitung = $bb / ($tb * $tb);
                    if($hitung <= 18.4){
                        echo'
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Hallo, '.$name.'. <br> nilai bmi anda adalah '.number_format($hitung,1).' <br> anda termasuk Kurus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                    }elseif($hitung <= 25){
                        echo'
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Hallo, '.$name.'. <br> nilai bmi anda adalah '.number_format($hitung,1).' <br> anda termasuk Normal
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                    }elseif($hitung <= 27){
                        echo'
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Hallo, '.$name.'. <br> nilai bmi anda adalah '.number_format($hitung,1).' <br> anda termasuk Gemuk
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                    }elseif($hitung > 27 ){
                        echo'
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Hallo, '.$name.'. <br> nilai bmi anda adalah '.number_format($hitung,1).' <br> anda termasuk Obesitas
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                    }
                }
            ?>

        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>

</html>