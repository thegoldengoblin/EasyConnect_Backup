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
 .error{
  color: #D8000C;
  
}
.space {
  margin-top: 2  !important;
}

</style>

<script>

  //Validate registration form
  function userDataValidation(){
    var flag=0;

    //validation of email
    if(document.getElementById('Email').value!=""){
      if(validationOfMail(document.getElementById('Email').value)){

        document.getElementById('emailError').innerHTML="";        
        flag+=1;  
      }
      else
      {
        document.getElementById('emailError').innerHTML="Please Enter A Valid Emailaddress";
      }
    }
    
    //validation of name
    if(document.getElementById('Name').value!=""){
      if(validationOfName(document.getElementById('Name').value)){
        document.getElementById('nameError').innerHTML="";
        flag+=1;
      }
      else
      {
        document.getElementById('nameError').innerHTML="Please Enter A Valid Name";
      }
    }
    
    //validation of mobile number
    if(document.getElementById('MobileNumber').value!=""){
      if(validationOfContact(document.getElementById('MobileNumber').value)){

        document.getElementById('contactError').innerHTML="";
        flag+=1;
      }
      else
      {
        document.getElementById('contactError').innerHTML="Please Enter A Valid MobileNumber";
      }
    }
    
    //validation of password
    if(document.getElementById('Password').value!=""){
      if(validationOfPassword(document.getElementById('Password').value)){

        document.getElementById('passwordError').innerHTML="";
        flag+=1;
      }
      else
      {
        document.getElementById('passwordError').innerHTML="Password Should Atleast Contain One Uppercase(A,B..) One Number(1,2..) And One Special Charcter(@,&,#..)";
      }
    }
    
    
    if(flag==4){
      document.getElementById('registrationSubmitBtn').disabled=false;

    }
  }

</script>

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

          <!--Form Title-->
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;" name="formRegistration" method="post" action="regestration_SP_Two.php">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h3>

              <!---Radio Buttons--->
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                <label class="form-check-label" for="inlineRadio1">User</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                <label class="form-check-label" for="inlineRadio2">Service Provider</label>
              </div>  

              <!---input Name--->
              <div class="space">
                <span class="error" id="nameError" style="font-family: times new roman,serif;"></span>
                <div class="form-outline mb-4">
                  <input type="text" id="Name" class="form-control form-control-lg" name="Name" onkeyup="userDataValidation()" autocomplete="off" />
                  <label class="form-label" for="form2Example18">Name</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 39.2px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>
              </div>
              


              <!---Input EmailAddress--->
              <div class="space">
                <span class="error" id="emailError" style="font-family: times new roman,serif;"></span>
                <div class="form-outline mb-4">
                  <input type="text" id="Email" class="form-control form-control-lg" name="Email" onkeyup="userDataValidation()" autocomplete="off"/>
                  <label class="form-label" for="form2Example28">Email Address</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 39.2px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>
              </div>
              

              <!---Input Mobile Number--->
              <div class="space">
                <span class="error" id="contactError" style="font-family: times new roman,serif;"></span>
                <div class="form-outline mb-4">
                  <input type="text" id="MobileNumber" class="form-control form-control-lg" name="contact" onkeyup="userDataValidation()" />
                  <label class="form-label" for="form2Example18">Mobile Number</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 39.2px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>
              </div>

              <!---Input Password--->
              <div class="space">
                <span class="error" id="passwordError" style="font-family: times new roman,serif;"></span>
                <div class="form-outline mb-4">
                  <input type="password" id="Password" class="form-control form-control-lg" name="Password" onkeyup="userDataValidation()" />
                  <label class="form-label" for="form2Example18">Password</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 39.2px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>
              </div>

              <!--Submit Button-->
              <div class="pt-1 mb-4 mt-2">
                <button class="btn btn-info btn-lg btn-block" type="submit" id="registrationSubmitBtn"  disabled>Get Started</button>
              </div>

              <!---Dividing Line--->
              <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                <div class="border-bottom w-100 ml-5"></div>
                <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                <div class="border-bottom w-100 mr-5"></div>
              </div>

              <!--Alternative Options-->
              <div class="text-center">
                <p>Sign-up With</p>
                <a class="btn btn-info" style="background-color: #3b5998;" href="#!" role="button">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-info" style="background-color: #55acee;" href="#!" role="button">
                  <i class="fab fa-google"></i>
                </a>

                <!---Dividing Line--->
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>
                  <div class="border-bottom w-100 mr-5"></div>
                </div>

                <!--Login-->
                <p>Do you have an account?<br><a href="login.php" class="link-info">Login Here</a></p>
             </div>
           </form>
         </div>
       </div>
        <!--Left Image-->
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img  alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position:left;">
          </div>        
    </div>
  </section>
</body>
</html>