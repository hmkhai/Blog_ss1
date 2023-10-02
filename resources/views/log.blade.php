<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{asset('frontend/css/log.css')}}" />
    <link
     url="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container register-container">



        <form>

          <h1>Đăng kí ngay</h1>
          <div class="form-control">
            <input type="text" id="username" placeholder="Tên đăng nhập" />
            <small id="username-error"></small>
            <span></span>
          </div>
          <div class="form-control">
            <input type="email" id="email" placeholder="Email" />
            <small id="email-error"></small>
            <span></span>
          </div>
          <div class="form-control">
            <input type="password" id="password" placeholder="Mật khẩu" />
            <small id="password-error"></small>
            <span></span>
          </div>
          <button type="submit" value="submit">Đăng kí</button>
          <span>Hoặc bắt đầu bằng</span></span>
          <div class="social-container">
            <a href="#" class="social"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
            <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
          </div>
        </form>
      </div>

      <form class="form-container login-container" method="POST" action="{{ URL::to('/admin_layout') }}">
        {{csrf_field()}}


        <div >
            <form class="form-lg">
              <h1>Đăng nhập</h1>

              <?php
              $message = Session::get('message');
              if($message){
                  echo $message;
                  Session::put('message',null);
              }
              ?>

            <div class="form-control2">
                <input type="text" class="email-2" name="admin_email" placeholder="Email" />
                <small class="email-error-2"></small>
                <span></span>
              </div>
              <div class="form-control2">
                <input type="password" class="password-2" name="admin_password" placeholder="Mật khẩu" />
                <small class="password-error-2"></small>
                <span></span>
              </div>

              <div class="content">
                <div class="checkbox">
                  <input type="checkbox" name="checkbox" id="checkbox" />
                  <label for="">Ghi nhớ đăng nhập</label>
                </div>
                <div class="pass-link">
                  <a href="#">Quên mật khẩu</a>
                </div>
              </div>
              <button type="submit" value="submit">Đăng nhập</button>
              <span>Hoặc đăng nhập bằng</span>
              <div class="social-container">
                <a href="#" class="social"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
                <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
              </div>
            </form>
          </div>

          <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                <h1 class="title">
                  Chào mừng <br />
                  bạn
                </h1>
                <p>Nếu bạn đã có tài khoản, hãy tham gia cùng chúng tôi và bắt đầu hành trình của bạn</p>
                <button class="ghost" id="login">
                  Đăng nhập
                  <i class="fa-solid fa-arrow-left"></i>
                </button>
              </div>
</form>

          <div class="overlay-panel overlay-right">
            <h1 class="title">
              Bắt đầu hành trình của bạn <br />
              ngay bây giờ
            </h1>
            <p>
                Nếu bạn chưa có tài khoản, hãy tham gia cùng chúng tôi và bắt đầu hành trình của bạn
            </p>
            <button class="ghost" id="register">
              Đăng kí
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
    <script src="{{asset('frontend/js/log.js')}}"></script>
</html>
