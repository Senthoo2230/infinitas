<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-4">
                <form method="post" action="<?php echo base_url('signup'); ?>">
                <h1>Register</h1>
                <p class="text-medium-emphasis">Create your account</p>
                <?php
                if (validation_errors()) {
                    ?>
                        <div class="alert alert-danger" role="alert" style="font-size: 12px;">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php
                }
                ?>
                <!-- Form Submit message -->
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
                    <!-- Form Submit message -->
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                    </svg></span>
                  <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
                  
                </div>
                
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span>
                  <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="input-group mb-4"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span>
                  <input class="form-control" type="password" placeholder="Repeat password" name="confirm_pwd">
                </div>
                <button class="btn btn-block btn-success" type="submit">Create Account</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>