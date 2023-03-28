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
    <link rel="stylesheet" href="{{ asset('contant/custome-style/login/loginlogup.css') }}">
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
                    <button class="btn btn-danger signup-btn m-3 float-end" id="signup_form">
                        Sign up <i class="bi bi-chevron-right" style="margin-top: 5px"></i>
                    </button>
                </div>
                <div id="signup">
                    <h5 class="m-3">Welcome to Online Shops ((ASS))</h5>
                    {{-- <h5 class="m-3 ">Login Now</h5> --}}
                    <div class="d-flex row">
                        <form action="" class=" col-6">
                            <div class="mb-3">
                                <label for="LastName" class="form-label">Last Name <span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                            </div>
                            <div class="mb-3">
                                <label for="FirstName" class="form-label">First Name <span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="FirstName" placeholder="First Name">
                            </div>
                            <div class="mb-3 row d-flex">
                                <div class="Gender col-6">
                                    <label for="Gender" class="form-label">Gender <span
                                            style="color: red">*</span></label>
                                    <select name="Gender" id="Gender" class="form-control">
                                        <option value="#" disabled selected hidden>Choose Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                                <div class="DateOfBirth col-6">
                                    <label for="DOB" class="form-label">Date Of Birth <span
                                            style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="DOB">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="E-mail" class="form-label">E-mail <span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="SEmail" placeholder="E-mail">
                            </div>
                            <div class="mb-3 row d-flex">
                                <div class="Password col-6">
                                    <label for="Password" class="form-label">Password <span
                                            style="color: red">*</span></label>
                                    <div class="d-flex">
                                        <input type="password" class="form-control" id="SPassword"
                                            placeholder="Password">
                                        <i class="bi bi-eye" id="SshowPass"></i>
                                        <i class="bi bi-eye-slash" id="ShidePass"></i>
                                    </div>
                                </div>
                                <div class="CPassword col-6">
                                    <label for="Confirmation-Password" class="form-label">Confirm Password <span
                                            style="color: red">*</span></label>
                                    <div class="d-flex">
                                        <input type="password" class="form-control" id="Confirm_Password"
                                            placeholder="Confiem Password">
                                        <i class="bi bi-eye" id="CshowPass"></i>
                                        <i class="bi bi-eye-slash" id="ChidePass"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="" class=" col-6">
                            <div class="mb-3 row">
                                <div class="PhoneNumber col-6">
                                    <label for="PhoneNumber" class="form-label">Phone Number <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="PhoneNumber"
                                        placeholder="Phone Number">
                                </div>
                                <div class="JobTitle col-6">
                                    <label for="JobTitle" class="form-label">Job Title <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="JobTitle"
                                        placeholder="Job Title">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Country" class="form-label">Country <span
                                        style="color: red">*</span></label>
                                <select name="Country" id="Country" class="form-control">
                                    {{-- <option value="#" disabled selected hidden>Choose Country</option> --}}
                                </select>
                                {{-- <select class="form-control" name="Country" id="Country"></select> --}}
                            </div>
                            <div class="mb-3 row d-flex">
                                <div class="Province col-6">
                                    <label for="Province" class="form-label">Province <span
                                            style="color: red">*</span></label>
                                    <select name="Province" id="Province" class="form-control">
                                        <option value="" disabled selected hidden>Choose Province</option>
                                    </select>
                                </div>
                                <div class="District col-6">
                                    <label for="District" class="form-label">District <span
                                            style="color: red">*</span></label>
                                    <select name="District" id="District" class="form-control">
                                        <option value="" disabled selected hidden>Choose District</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row d-flex">
                                <div class="Commnues col-6">
                                    <label for="Commnues" class="form-label">Commnues <span
                                            style="color: red">*</span></label>
                                    <select name="Commnues" id="Commnues" class="form-control">
                                        <option value="" disabled selected hidden>Choose Commnues</option>
                                    </select>
                                </div>
                                <div class="Villages col-6">
                                    <label for="Villages" class="form-label">Villages</label>
                                    <select name="Villages" id="Villages" class="form-control">
                                        <option value="" disabled selected hidden>Choose Villages</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row d-flex">
                                <div class="Street col-6">
                                    <label for="Street" class="form-label">Street</label>
                                    <input type="text" class="form-control" id="Street" placeholder="Street">
                                </div>
                                <div class="House col-6">
                                    <label for="House" class="form-label">House</label>
                                    <input type="text" class="form-control" id="House" placeholder="House">
                                </div>
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-primary login-btn float-start" id="login_form">
                        <i class="bi bi-chevron-left" style="margin-top: 5px"></i> Login
                    </button>
                    <button class="btn btn-danger signup-btn float-end" id="btn-signup">
                        Sign up
                    </button>
                </div>
            </div>
        </div>
        <script src="{{ asset('contant/custome-style/login/loginlogup.js') }}"></script>
    </div>
</body>

</html>
