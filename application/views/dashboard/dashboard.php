
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
          
          <div class="row">
            <div class="card">
              <div class="card-header">
              Customers
              </div>
              <div class="card-body">
                <h5 class="card-title">Customers</h5>
                <div class="table-responsive">
                    <table class="table border mb-0">
                      <thead class="table-light fw-semibold">
                        <tr class="align-middle">
                          <th class="text-center">#</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th class="text-center">Refferal ID</th>
                          <th>Activity</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $i = 1;
                            foreach ($customers as $cus) {
                              ?>
                              <tr class="align-middle">
                                <td class="text-center">
                                  <?php echo $i; ?>
                                </td>
                                <td>
                                  <div><?php echo $cus->firstname." ".$cus->lastname; ?></div>
                                  <div class="small text-medium-emphasis">Registered: <?php echo $cus->created_at; ?></div>
                                </td>
                                <td>
                                  <?php echo $cus->mobile; ?>
                                </td>
                                <td class="text-center">
                                  <a href="#"><?php echo $cus->ref_id; ?></a>
                                </td>
                               
                                <td>
                                  <div class="small text-medium-emphasis">Last login</div>
                                  <div class="fw-semibold">
                                    <?php echo $this->Customer_model->last_login($cus->customer_id); ?>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="" class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                              </tr>
                              <?php
                              $i++;
                            }
                        ?>
                       
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.card.mb-4-->