
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
        <li class="nav-item"><a class="nav-link" href="assets/colors.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Report</a></li>
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
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
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
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                        <svg class="icon">
                          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                        </svg>)</span></div>
                    <div>Users</div>
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
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                        <svg class="icon">
                          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                        </svg>)</span></div>
                    <div>Income</div>
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
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                        <svg class="icon">
                          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                        </svg>)</span></div>
                    <div>Conversion Rate</div>
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
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-danger">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                        <svg class="icon">
                          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                        </svg>)</span></div>
                    <div>Sessions</div>
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
                  <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          
          <!-- /.card.mb-4-->
        
          <!-- /.row-->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <div class="card-header">Traffic &amp; Sales</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-6">
                          <div class="border-start border-start-4 border-start-info px-3 mb-3"><small class="text-medium-emphasis">New Clients</small>
                            <div class="fs-5 fw-semibold">9.123</div>
                          </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-6">
                          <div class="border-start border-start-4 border-start-danger px-3 mb-3"><small class="text-medium-emphasis">Recuring Clients</small>
                            <div class="fs-5 fw-semibold">22.643</div>
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>
                      <!-- /.row-->
                      <hr class="mt-0">
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Monday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Tuesday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Wednesday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Thursday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Friday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Saturday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-4">
                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Sunday</span></div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-6">
                          <div class="border-start border-start-4 border-start-warning px-3 mb-3"><small class="text-medium-emphasis">Pageviews</small>
                            <div class="fs-5 fw-semibold">78.623</div>
                          </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-6">
                          <div class="border-start border-start-4 border-start-success px-3 mb-3"><small class="text-medium-emphasis">Organic</small>
                            <div class="fs-5 fw-semibold">49.123</div>
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>
                      <!-- /.row-->
                      <hr class="mt-0">
                      <div class="progress-group">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                          </svg>
                          <div>Male</div>
                          <div class="ms-auto fw-semibold">43%</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-5">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user-female"></use>
                          </svg>
                          <div>Female</div>
                          <div class="ms-auto fw-semibold">37%</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-google"></use>
                          </svg>
                          <div>Organic Search</div>
                          <div class="ms-auto fw-semibold me-2">191.235</div>
                          <div class="text-medium-emphasis small">(56%)</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                          </svg>
                          <div>Facebook</div>
                          <div class="ms-auto fw-semibold me-2">51.223</div>
                          <div class="text-medium-emphasis small">(15%)</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                          </svg>
                          <div>Twitter</div>
                          <div class="ms-auto fw-semibold me-2">37.564</div>
                          <div class="text-medium-emphasis small">(11%)</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
                          </svg>
                          <div>LinkedIn</div>
                          <div class="ms-auto fw-semibold me-2">27.319</div>
                          <div class="text-medium-emphasis small">(8%)</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.col-->
                  </div>
                  <!-- /.row--><br>
                  <div class="table-responsive">
                    <table class="table border mb-0">
                      <thead class="table-light fw-semibold">
                        <tr class="align-middle">
                          <th class="text-center">
                            <svg class="icon">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                            </svg>
                          </th>
                          <th>User</th>
                          <th class="text-center">Country</th>
                          <th>Usage</th>
                          <th class="text-center">Payment Method</th>
                          <th>Activity</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                          </td>
                          <td>
                            <div>Yiorgos Avraamu</div>
                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold">50%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-medium-emphasis">Last login</div>
                            <div class="fw-semibold">10 sec ago</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                          </td>
                          <td>
                            <div>Avram Tarasios</div>
                            <div class="small text-medium-emphasis"><span>Recurring</span> | Registered: Jan 1, 2020</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold">10%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-medium-emphasis">Last login</div>
                            <div class="fw-semibold">5 minutes ago</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="avatar-status bg-warning"></span></div>
                          </td>
                          <td>
                            <div>Quintin Ed</div>
                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold">74%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-medium-emphasis">Last login</div>
                            <div class="fw-semibold">1 hour ago</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-secondary"></span></div>
                          </td>
                          <td>
                            <div>Enéas Kwadwo</div>
                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold">98%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-medium-emphasis">Last login</div>
                            <div class="fw-semibold">Last month</div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                          </td>
                          <td>
                            <div>Agapetus Tadeáš</div>
                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold">22%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-medium-emphasis">Last login</div>
                            <div class="fw-semibold">Last week</div>
                          </td>
                          <td>
                            <div class="dropdown dropup">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                          </td>
                          <td>
                            <div>Friderik Dávid</div>
                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold">43%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-medium-emphasis">Last login</div>
                            <div class="fw-semibold">Yesterday</div>
                          </td>
                          <td>
                            <div class="dropdown dropup">
                              <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>