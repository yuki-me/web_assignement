<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('contant/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/style/bootstrap_icon.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/style/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/custome-style/admin/adminmain/adminmain.css') }}">
    <script src="{{ asset('contant/script/bootstrap.js') }}"></script>
    <script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
    <script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
    {{-- <script src="{{ asset('contant/script/jquery.js') }}"></script> --}}
    <script src="{{ asset('contant/style/select2/select2.min.js') }}"></script>
</head>

<body>
    <div class="header">
        <div class="left_header">
            <span>My Logo</span>
        </div>
        <div class="right_header">
            <div class="setting">
                <i class="bi bi-gear"></i>
            </div>
            <div class="logout" onclick="logoutbtn()">
                <i class="bi bi-box-arrow-right"></i>
            </div>
        </div>
    </div>
    <div class="dashboard_body">
        <div class="body_left">
            <ul id="nav-list">
                <li class="nav-list_item">
                    <span><i class="bi bi-folder"></i>Customer</span>
                    <div>
                        <ul>
                            <li class="getTab" id="me"><span><i class="bi bi-file-earmark"></i>Customer</span>
                            </li>
                            {{-- <li class="getTab"><span><i class="bi bi-file-earmark"></i>2</span></li>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>3</span></li>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>4</span></li> --}}
                        </ul>
                    </div>
                </li>
                <li class="nav-list_item">
                    <span><i class="bi bi-folder"></i>Products</span>
                    <div>
                        <ul>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>All_Products</span></li>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>Display</span></li>
                            {{-- <li class="getTab"><span><i class="bi bi-file-earmark"></i>7</span></li>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>8</span></li> --}}
                        </ul>
                    </div>
                </li>
                <li class="nav-list_item">
                    <span><i class="bi bi-folder"></i>Invice</span>
                    <div>
                        <ul>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>Invoice</span></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-list_item">
                    <span><i class="bi bi-folder"></i>Brand</span>
                    <div>
                        <ul>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>Brands</span></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-list_item">
                    <span><i class="bi bi-folder"></i>Promotion</span>
                    <div>
                        <ul>
                            <li class="getTab"><span><i class="bi bi-file-earmark"></i>Promotions</span></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="body_right">
            <div class="work_body">
                {{-- @yield('contect') --}}
                <div class="my_content my_display" id="Order_Content">
                    <iframe src="http://127.0.0.1:8000/admindashboard" title="Order"></iframe>
                </div>
            </div>
            <div class="tabs_body">
                <ul id="my_tabs">
                    <li class="sub_tab" id="Order">
                        <div>
                            <i class="bi bi-box-seam"></i>
                            <span>My Orders</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="{{ asset('contant/custome-style/admin/adminmain/adminmain.js') }}"></script>
</body>

</html>
