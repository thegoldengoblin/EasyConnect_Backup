<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
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
  
  .error{
  color: #D8000C;
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
          <div class="space">
            
          <!--Form Styling-->
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;" name="formResetPasswordOtp">

              <!--Form Title-->
              <h3 class="fw-normal mb-3 pb-3" style="font-family: Times New Roman,Serif;">Password Reset</h3>

              <center>
                <i class="fas fa-envelope-open fa-2x" style="color:#ffeea4;" ></i>
                <div class="space">
                <h5 class="fw-normal mb-3 pb-3" style="font-family: Times New Roman,Serif;">We have sent an OTP to your E-mail</h5>
              </center>

              <!--Otp Input-->
              <a style="font-family: Times New Roman,Serif;">Enter OTP</a>
              <div class="form-outline"  >
                <input
                class="form-control"
                id="formControlReadonly"
                type="text"
                name="otp"
                />
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 0px;"></div>
                  <div class="form-notch-middle" style="width: 0px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

              <!--Otp Resend-->
              <p class="text-muted" style="font-family: Times New Roman,Serif;">didn't received the OTP? <a href="login.php" class="link-info">Resend OTP</a></p>
              <div class="space">
              
              <!--submit-->
              <button class="btn btn-info" type="button" href="set_new_password.php" >submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>



