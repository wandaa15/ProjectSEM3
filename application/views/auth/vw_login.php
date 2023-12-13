<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('assets/') ?>images/login.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Login</h3>
                <p class="mb-4">Masuk untuk dapat membuat pengaduan</p>
              </div>

              <?= $this->session->set_flashdata('message'); ?>
              <form class='user' action="<?= base_url('Auth')?>" method="POST">
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input name="email" type="text" class="form-control" id="email">
                  <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input name="password" type="password" class="form-control" id="password">
                  <?= form_error('password', '<small class="text-danger pl-3">','</small>');?>
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                </div>  
                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                <br>
                <p style="text-align: center;">Belum punya akun? <a href="<?= base_url('Auth/registrasi') ?>">Buat akun</a></p>
              </form>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>