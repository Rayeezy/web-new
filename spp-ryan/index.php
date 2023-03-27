<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=5">
    <title>Login | Pembayaran Spp </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-md-center"> 
            <div class="col-md-4"> 
                <h4 class="text-center">Form Login Siswa</h4>
                <div class="card">
                    <div class="card-header">
                        

                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" placeholder="Masukan Nisn Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <label>NIS</label>
                                <input type="number" name="nis" class="form-control" placeholder="Masukan Nis Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> Login </button>
                            </div>
                            <a href="index2.php">Login Sebagain Administrator / Petugas </a>
                        </form>
                    </div>

                </div>  
            </div>
        </div>
    </div>
</body>


<script scr="js/bootstrap.bundle.min.js"></script>
</body>
</html>