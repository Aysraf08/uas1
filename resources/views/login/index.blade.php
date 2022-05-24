<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from jobie.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:53:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - Laporan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="xhtml/images/favicon.png">
    <link href="xhtml/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="text-center mb-4 text-white">Laporan Pekerjaan</h2>
                                    @if ($message = Session::get('error'))
                                        <div style="color: red;">{{ $message }}</div>
                                    @endif
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="User" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="xhtml/vendor/global/global.min.js"></script>
	<script src="xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="xhtml/js/custom.min.js"></script>
    <script src="xhtml/js/deznav-init.js"></script>

</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:53:49 GMT -->
</html>