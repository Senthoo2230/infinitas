
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="assets/index.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard</a></li>
        <li class="nav-title">Menu</li>

        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customers'); ?>">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Customers</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="assets/typography.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> History</a></li>
        <li class="nav-item"><a class="nav-link" href="assets/typography.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Transaction</a></li>
        <li class="nav-item"><a class="nav-link" href="assets/typography.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Settings</a></li>
            
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
         
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
               
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div>
                <a class="dropdown-item" href="">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile
                </a>
                <a class="dropdown-item" href="">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('customer_logout'); ?>">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div>
      </header>
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
          
        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>