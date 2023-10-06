<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  {{-- icon --}}
  <link rel="icon" type="image/png" sizes="32x32" href="/kota-lama-banyumas/assets/img/logo_brand.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/kota-lama-banyumas/assets/img/logo_brand.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte/dist/css/adminlte.min.css">
  {{-- my swtyle --}}
  <style>
    .my-button:hover,.my-button:focus{
      background-color: #4446e9;
      border: none;
      color: white;
    }

    .my-button{
      padding: 5px 8px; background-color: white; color: #4446e9; border: 2px solid #4446e9; border-radius:8px;
    }
  </style>
</head>
<body style="background-color: white;" class="hold-transition login-page">
<div class="row d-felx justify-content-center">
  <div class="col-12 col-md-7">
    <img style="width: 100%; height: 55vh; " src="{{ URL::to('lte/image/login.png') }}" alt="">
  </div>
  <div class="col-12 col-md-5 d-flex align-items-center justify-content-center">
    <div class="login-box">
      <div class="login-logo">
        <h1 style="color: #4446e9; font-weight:bold;" class="fw-bold">LOGIN</h1>
      </div>
      <!-- /.login-logo -->
      <div class="card ">
        <div class="card-body login-card-body rounded">
          @error('loginFailed')
          <div class="alert alert-danger">
              <strong>Failed</strong>
              <p>{{ $message }}</p>
          </div>
    
          @enderror
          <form method="post">
              @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Email" name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope "></span>
                </div>
              </div>
            </div>
            @error('email')
                <small style="color: red"><p>{{ $message }}</p></small>
    
            @enderror
    
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
                <small style="color: red"><p>{{ $message }}</p></small>
    
            @enderror
    
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button style="" class="my-button" type="submit">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/adminlte.min.js"></script>
</body>
</html>
