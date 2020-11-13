<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Masuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/iCheck/square/blue.css')}}">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 
 <!-- Google Font -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style type="text/css">
.login-box, .register-box {
    width: 500px;
    margin: 7% auto;
    padding: 15px;
    box-shadow: 0 0 32px -4px rgba(0,0,0,.15);
    border-radius: 10px;
    background: #fff;
}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">

 <!-- /.login-logo -->
 <div class="login-box-body">
 <div class="login-logo">
   <a href="../../index2.html"><b>ITGroup</b>SMKN1LIMBOTO</a>
 </div>
   <p class="login-box-msg">Masuk menggunakan akun yang disediakan</p>
 
   <form class="form-horizontal" method="POST" action="{{ route('login') }}">
     {{ csrf_field() }}
     <div class="form-group has-feedback">
       <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">
       @if ($errors->has('email'))
           <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
           </span>
       @endif
       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
       <input type="password" class="form-control" name="password" placeholder="Password">
       @if ($errors->has('password'))
           <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
           </span>
       @endif
       <span class="glyphicon glyphicon-lock form-control-feedback"></span>
     </div>
     
       <!-- /.col -->
       <div class="col-xs-4">
         <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
       </div>
       <!-- /.col -->
     </div>
   </form>
<!--
 <div class="social-auth-links text-center">
   <p>- OR -</p>
   <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
     Facebook</a>
 </div> -->
   <!-- /.social-auth-links -->
 
   <!-- <a href="#">I forgot my password</a><br> -->
   <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
  <p class="text-center">Belum mendapatkan akun?<a href="https://api.whatsapp.com/send?phone=6285311327490&text=Saya%20ingin%20bertanya%20mengenai%20pemilihan%20ketua%20osis."> Klik disini</a> </p>
 </div>
 <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
 
<!-- jQuery 3 -->
<script src="{{asset('lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('lte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('lte/plugins/iCheck/icheck.min.js')}}"></script>
<script>
 $(function () {
   $('input').iCheck({
     checkboxClass: 'icheckbox_square-blue',
     radioClass: 'iradio_square-blue',
     increaseArea: '20%' /* optional */
   });
 });
</script>
</body>
</html>