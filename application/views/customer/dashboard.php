
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">Gold Pro</div>
                    <div>PACKAGE</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-4">
              <div class="card mb-4 text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">12</div>
                      <div>REFERRALS</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart2" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-4">
              <div class="card mb-4 text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">Rs 5400.00</div>
                      <div>TOTAL EARNINGS</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3" style="height:70px;">
                  <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>

          <div>
              <?php if ($this->session->flashdata('message')): ?>
                  <div class="alert alert-success">
                      <?php echo $this->session->flashdata('message'); ?>
                  </div>
              <?php endif; ?>
          </div>
          
          <div class="row">
            <div class="card">
              <div class="card-header">
                Profile
              </div>
              <div class="card-body">
                <h5 class="card-title">Profile</h5>
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Firstname :</td>
                      <td><?php echo $customer_data->firstname; ?></td>
                    </tr>
                    <tr>
                      <td>Lastname :</td>
                      <td><?php echo $customer_data->lastname; ?></td>
                    </tr>
                    <tr>
                      <td>Email :</td>
                      <td><?php echo $customer_data->email; ?></td>
                    </tr>
                    <tr>
                      <td>Mobile No :</td>
                      <td><?php echo $customer_data->mobile; ?></td>
                    </tr>
                    <tr>
                      <td>Address :</td>
                      <td><?php echo $customer_data->address; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.card.mb-4-->
          
        </div>
      </div>
      