<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Gallery - Medical Admin Templates & Dashboards</title>

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
    <link rel="stylesheet" href="assets/css/main.min.css">

    <!-- *************
		************ Vendor Css Files *************
	************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">
    
    <!-- Date Range CSS -->
    <link rel="stylesheet" href="assets/vendor/daterange/daterange.css">

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
          <!-- <div class="dropdown ms-2">
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
                <a href="login.html" class="btn btn-danger">Logout</a>
              </div>
            </div>
          </div> -->
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
              <li class="active current-page">
                <a href="{{ url('/admin') }}">
                  <i class="ri-home-6-line"></i>
                  <span class="menu-text">ข้อมูลการตรวจวัดทั่วไป</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/admin/healthchecklist') }}">
                  <i class="ri-home-smile-2-line"></i>
                  <span class="menu-text">รายชื่อผู้ใช้ที่ลงทะเบียนผ่านไลน์</span>
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
              <div class="col-xxl-6 col-sm-12">
                <div class="card mb-3 bg-1 mt-5">
                  <div class="card-body mh-230 mt-3">

                    <!-- Row starts -->
                    <div class="row gx-3">
                      <div class="col-sm-3">
                        <img src="assets/images/doctor.svg" class="img-230 mt-n5" alt="Medical Dashboard">
                      </div>
                      <div class="col-sm-9">
                        <div class="text-white mt-4">
                          <h6>Hello,</h6>
                          <h3>Welcome to Smart Health Monitor</h3>
                          <!-- <h6>Gynecologist, MS, MD, MBBS</h6> -->
                          <!-- <h5>You have total <span class="badge bg-danger">18 appointments</span> today.</h5> -->
                          <div class="rating-stars">
                            <div class="readonly5"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                </div>
              </div>
    
              <div class="col-xxl-6 col-sm-12">
                  <div class="card mb-3">
                    <div class="card-header text-center ">
                    <h5 >ผลการตรวจวัดล่าสุด</h5>
                    </div>
                  </div>
                  <div class="row gx-3 ">

                  <div class="row gx-3">
                  <div class="col-xxl-4 col-sm-12">
                    <div class="card mb-3">
                      <div class="card-body mh-230">

                        <!-- Card details start -->
                        <div>
                          <div class="d-flex flex-column align-items-center">
                            <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                              <img src="{{ asset('images/BodyIcon.png') }}" class=" img-4x rounded-1"
                                alt="Hospital Admin Templates">
                            </div>
                            <h1 class="text-danger ">24 ครั้ง</h1>
                            <div class="badge bg-success d-flex align-items-center justify-content-center" style="height: 40px; width: 150px;">
                              <h5 class="m-0">อุณหภูมิร่างกาย</h5>
                            </div>
                           
                          </div>
                        </div>
                        <!-- Card details end -->

                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xxl-4 col-sm-12">
                    <div class="card mb-3">
                      <div class="card-body mh-230">

                        <!-- Card details start -->
                        <div>
                          <div class="d-flex flex-column align-items-center">
                            <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                              <img src="{{ asset('images/SPO2Icon.png') }}" class=" img-4x rounded-1"
                                alt="Hospital Admin Templates">
                            </div>
                            <h1 class="text-danger">35 ครั้ง</h1>
                            <div class="badge bg-warning d-flex align-items-center justify-content-center" style="height: 40px; width: 150px;">
                              <h5 class="m-0">อ็อกซิเจนในเลือด</h5>
                            </div>
                          </div>
                        </div>
                        <!-- Card details end -->

                      </div>
                    </div>
                  </div>

                  
                  <div class="col-xxl-4 col-sm-12">
                    <div class="card mb-3">
                      <div class="card-body mh-230">

                        <!-- Card details start -->
                        <div>
                          <div class="d-flex flex-column align-items-center">
                            <div  class="icon-box xl rounded-5 mb-2 no-shadow">
                              <img src="{{ asset('images/BloodPressureIcon.png') }}" class=" img-4x rounded-1"
                                alt="Hospital Admin Templates">
                            </div>
                            <h1 class="text-danger">25 ครั้ง</h1>
                            <div class="badge bg-danger d-flex align-items-center justify-content-center" style="height: 40px; width: 150px;">
                              <h5 class="m-0">ความดันโลหิต</h5>
                            </div>
                          </div>
                        </div>
                        <!-- Card details end -->

                      </div>
                    </div>
                  </div>

                </div>

                  </div>
              </div>

            </div>
            <!-- Row ends -->





            <div class="row gx-3">
              <div class="col-xxl-6 col-sm-12">
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="card-title">ตำแหน่งการใช้งานอุปกรณ์</h5>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-sm-12">
                <div class="card mb-3">
                  <div class="card-header">
                    <div class="row gx-3">
                      <div class="col-xxl-6 col-sm-12">
                        <h5 class="card-title">การใช้งานทั้งหมด</h5>
                      </div>
                      <div class="col-xxl-6 col-sm-12">
                        
                        <div class="row g-3">
                          <div class="col-sm-12 col-12">
                            <div class="border rounded-2 d-flex align-items-center flex-row p-2">
                              <div class="me-2">
                              <div class="icon-box md rounded-5 bg-primary mb-3">
                                <i class="ri-stethoscope-line fs-4 lh-1"></i>
                              </div>
                              </div>
                              <div class="m-0">
                                <div class="d-flex align-items-center">
                                  <h4 class="m-0 fw-bold">74 ครั้ง</h4>
                                </div>
                                <small>Total</small>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- <div id="patients"></div> -->
                    <div id="barColors" class="chart-height-lg"></div>
                    <div id="legend" style="text-align: center; margin-top: 10px;">
                      <span style="display: inline-block; width: 10px; height: 10px; background-color: #1169f6; margin-right: 5px;"></span> การใช้ (ครั้ง)
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    <div class="row gx-3">
                      <div class="col-xxl-5 col-sm-12">
                        <h5 class="card-title">ลงทะเบียนผู้ใช้งานใหม่</h5>
                      </div>
                      <div class="col-xxl-7 col-sm-12">
                        <div class="border rounded-2 d-flex align-items-center flex-row p-2">
                          <div class="me-5">
                          <div class="icon-box lg bg-primary-subtle rounded-5 mb-2 no-shadow">
                            <i class="ri-empathize-line fs-1 text-primary"></i>
                          </div>
                          </div>
                          <div class="m-0">
                            <small>ลงทะเบียนผู้ใช้งานใหม รวมทั้งหมด</small>
                            <div class="d-flex justify-content-end ">
                              <h4 class="m-0 fw-bold">1,290 คน</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- <div id="patients"></div> -->
                    <!-- <div id="barColors" class="chart-height-lg"></div> -->
                    <div id="income"></div>
                    <div id="legend" style="text-align: center; margin-top: 10px;">
                      <span style="display: inline-block; width: 10px; height: 10px; background-color: #5087df; margin-right: 5px;"></span> ผู้ใช้งาน
                    </div>
                  </div>
                </div>


              </div>

            </div>

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer bg-white">
            <span>© Medflex admin 2024</span>
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

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/home/patients.js"></script>
    <script src="assets/vendor/apex/custom/home/treatment.js"></script>
    <script src="assets/vendor/apex/custom/home/available-beds.js"></script>
    <script src="assets/vendor/apex/custom/home/earnings.js"></script>
    <script src="assets/vendor/apex/custom/home/gender-age.js"></script>
    <script src="assets/vendor/apex/custom/home/claims.js"></script>
    <script src="assets/vendor/apex/custom/doc-dashboard/income.js"></script>
 
    
    <!-- Morris Graphs -->
    <script src="assets/vendor/morris/raphael-min.js"></script>
    <script src="assets/vendor/morris/morris.min.js"></script>
    <script src="assets/vendor/morris/custom/area.js"></script>
    <script src="assets/vendor/morris/custom/barColors.js"></script>
    <script src="assets/vendor/morris/custom/dayData.js"></script>
    <script src="assets/vendor/morris/custom/donutColors.js"></script>
    <script src="assets/vendor/morris/custom/donutFormatter.js"></script>
    <script src="assets/vendor/morris/custom/morrisBar.js"></script>
    <script src="assets/vendor/morris/custom/negativeValues.js"></script>
    <script src="assets/vendor/morris/custom/stackedBar.js"></script>

    <!-- Date Range JS -->
    <script src="assets/vendor/daterange/daterange.js"></script>
    <script src="assets/vendor/daterange/custom-daterange.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>