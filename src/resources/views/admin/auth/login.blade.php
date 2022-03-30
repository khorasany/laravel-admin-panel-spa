<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{'/topbar-rtl/img/fav.png'}}" />
    <title>سامانه انتخابات کانون بازنشستگان</title>
    <link rel="stylesheet" href="{{url('/topbar-rtl/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('/topbar-rtl/css/main.css')}}" />
    <link rel="stylesheet" href="{{url('/topbar-rtl/vendor/notify/notify-flat.css')}}" />
</head>
<body class="authentication">
<div id="messages"></div>
<div class="container">
    <form action="{{route('admin.postlogin')}}" method="POST">
        {{csrf_field()}}
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo"><h4>سامانه انتخابات کانون بازنشستگان</h4></a>
                        <h5>جهت ورود نام کاربری و رمز عبور خود را وارد نمایید</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="نام کاربری" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="رمز عبور" />
                        </div>
                        <div class="actions mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                <label class="custom-control-label" for="remember">مرا به یاد داشته باش</label>
                            </div>
                            <button type="submit" class="btn btn-primary">ورود</button>
                        </div>
                        <div class="forgot-pwd">
                            <a class="link" href="#">فراموشی رمز عبور</a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<script src="{{url('/topbar-rtl/js/jquery.min.js')}}"></script>
<script src="{{url('/topbar-rtl/js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('/topbar-rtl/vendor/notify/notify.js')}}"></script>
<script type="text/javascript">
    @if(isset($_GET['loginFailed']))
    var messages = $('#messages').notify({
        type: 'messages',
        removeIcon: '<i class="icon-close"></i>'
    });
    messages.show("{{$_GET['loginFailed']}}", {
        type: 'danger',
        title: 'خطا<br>',
        icon: '<i class="icon-alert-triangle"></i>'
    });
    @endif
</script>
</body>
</html>
