<?php
#Importing Librabries
require_once "common/commonLibs.php";
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
rel="stylesheet"
/>
<!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>
</head>

<style>
  .bg-image-vertical {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: auto 100%;
  }

  @media (min-width: 1025px) {
    .h-custom-2 {
      height: 100%;
    }
  }
.space {
  margin-top:20 !important;
}
</style>

<body>

  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">

          <!--Logo & Heading-->
          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Easy Connect</span>
          </div>

          <!--Form Styling-->
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;" name="formLogin" method="post" action="">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
              <div class="space">

              <!--Email Input-->
              <div class="form-outline mb-4">
                <input 
                type="email" 
                id="form2Example18" 
                class="form-control form-control-lg" 
                name="email" 
                />
                <label class="form-label" for="form2Example18">Email address</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

              <!--Password Input-->
              <div class="form-outline mb-4">
                <input 
                type="password" 
                id="form2Example28" 
                class="form-control form-control-lg" 
                name="password" 
                />
                <label class="form-label" for="form2Example28">Password</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 39.2px;"></div><div class="form-notch-trailing"></div></div>
              </div>

              <!--submit-->
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
              </div>

              <!--Reset Password-->
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="forget_Password.php">Forgot password?</a></p>

              <!--Separation Line-->
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>            
                  <div class="border-bottom w-100 mr-5"></div>
                </div>

              <!--Registration-->
              <p>Don't have an account? <a href="registration.php" class="link-info">Register here</a></p>
            </form>
          </div>
        </div>
      </div>
        <!--Left Image-->
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img  alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
    </div>
  </section>
</body>
</html>