<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Health Monitor</title>
    <base href="{{ \URL::to('/') }}">

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:title" content="Admin Templates - Dashboard Templates">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- *************
		************ CSS Files *************
	************* -->
    <link rel="stylesheet" href="assets/fonts/remix/remixicon.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- *************
		************ Vendor Css Files *************
	************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

    <!-- Date Range CSS -->
    <link rel="stylesheet" href="assets/vendor/daterange/daterange.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css">
    <link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css">
    <link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: "Noto Sans Thai", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-variation-settings:
          "wdth" 100;
      }
      .logo{
        font-family: "Josefin Sans", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-size: 19px;
      }
    </style>

  </head>

  <body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
      <div class='spin-wrapper'>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
      </div>
    </div>
    <!-- Loading ends -->

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- App header starts -->
      <div class="app-header d-flex align-items-center">

        <!-- Toggle buttons starts -->
        <div class="d-flex">
          <button class="toggle-sidebar">
            <i class="ri-menu-line"></i>
          </button>
          <button class="pin-sidebar">
            <i class="ri-menu-line"></i>
          </button>
        </div>
        <!-- Toggle buttons ends -->

        <!-- App brand starts -->
        <div class="app-brand ms-3">
          <a href="index.html" class="d-lg-block d-none">
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Medicare Admin Template">
            <label for="" class="text-white logo">Smart Health Monitor</label>
          </a>
          <a href="index.html" class="d-lg-none d-md-block">
            <!-- <img src="assets/images/logo-sm.svg" class="logo" alt="Medicare Admin Template"> -->
            <!-- <img src="{{ asset('images/logo.png') }}" class="logo" alt="Medicare Admin Template"> -->
            <label for="" class="text-white logo">Smart Health Monitor</label>
          </a>
        </div>
        <!-- App brand ends -->

        <!-- App header actions starts -->
        <div class="header-actions">

          <!-- Header user settings starts -->
          <div class="dropdown ms-2">
            <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <div class="avatar-box"><i class="ri-user-fill"></i><span class="status busy"></span></div>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg">
              <div class="px-3 py-2">
                <span class="small">Admin</span>
                <h6 class="m-0">James Bruton</h6>
              </div>
              <div class="mx-3 my-2 d-grid">
                 <a class="btn btn-danger" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" >
                    <!-- <i class="nav-icon fas fas fa-sign-out-alt"></i> -->
                    <p>Logout</p>
                  </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
              </div>
            </div>
          </div>
          <!-- Header user settings ends -->

        </div>
        <!-- App header actions ends -->

      </div>
      <!-- App header ends -->

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- Sidebar profile starts -->
          <!-- <div class="sidebar-profile">
            <img src="assets/images/user6.png" class="img-shadow img-3x me-3 rounded-5" alt="Hospital Admin Templates">
            <div class="m-0">
              <h5 class="mb-1 profile-name text-nowrap text-truncate">Nick Gonzalez</h5>
              <p class="m-0 small profile-name text-nowrap text-truncate">Dept Admin</p>
            </div>
          </div> -->
          <!-- Sidebar profile ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li>
                <a href="{{ url('/admin') }}">
                  <i class="ri-home-6-line"></i>
                  <span class="menu-text">ข้อมูลการตรวจวัดทั่วไป</span>
                </a>
              </li>
              <li class="active current-page">
                <a href="{{ url('/admin/healthchecklist') }}">
                  <i class="ri-home-smile-2-line"></i>
                  <span class="menu-text">รายชื่อผู้ใช้ที่ลงทะเบียนผ่าน Line</span>
                </a>
              </li>

            </ul>
          </div>
          <!-- Sidebar menu ends -->


          <!-- Sidebar contact starts -->
          <div class="sidebar-contact">
            <p class="fw-light mb-1 text-nowrap text-truncate">ติดต่อ</p>
            <h5 class="m-0 lh-1 text-nowrap text-truncate">089-8266826</h5>
            <i class="ri-phone-line"></i>
          </div>
          <!-- Sidebar contact ends -->


        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item text-primary" aria-current="page">
                Dashboard
              </li>
            </ol>
            <!-- Breadcrumb ends -->

            <!-- Sales stats starts -->
            <div class="ms-auto d-lg-flex d-none flex-row">
              <div class="d-flex flex-row gap-1 day-sorting">
                <!-- <button class="btn btn-sm btn-primary">Today</button>
                <button class="btn btn-sm">7d</button>
                <button class="btn btn-sm">2w</button>
                <button class="btn btn-sm">1m</button>
                <button class="btn btn-sm">3m</button>
                <button class="btn btn-sm">6m</button>
                <button class="btn btn-sm">1y</button> -->
                <div class="m-0">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="ri-calendar-check-line"></i>
                        </span>
                        <input type="text" id="abc10" class="form-control datepicker-range-auto-apply">
                        <button type="button" class="btn btn-info">Search</button>
                      </div>
                    </div>
              </div>
            </div>
            <!-- Sales stats ends -->

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">รายชื่อผู้ใช้ที่ลงทะเบียนผ่านไลน์</h5>
                    <!-- <a href="add-doctors.html" class="btn btn-primary ms-auto">Add Doctor</a> -->
                  </div>
                  <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive">
                      <table id="basicExample" class="table truncate m-0 align-middle">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-center">Register Date</th>
                            <th class="text-center">Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>0001</td>
                            <td>
                              <img src="assets/images/user.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Medical Admin Template">
                                นางสาวสุทธิดา อำพันสุรินทร์
                            </td>
                            <td>Suttida@gmail.com</td>
                            <td class="text-center"> 12/01/2025</td>
                            <td class="text-center text-success"> Active </td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-doctors.html" class="btn btn-outline-warning btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Doctor Details">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                                <!-- <a href="doctors-profile.html" class="btn btn-outline-info btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Profile">
                                  <i class="ri-eye-line"></i>
                                </a> -->
                                <!-- <a href="#" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="modal"
                                  data-bs-target="#exampleModalFullscreen">
                                  <i class="ri-eye-line"></i> Heath
                                </a> -->
                                <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#exampleModalFullscreen">
                                  <i class="ri-eye-line"></i> Heath
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- Table ends -->


                    <!-- Modal Fullscreen -->
                    <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                      aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                      <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFullscreenLabel">
                              Health
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                              <!-- Row starts -->
                              <div class="row gx-3">
                                <div class="col-xxl-6 col-sm-12">
                                  <div class="card mb-3 bg-1">
                                    <div class="card-body mh-230">

                                      <!-- Row starts -->
                                      <div class="row gx-3">
                                        <div class="col-sm-2">
                                          <img src="assets/images/doctor.svg" class="img-230 mt-n2" alt="Medical Dashboard">
                                        </div>
                                        <div class="col-sm-6">

                                          <div class="text-white mt-3">
                                            <h6>ผลการตรวจ</h6>
                                            <h3>คุณสุทธิดา อำพันสุรินทร์</h3>
                                            <!-- <h6>Gynecologist, MS, MD, MBBS</h6> -->
                                            <!-- <h5>You have total <span class="badge bg-danger">18 appointments</span> today.</h5> -->
                                            <div class="rating-stars">
                                              <div class="readonly5"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                          <img src="assets/images/user.png" class="img-shadow w-75 rounded-circle me-1 mt-3"
                                          alt="Medical Admin Template">

                                        </div>
                                      </div>
                                      <!-- Row ends -->

                                    </div>
                                  </div>
                                </div>

                                <div class="col-xxl-6 col-sm-12">
                                    <div class="card mb-3">
                                      <div class="card-header text-center ">
                                          ผลการตรวจวัดล่าสุด
                                      </div>
                                    </div>
                                    <div class="row gx-3 ">

                                      <div class="col-xxl-4 col-sm-12">
                                        <div class="card mb-3 text-center">
                                          <div class="card-header bg-success">
                                            <h5 class="card-title">อุณหภูมิร่างกาย</h5>
                                          </div>
                                          <div class="card-body">
                                            <h4> 16/01/2025 13:02 </h4>
                                            <hr>
                                            <div class="row gx-3 ">
                                              <div class="col-xxl-4 col-sm-12">
                                                <img src="{{ asset('images/BodyIcon.png') }}" class=" img-4x rounded-1"
                                                alt="Hospital Admin Templates">
                                              </div>
                                              <div class="col-xxl-5 col-sm-12">
                                                <h1 class="text-success">36</h1>
                                              </div>
                                              <div class="col-xxl-3 col-sm-12">
                                                <h3 class="mt-2"> C°</h3>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card-footer bg-success"><h5 class="text-white">อุณหภูมิร่างกายปกติ</h5> </div>
                                        </div>
                                      </div>


                                      <div class="col-xxl-4 col-sm-12">
                                        <div class="card mb-3 text-center">
                                          <div class="card-header bg-warning">
                                            <h5 class="card-title">อ็อกซิเจนในเลือด (SpO2) </h5>
                                          </div>
                                          <div class="card-body">
                                            <h4> 16/01/2025 13:02 </h4>
                                            <hr>
                                            <div class="row gx-3 ">
                                              <div class="col-xxl-4 col-sm-12">
                                                <img src="{{ asset('images/BodyIcon.png') }}" class=" img-4x rounded-1"
                                                alt="Hospital Admin Templates">
                                              </div>
                                              <div class="col-xxl-5 col-sm-12">
                                                <h1 class="text-success">97</h1>
                                              </div>
                                              <div class="col-xxl-3 col-sm-12">
                                                <h3 class="mt-2"> %</h3>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card-footer bg-success"><h5 class="text-white">ปริมาณอ็อกซิเจนปกติ</h5> </div>
                                        </div>
                                      </div>


                                      <div class="col-xxl-4 col-sm-12">
                                        <div class="card mb-3 text-center">
                                          <div class="card-header bg-danger">
                                            <h5 class="card-title"> ความดันโลหิต </h5>
                                          </div>
                                          <div class="card-body">
                                            <h4> 16/01/2025 13:02 </h4>
                                            <hr>
                                            <div class="row gx-3 ">
                                              <div class="col-xxl-4 col-sm-12">
                                                <img src="{{ asset('images/BodyIcon.png') }}" class=" img-4x rounded-1"
                                                alt="Hospital Admin Templates">
                                              </div>
                                              <div class="col-xxl-8 col-sm-12">
                                                <h1><label class="text-danger">147</label>/<label class="text-success">97</label></h1>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card-footer bg-danger"><h5 class="text-white">ความดันโลหิตสูงผิดปกติ</h5> </div>
                                        </div>
                                      </div>

                                    </div>
                                </div>

                              </div>
                              <!-- Row ends -->




                              <!-- Row start -->
                              <div class="row gx-3">
                                <div class="col-sm-12">
                                  <!-- Card start -->
                                  <div class="card">
                                    <div class="card-header">

                                      <!-- Row starts -->
                                      <div class="row gx-3 justify-content-end align-items-center">
                                        <div class="col-xl-9">
                                          <div class="d-flex flex-wrap gap-3">
                                            <div>
                                              <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              <span class="fw-semibold ps-1">Weekend</span>
                                            </div>
                                            <div>
                                              <i class="ri-checkbox-circle-fill text-primary"></i>
                                              <span class="fw-semibold ps-1">Present</span>
                                            </div>
                                            <div>
                                              <i class="ri-checkbox-circle-fill text-danger"></i>
                                              <span class="fw-semibold ps-1">Leave</span>
                                            </div>
                                            <div>
                                              <i class="ri-checkbox-circle-fill text-success"></i>
                                              <span class="fw-semibold ps-1">Holiday</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-xl-3">
                                          <select name="Month" id="SMonth" class="form-select">
                                            <option value="0">May 2024</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                          </select>
                                        </div>
                                      </div>
                                      <!-- Row ends -->

                                    </div>
                                    <div class="card-body">

                                      <!-- Table start -->
                                      <div class="table-responsive">
                                        <table id="attandance" class="table truncate m-0 align-middle">
                                          <thead>
                                            <tr>
                                              <th>User</th>
                                              <th>1</th>
                                              <th>2</th>
                                              <th>3</th>
                                              <th>4</th>
                                              <th>5</th>
                                              <th>6</th>
                                              <th>7</th>
                                              <th>8</th>
                                              <th>9</th>
                                              <th>10</th>
                                              <th>11</th>
                                              <th>12</th>
                                              <th>13</th>
                                              <th>14</th>
                                              <th>15</th>
                                              <th>16</th>
                                              <th>17</th>
                                              <th>18</th>
                                              <th>19</th>
                                              <th>20</th>
                                              <th>21</th>
                                              <th>22</th>
                                              <th>23</th>
                                              <th>24</th>
                                              <th>25</th>
                                              <th>26</th>
                                              <th>27</th>
                                              <th>28</th>
                                              <th>29</th>
                                              <th>30</th>
                                              <th>31</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small">M</td>
                                              <td class="small">T</td>
                                              <td class="small">W</td>
                                              <td class="small">T</td>
                                              <td class="small">F</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small">M</td>
                                              <td class="small">T</td>
                                              <td class="small">W</td>
                                              <td class="small">T</td>
                                              <td class="small">F</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small">M</td>
                                              <td class="small">T</td>
                                              <td class="small">W</td>
                                              <td class="small">T</td>
                                              <td class="small">F</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small">M</td>
                                              <td class="small">T</td>
                                              <td class="small">W</td>
                                              <td class="small">T</td>
                                              <td class="small">F</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small text-secondary">S</td>
                                              <td class="small">M</td>
                                              <td class="small">T</td>
                                            </tr>
                                            <tr>
                                              <td>ความดันโลหิต</td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>อัตราการเต้นหัวใจ</td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>อุณหภูมิ</td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>SpO2</td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-danger"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-secondary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                              <td>
                                                <i class="ri-checkbox-circle-fill text-primary"></i>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <!-- Table end -->

                                    </div>
                                  </div>
                                  <!-- Card end -->

                                </div>
                              </div>
                              <!-- Row end -->



                              <!-- Row starts -->
                              <div class="row gx-3 ">
                                <div class="col-xxl-12 col-sm-12">
                                    <div class="card mb-3">
                                      <div class="card-header text-bg-light text-left">
                                          ผลการตรวจวัด 10 ครั้งล่าสุด
                                      </div>
                                      <div class="card-body text-bg-light">
                                        <div class="row gx-3 ">


                                          <!-- Card details start -->
                                          <div class="col-xxl-3 col-sm-12">
                                            <div class="card mb-3">
                                              <div class="card-body mh-230">

                                                <div>
                                                  <div class="d-flex flex-column align-items-center">
                                                    <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                                                      <img src="{{ asset('images/BloodPressureIcon.png') }}" class=" img-4x rounded-1"
                                                        alt="Hospital Admin Templates">
                                                    </div>
                                                    <h6>Blood Pressure</h6>

                                                    <div class="chart-height">
                                                      <!-- <div id="areaGraph"></div> -->
                                                      <div id="bpLevels"></div>
                                                        <ul class="list-group">
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>24/04/2024</div>
                                                            <div>140</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>16/04/2024</div>
                                                            <div>190</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>10/04/2024</div>
                                                            <div>230</div>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                          </div>
                                          <!-- Card details end -->


                                          <!-- Card details start -->
                                          <div class="col-xxl-3 col-sm-12">
                                            <div class="card mb-3">
                                              <div class="card-body mh-230">

                                                <div>
                                                  <div class="d-flex flex-column align-items-center">
                                                    <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                                                      <img src="{{ asset('images/SPO2Icon.png') }}" class=" img-4x rounded-1"
                                                        alt="Hospital Admin Templates">
                                                    </div>
                                                    <h6>Health</h6>

                                                    <div class="chart-height">
                                                     <div id="sugarLevels"></div>
                                                        <ul class="list-group">
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>24/04/2024</div>
                                                            <div>140</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>16/04/2024</div>
                                                            <div>190</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>10/04/2024</div>
                                                            <div>230</div>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- Card details end -->


                                          <!-- Card details start -->
                                          <div class="col-xxl-3 col-sm-12">
                                            <div class="card mb-3">
                                              <div class="card-body mh-230">

                                                <div>
                                                  <div class="d-flex flex-column align-items-center">
                                                    <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                                                      <img src="{{ asset('images/heart-rate.png') }}" class=" img-4x rounded-1"
                                                        alt="Hospital Admin Templates">
                                                    </div>
                                                    <h6>Heart Rate</h6>

                                                    <div class="chart-height">
                                                      <div id="heartRate"></div>
                                                        <ul class="list-group">
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>24/04/2024</div>
                                                            <div>140</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>16/04/2024</div>
                                                            <div>190</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>10/04/2024</div>
                                                            <div>230</div>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- Card details end -->


                                          <!-- Card details start -->
                                          <div class="col-xxl-3 col-sm-12">
                                            <div class="card mb-3">
                                              <div class="card-body mh-230">

                                                <div>
                                                  <div class="d-flex flex-column align-items-center">
                                                  <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                                                    <img src="{{ asset('images/BodyIcon.png') }}" class=" img-4x rounded-1"
                                                      alt="Hospital Admin Templates">
                                                  </div>
                                                  <h6>Body Temperature</h6>

                                                    <div class="chart-height">
                                                      <div id="clolesterolLevels"></div>
                                                        <ul class="list-group">
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>24/04/2024</div>
                                                            <div>140</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>16/04/2024</div>
                                                            <div>190</div>
                                                          </li>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>10/04/2024</div>
                                                            <div>230</div>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- Card details end -->



                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                              <!-- Row ends -->




                              <!-- Row start -->
                              <div class="row gx-3">
                                <div class="col-xl-6">
                                  <div class="card mb-3">
                                    <div class="card-header">
                                      <h5 class="card-title">ความดันโลหิต <label class="text-success">+HR</label></h5>
                                    </div>
                                    <div class="card-body">
                                    <div id="candleStick"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card mb-3">
                                    <div class="card-header">
                                      <h5 class="card-title text-success">อัตราการเต้นหัวใจ</h5>
                                    </div>
                                    <div class="card-body">
                                      <div id="negativeValues" class="chart-height-lg"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Row ends -->


                              <!-- Row start -->
                              <div class="row gx-3">
                                <div class="col-xl-6">
                                  <div class="card mb-3">
                                    <div class="card-header">
                                      <h5 class="card-title">อ็อกซิเจนในเลือด (SpO2) </h5>
                                    </div>
                                    <div class="card-body">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card mb-3">
                                    <div class="card-header">
                                      <h5 class="card-title">อุณหภูมิร่างกาย</h5>
                                    </div>
                                    <div class="card-body">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Row ends -->






                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Delete Row -->
                    <div class="modal fade" id="delRow" tabindex="-1" aria-labelledby="delRowLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="delRowLabel">
                              Confirm
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete the doctor from list?
                          </div>
                          <div class="modal-footer">
                            <div class="d-flex justify-content-end gap-2">
                              <button class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                aria-label="Close">No</button>
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Yes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer bg-white">
          <span>© Smart Health Monitor</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Data Tables -->
    <script src="assets/vendor/datatables/dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables/custom/custom-datatables.js"></script>

    <!-- Apex js -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/patients/sparklines.js"></script>
    <script src="assets/vendor/apex/custom/graphs/candlestick.js"></script>



    <!-- Morris Graphs -->
    <script src="assets/vendor/morris/raphael-min.js"></script>
    <script src="assets/vendor/morris/morris.min.js"></script>
    <script src="assets/vendor/morris/custom/negativeValues.js"></script>


    <!-- Date Range JS -->
    <script src="assets/vendor/daterange/daterange.js"></script>
    <script src="assets/vendor/daterange/custom-daterange.js"></script>


    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>
