<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>

<body>
  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="?url=RegisterController/handleRegister" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Đăng ký bằng</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="name" class="form-control form-control-lg" placeholder="Enter your name"
                name="name" />
              <label class="form-label" for="name">Tên tài khoản</label>
              <?php echo (isset($_SESSION['validation_errors']['name']) ? '<div class="text-danger">' . $_SESSION['validation_errors']['name'] . '</div>' : ''); ?>
            </div>
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" name="email" />
              <label class="form-label" for="email">Email</label>
              <?php echo (isset($_SESSION['validation_errors']['email']) ? '<div class="text-danger">' . $_SESSION['validation_errors']['email'] . '</div>' : ''); ?>
            </div>
            <div class="form-outline mb-3">
              <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password"
                name="password" />
              <label class="form-label" for="password">Mật khẩu</label>
              <?php echo (isset($_SESSION['validation_errors']['password']) ? '<div class="text-danger">' . $_SESSION['validation_errors']['password'] . '</div>' : ''); ?>
              <?php echo (isset($_SESSION['user_error']) ? '<div class= "text-danger">' . $_SESSION['user_error'] . '</div>' : '');
              $_SESSION['user_error'] = null; ?>
              <?php if (!empty($registration_success_message)): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $registration_success_message; ?>
                </div>
              <?php endif; ?>
              <?php
              // Clear validation errors after displaying them
              $_SESSION['validation_errors'] = [];
              ?>

            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Ghi nhớ tôi
                </label>
              </div>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản? <a href="?url=LoginController/loadViewLogin"
                  class="link-danger">Đăng nhập</a></p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
</body>

</html>