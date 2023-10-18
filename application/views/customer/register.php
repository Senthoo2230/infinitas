<style>
  @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #F99417;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
background-color: #F99417;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
</style>
<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <form method="post" action="<?php echo base_url('customer_register'); ?>">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #F99417;">General Infomation</h3>

                  <div class="row">
                    
                    <div class="col-md-6 mb-1 pb-2">
                    
                      <div class="form-outline">
                        <label for="">Firstname</label>
                        <input placeholder="Jhon" type="text" id="form3Examplev2" name="fname" class="form-control form-control-lg" value="<?php echo set_value('fname'); ?>"/>
                        <span style="font-size: 12px;" class="text-danger"><?php echo form_error('fname'); ?></span>
                      </div>

                    </div>
                    <div class="col-md-6 mb-1 pb-2">
                      <div class="form-outline">
                        <label for="">Lastname</label>
                        <input placeholder="Mark" type="text" id="form3Examplev3" class="form-control form-control-lg" name="lname" value="<?php echo set_value('lname'); ?>"/>
                        <span style="font-size: 12px;" class="text-danger"><?php echo form_error('lname'); ?></span>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-1 pb-2">
                      <div class="form-outline">
                        <label for="Mobile No">Mobile No</label>
                        <input placeholder="0778434368" type="text" id="form3Examplev2" class="form-control form-control-lg" name="mobile" value="<?php echo set_value('mobile'); ?>" />
                        <span style="font-size: 12px;" class="text-danger"><?php echo form_error('mobile'); ?></span>
                      </div>

                    </div>
                    <div class="col-md-6 mb-1 pb-2">
                      <div class="form-outline">
                      <label for="">Email</label>
                        <input placeholder="mark@gmail.com" type="email" id="form3Examplev3" class="form-control form-control-lg" name="email" value="<?php echo set_value('email'); ?>"/>
                        <span style="font-size: 12px;" class="text-danger"><?php echo form_error('email'); ?></span>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-1 pb-2">
                      <div class="form-outline">
                        <label for="">Address</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="address" value="<?php echo set_value('address'); ?>"/>

                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-1 pb-2">
                      <div class="form-outline">
                        <label for="">Referal ID</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="ref_id" value="<?php echo set_value('ref_id'); ?>"/>

                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-1 pb-2">
                      If your are a member, <a href="customer_login">login here</a>
                    </div>
                  </div>

                  

                </div>
              </div>

              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Login Details</h3>

                  <div class="mb-1 pb-2">
                  <label for="">Username</label>
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="username" value="<?php echo set_value('username'); ?>"/>
                      <div style="font-size: 12px;" class="text-primary"><?php echo form_error('username'); ?></div>
                    </div>
                  </div>

                  <div class="mb-1 pb-2">
                  <label for="">Password</label>
                    <div class="form-outline form-white">
                      <input type="password" id="form3Examplea3" class="form-control form-control-lg" name="password" value="<?php echo set_value('password'); ?>" />
                      <div style="font-size: 12px;" class="text-primary"><?php echo form_error('password'); ?></div>
                    </div>
                  </div>

                  <div class="mb-1 pb-2">
                  
                    <div class="form-outline form-white">
                      <label for="">Confirm Password</label>
                      <input type="password" id="form3Examplea3" class="form-control form-control-lg" name="confirm_pwd" value="<?php echo set_value('confirm_pwd'); ?>"/>
                      <div style="font-size: 12px;" class="text-primary"><?php echo form_error('confirm_pwd'); ?></div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</section>