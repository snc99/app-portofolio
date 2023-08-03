<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/pageLogin/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="{{ asset('assets') }}/pageLogin/img/wave.png">
    <div class="container">
        {{-- @include('layouts/components.alert') --}}
        <div class="img">
            <img src="{{ asset('assets') }}/pageLogin/img/bg.svg">
        </div>
        <div class="login-content">
            <form action="auth/login" method="post">
                @csrf
                <img src="{{ asset('assets') }}/pageLogin/img/avatar.svg">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username" value="{{ Session::get('username') }}">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login" name="login">
                <button type="button" class="btn" onclick="window.location='{{ '/' }}'">Back</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets') }}/pageLogin/js/main.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @include('component/toastr')

</body>

</html>
