
  
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <form method="post" action="<?php echo base_url('customer_signin'); ?>">
                  <h1>Customer Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>

                  <?php if ($this->session->flashdata('error')): ?>
                      <div class="alert alert-danger">
                          <?php echo $this->session->flashdata('error'); ?>
                      </div>
                  <?php endif; ?>

                  <div class="input-group"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Username" name="username">
                  </div>
                  <div class="mb-3 text-danger" style="font-size: 13px;">
                    <?php echo form_error('username'); ?>
                  </div>
                  <div class="input-group"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="mb-4 text-danger" style="font-size: 13px;">
                    <?php echo form_error('password'); ?>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">Login</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>