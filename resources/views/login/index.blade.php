<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('public/logo_rs.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('public/login-form/css/style.css') }}">

</head>



<body class="img js-fullheight" style="background-image: url(public/login-form/images/31.jpeg);">

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <img src="{{ asset('public/img/semerus.png') }}" width="120" height="120" class="d-inline-block align-top ml-2 mr-2" alt="">
                    <h3 class="text-center" style="color: #fff;">SiRAMAH</h3>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="login-wrap p-0">
                        <form action="{{ route('login') }}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" value="{{ old('username') }}" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
                                @if (session()->has('loginError'))
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ session('loginError') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('public/login-form/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/login-form/js/popper.js') }}"></script>
    <script src="{{ asset('public/login-form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/login-form/js/main.js') }}"></script>
    <script>
        $(".preloader2").fadeOut();
        $(document).ready(function() {
            $('#unit').autocomplete({
                source: "<?= route('cariunit') ?>",
                select: function(event, ui) {
                    $('[id="unit"]').val(ui.item.label);
                    $('[id="kodeunit"]').val(ui.item.kode);
                }
            });
        });
    </script>

</body>

</html>