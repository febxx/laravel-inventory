<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Boostrap Icon-->
    <link rel="stylesheet" href="assets/modules/bootstrap-icons/bootstrap-icons.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100 justify-content-center">
            <div class="col-8 text-center">
                <div id="auth-right">
                    <img src="{{asset('images/logo-black.png')}}" alt="" class="img-fluid" style="width: 100px;height: 100px;">
                    <h1 class="auth-title">Log in.</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email"
                                class="form-control form-control-xl @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            <div class="form-control-icon">
                                <i class="bi bi-person text-primary"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password"
                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                placeholder="Password" name="password" required autocomplete="current-password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock text-primary"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/js/atrana.js"></script>

    <!-- JS Libraies -->
    <script src="assets/modules/jquery/jquery.min.js"></script>
    <script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/modules/popper/popper.min.js"></script>

    <!-- Template JS File -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
