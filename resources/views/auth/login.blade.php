<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Нэвтрэх</title>

    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="admin/css/animate.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Тавтай морил IN+</h2>

                <p>
                    vipcar.mn вэб сайтад зориулан бүтээгдсэн админ удирдлага бөгөөд зөвхөн уг сайтын эзэмшигчдэд зориулагдсан болно.
                </p>

                <p>
                    Админ самбар нь inspinia-г ашиглан laravel систем дээр хөгжүүлэгдсэн.
                </p>

                <p>
                    Системд хууль бусаар нэвтрэх гэж оролдох нэвтэрсэн тохиолдолд хуулын хариуцлага хүлээх болохыг анхаарна уу.
                </p>

                <p>
                    <small>Зохиогчийн эрхээр сайт нь хамгаалагдсан боловч зохиогчийн зөвшөөрлөөр ашиглах боломжтой.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Нэвтрэх</button>

                        <a href="{{ url('/password/reset') }}">
                            <small>Нууц үг мартсан?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Та бүртгэлтэй юу?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ url('register') }}">Шинээр бүртгүүлэх</a>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                www.vipcar.mn
            </div>
            <div class="col-md-6 text-right">
               <small>© 2016</small>
            </div>
        </div>
    </div>

</body>

</html>

