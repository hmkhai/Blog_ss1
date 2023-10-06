<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/log.css') }}" />
    <link url="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container" id="container">

        <form class="form-container login-container" method="POST" action="{{ route('signin.post') }}">
            {{ csrf_field() }}

            <div class="form-lg">
                <h1>Đăng ký</h1>

                <div class="form-control2">
                    <input type="text" class="email-2" name="email" placeholder="Email" />
                    <small class="email-error-2"></small>
                    @error('admin_email')
                        {{ $errors->get('admin_email')[0] }}
                    @enderror
                </div>
                <div class="form-control2">
                    <input type="password" class="password-2" name="password" placeholder="Mật khẩu" />
                    <small class="password-error-2"></small>
                    <span></span>
                </div>
                <div class="form-control2">
                    <input type="password" class="password-2" name="confirm_password" placeholder="Xác nhận mật khẩu" />
                    <small class="password-error-2"></small>
                    <span></span>
                </div>
                <button type="submit" value="submit">Đăng ký</button>
            </div>
        </form>
    </div>
    </div>
    </div>
</body>

</html>
