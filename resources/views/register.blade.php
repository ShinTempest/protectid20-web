<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register ProtectId'20</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="register-form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="register-form/css/style.css">
</head>

<body>
    <div class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="card-header">
                    <h2 class="form-title">Daftar Akun</h2>
                </div>
                <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Nama</strong></label>
                        <input type="text" name="name" class="form-input" id="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" id="email" class="form-input" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" id="password" class="form-input" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi Password</strong></label>
                        <input type="password" name="password_confirmation" class="form-input" placeholder="Repeat Password">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" id="submit" class="form-submit">Daftar</button>
                    <p class="loginhere">Apakah anda sudah punya akun ? <a href="{{ route('login') }}">Login disini!</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>