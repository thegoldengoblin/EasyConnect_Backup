<html>
<head>
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
            <form style="width: 23rem;" name="formForgotPassword">
              <div class="space">

                <!--Form Title-->
                <center>
                  <i class="fas fa-envelope-open fa-2x" style="color:#ffeea4;" ></i>
                  <div class="space">
                    <h5 class="fw-normal mb-3 pb-3" style="font-family: Times New Roman,Serif;">Please enter Email which is assosiated with us</h5>
                  </div>  
                </center>

                <!--Email Input-->
                <div class="form-outline">
                  <input 
                    class="form-control" 
                    id="form2Example18" 
                    type="text" 
                    placeholder="enter your Email" 
                    aria-label="enter your Email" 
                    name="Email" 
                  />
                  <label class="form-label"style="font-family: Times New Roman,Serif;">enter your Email</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 100px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>

               <!--Separation Line-->
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>            
                  <div class="border-bottom w-100 mr-5"></div>
                </div>

                <!--Mobile Number Input-->
                <div class="form-outline">
                  <input 
                    class="form-control" 
                    id="form2Example18" 
                    type="text" 
                    placeholder="enter mobile number"
                    aria-label="enter mobile number"
                    name="mobileNumber" 
                  />
                  <label class="form-label" style="font-family: Times New Roman,Serif;">mobile number</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 100px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>

                <!--submit-->
                <div class="space">
                  <button class="btn btn-info btn-lg btn-block" type="button" href="password_Otp.php">send reset link</button>
                </div>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

