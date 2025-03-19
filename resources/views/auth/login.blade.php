<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dashboard">
    <meta name="author" content="Dashboard">
    <!-- TITLE -->
    <title>Login</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/brand/favicon.ico') }}" />
    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/skin-modes.css') }}" rel="stylesheet" />
    <!-- SIDE-MENU CSS -->
    <link href="{{ asset('assets/admin/css/sidemenu.css') }}" rel="stylesheet" id="sidemenu-theme">
    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/admin/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />
    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/admin/plugins/icons/icons.css') }}" rel="stylesheet" />

    <!-- SINGLE-PAGE CSS -->
    <link href="{{ asset('assets/admin/plugins/single-page/css/main.css') }}" rel="stylesheet" type="text/css">
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/admin/colors/color1.css') }}" />
    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('assets/admin/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/switcher/demo.css') }}" rel="stylesheet" />
</head>

<body class="error-bg">
    <div class="login-img">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->

                <div class="container-login100">
                    <div class="wrap-login100 p-0 col-md-4 mx-auto">
                        <div class="col col-login mx-auto mt-4 text-center">
                            <div class="text-center">
                                <img src="{{asset($web->logolight)}}"
                                class="header-brand-img" alt="" style="width: 100px; height: 80px;">    
                            </div>

                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('login') }}" style="width: 100%;"
                                class="login100-form validate-form">
                                @csrf
                                <span class="login100-form-title">
                                    Login
                                </span>
                                <div class="wrap-input100 validate-input"
                                    data-bs-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="email" value="{{ old('email') }}"
                                        placeholder="Email">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                    </span>
                                    @if ($errors->has('email'))
                                        <code class="text-danger">{{ $errors->first('email') }}</code>
                                    @endif
                                </div>
                                <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                    <input class="input100" type="password" name="password" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                        <code class="text-danger">{{ $errors->first('password') }}</code>
                                    @endif
                                </div>

                                <div class="container-login100-form-btn">

                                    <button type="submit" class="login100-form-btn btn-primary">
                                        Login
                                    </button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

        <!-- JQUERY JS -->
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- SPARKLINE JS -->
        <script src="{{ asset('assets/admin/js/jquery.sparkline.min.js') }}"></script>
        <!-- CHART-CIRCLE JS -->
        <script src="{{ asset('assets/admin/js/circle-progress.min.js') }}"></script>
        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('assets/admin/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
        <!-- INPUT MASK JS -->
        <script src="{{ asset('assets/admin/plugins/input-mask/jquery.mask.min.js') }}"></script>
        <!-- CUSTOM JS-->
        <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
        <!-- Switcher js -->
        <script src="{{ asset('assets/admin/switcher/js/switcher.js') }}"></script>

    </div>

</body>

</html>
