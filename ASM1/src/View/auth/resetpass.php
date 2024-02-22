<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
          <form method="POST" action="?url=ForgotPassController/handleResetPass">


            <div class="divider d-flex align-items-center my-4">
              <h2 class="text-center fw-bold mx-3 mb-0">Quên mật khẩu</h2>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input name="new_password" type="password" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nhập mã xác nhận của bạn" />
              <label class="form-label" for="form3Example3">Nhap mat khau moi </label>
            </div>
            <div class="form-outline mb-4">
              <input name="confirm_password" type="password" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nhập mã xác nhận của bạn" />
              <label class="form-label" for="form3Example3">Nhap lai mat khau moi </label>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Gui</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Quay về <a href="?url=RegisterController" class="link-danger">Đăng
                  nhập</a></p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  </section>
</body>

</html>