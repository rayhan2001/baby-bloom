<!doctype html>
<html lang="en" class="minimal-theme">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('adminAssets') }}/assets/images/favicon-32x32.png" type="image/png" />
  <link href="{{ asset('adminAssets') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('adminAssets') }}/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ asset('adminAssets') }}/assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <title>{{ $data['title'] }}</title>
</head>

<body>
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="{{ asset('adminAssets') }}/assets/images/error/login-img.jpg"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Sign In</h5>
                                <p class="card-text mb-5">See your growth and get consulting support!</p>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control radius-30 ps-5" id="email"
                                                name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Enter
                                                Password</label>
                                            <input type="password" class="form-control radius-30 ps-5"
                                                id="password" name="password" placeholder="Enter Password"
                                                required>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">Sign
                                                    In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('adminAssets') }}/assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <x-toastr />
    
</body>
</html>
