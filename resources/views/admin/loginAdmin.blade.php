<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Gallery - Medical Admin Templates & Dashboards</title>
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
    <link rel="stylesheet" href="assets/css/main.min.css">

    <style>
      .login-bg-new{
          background: #0f1115 url(../images/medical-banner-with-doctor-patient.jpg) no-repeat;
          background-size: cover;
          background-position: bottom center;
          background-attachment: fixed;
      }
    </style>
  </head>

  <body class="login-bg-new">

    <!-- Container starts -->
    <div class="container">

      <!-- Auth wrapper starts -->
      <div class="auth-wrapper">

        <!-- Form starts -->
        <form action="{{ url('/admin') }}">

          <div class="auth-box">
            <a href="{{ url('/admin') }}" class="auth-logo mb-4">
              <img src="assets/images/logo-dark.svg" alt="Bootstrap Gallery">
            </a>

            <h4 class="mb-4">Login</h4>

            <div class="mb-3">
              <label class="form-label" for="email">Your email <span class="text-danger">*</span></label>
              <input type="text" id="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-2">
              <label class="form-label" for="pwd">Your password <span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="password" id="pwd" class="form-control" placeholder="Enter password">
                <button class="btn btn-outline-secondary" type="button">
                  <i class="ri-eye-line text-primary"></i>
                </button>
              </div>
            </div>

            <div class="d-flex justify-content-end mb-3">
              <a href="forgot-password.html" class="text-decoration-underline">Forgot password?</a>
            </div>

            <div class="mb-3 d-grid gap-2">
              <button type="submit" class="btn btn-primary">Login</button>
              <a href="signup.html" class="btn btn-secondary">Not registered? Signup</a>
            </div>

          </div>

        </form>
        <!-- Form ends -->

      </div>
      <!-- Auth wrapper ends -->

    </div>
    <!-- Container ends -->

  </body>

</html>