<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin | Petugas </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center"> 
            <div class="col-md-4"> 
                <h4 class="text-center">Form Login Administrator / Petugas</h4>
                <div class="card">
                    <div class="card-header">
                    

                    </div>
                    <div class="card-body">
                        <form action="proses-login-petugas.php" method="post">
                            <div class="form-group mb-2">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> Login </button>
                            </div>
                            <a href="index.php">Login sebagai Siswa </a>
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