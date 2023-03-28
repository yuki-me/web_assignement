<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Shops</title>
    <link rel="stylesheet" href="{{ asset('contant/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/style/bootstrap_icon.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/style/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/custome-style/admin/login/login.css') }}">
    <script src="{{ asset('contant/script/bootstrap.js') }}"></script>
    <script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
    <script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
    {{-- <script src="{{ asset('contant/script/jquery.js') }}"></script> --}}
    <script src="{{ asset('contant/style/select2/select2.min.js') }}"></script>
</head>

<body>
    <div class="main">
        <div class="form-wrap position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body rounded">
            <div class="log-box">
                <div id="login">
                    <div class="alert alert-danger" role="alert" id="message_login">
                        Please Check your E-mail or Password again!
                    </div>
                    <h5 class="m-3">Welcome to Online Shops ((ASS))</h5>
                    {{-- <h5 class="m-3 ">Login Now</h5> --}}
                    <form action="" class="m-3">
                        <div class="mb-3">
                            <label for="E-mail" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="E_mail" placeholder="E-mail">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="Password" placeholder="Password">
                        </div>
                    </form>
                    <p class="m-3 forget_pwd"><a href="#">Forget password?</a></p>
                    <button class="btn btn-primary login-btn m-3 float-start" id="btn-login">
                        Login
                    </button>
                </div>
            </div>
        </div>
        <script src="{{ asset('contant/custome-style/admin/login/login.js') }}"></script>
    </div>
</body>

</html>
