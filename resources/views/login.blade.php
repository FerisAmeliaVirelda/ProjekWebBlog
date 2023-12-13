<!DOCTYPE html>
<html>

<head>
    <title>AmolTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
        alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
        ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Main Content -->
    <div class="container-fluid ">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info bg-body-tertiary">
                <a href="/" class="btn-close" aria-label="Close"></a>
                <center>
                    <img src="img/logo.png" style="width: 80px;" alt="logo">
                </center>
                <h2 class="logo text-black"><span class="text-primary">Amol</span>Tech</h2>
                {{-- <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
				<h4 class="company_title">Your Company Logo</h4> --}}
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid ">
                    <div class="row">
                        <h2 class="text-primary">Log In</h2>
                    </div>
                    <div class="row">
                        <form action="{{ route('login.store') }}" method="POST">
                            @csrf
                            {{-- <form control="" class="form-group"> --}}
                            <div class="row">
                                <input type="email" name="email" id="email" class="form__input"
                                    placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="password" id="password" class="form__input"
                                    placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <input type="checkbox" name="remember_me" id="remember_me" class="">
                                <label for="remember_me">Remember Me!</label>
                            </div>
                            <div class="row">
                                <center>
                                    {{-- <input type="submit" value="Login" class="btn"> --}}
                                    <button type="submit" class="btn">Login</button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <p>Don't have an account? <a href="/register">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid text-center footer">
        Copyright &hearts; by 
        <a class="navbar-brand"><span class="text-primary">Amol</span>Tech</a>
    </div>

    {{-- <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Login</h1>
                </div>
                <div class="card-body">
                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</body>

</html>
