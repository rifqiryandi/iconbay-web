<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap" rel="stylesheet">
</head>
<style>
    .login-box{
        width: 100%;
        max-width:1200px;
    }
    .card{
        box-shadow: none;
    }
    body{
        font-family: 'Poppins', sans-serif;
        vertical-align: middle;
    }
    @media screen and (max-width: 767px) {
        .loginimage{
            display: none;
        }
    }
</style>
<body>


</body>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <div class="row d-flex flex-row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-4 loginimage">
                <img src="{{ asset('assets/image/logo/login.png') }}" alt="logo" style="max-width: 90%" />
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <p class="login-box-msg"><img src="{{ asset('assets/image/logo/sinko.png') }}" alt="sinko" style="width: 30%" /></p>
                @if(Session::has('error') || count($errors) > 0 )
                    <div class="alert alert-danger fade show" role="alert">
                        <strong>{{Session::get('error')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif(Session::has('warning'))
                    <div class="alert alert-warning fade show" role="alert">
                        <strong>{{Session::get('error')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form id="form_login" method="POST" action="{{ url('/login') }}">
                    @csrf
                    <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-8">

                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-info btn-block">Masuk</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<script>
// $('#form_login').submit(function(e) {
//     e.preventDefault();
//     var formData = $(this).serialize();
//     $.ajax({
//         url: "{{ url('/login') }}",
//         type: "post",
//         data: formData,
//         success: function(res) {
//             if (res.error == true) {
//                 alert(res.msg);
//             } else {
//                 console.log(res.msg);
//             }
//         },
//         // error: function(res) {
//         //     alert(res.msg);
//         // }
//     })
//     // console.log('test');
// })
</script>
</body>
</html>
