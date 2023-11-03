<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Login Admin" name="description">
    <meta content="Login Admin" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets\images\favicon.ico">

    <!-- App css -->
    <link href="../assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="../assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">

</head>

<body class="authentication-page">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-header p-4 bg-primary">
                            <h4 class="text-white text-center mb-0 mt-0">ADMIN</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" id="login" method="POST" class="p-2">

                                <div class="form-group mb-3">
                                    <label for="username">USERNAME</label>
                                    <input class="form-control" type="text" id="username" name="username" placeholder="Tên đăng nhập">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">PASSWORD :</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Mật khẩu">
                                </div>

                                <div class="form-group mb-4">
                                    <div class="checkbox checkbox-success">
                                        <input id="remember" type="checkbox" checked="">
                                        <label for="remember">
                                            Lưu đăng nhập trên thiết bị này
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row text-center mt-4 mb-4">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit" id="btnLogin">Đăng nhập</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
    <!-- Vendor js -->
    <script src="../assets\js\vendor.min.js"></script>

    <!-- App js -->
    <script src="../assets\js\app.min.js"></script>
    <script src="../assets/js/pages/jquery-2.1.1.js"></script>
    <script src="../app-js/login.js"></script>
</body>

</html>