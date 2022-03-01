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
    var m=document.getElementById('newPassword').value;

    //Validation of Password
    if(document.getElementById('newPassword').value!=""){
      if(validationOfPassword(document.getElementById('newPassword').value)){
        document.getElementById('passwordError').innerHTML="";
        flag+=1;
      }
      else
      {
        document.getElementById('passwordError').innerHTML="Password Should Atleast Contain One Uppercase(A,B..) One Number(1,2..) And One Special Charcter(@,&,#..)";
      }
    }
    
  //Validation of Re-enterd Password
    if(document.getElementById('reEnterPassword').value!=""){
      if(document.getElementById('reEnterPassword').value==m){
        document.getElementById('matchError').innerHTML="";
        flag+=1;
      }
      else
      {
        document.getElementById('matchError').innerHTML="Password Must Match";
      }
    }

  if(flag==2){
      document.getElementById('resetSubmitBtn').disabled=false;

    }
  }
    
</script>

<body>

  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Easy Connect</span>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;">
              <h3 class="fw-normal mb-3 pb-3" style="font-family: Times New Roman,Serif;">Password Reset</h3>
              <div class="space">
                <span class="error" id="passwordError"></span>
                <div class="space">
              <a style="font-family: Times New Roman,Serif;">Enter your new password</a>
              <div class="form-outline">
                <input
                class="form-control"
                id="newPassword"
                type="text"
                placeholder="Enter new password"
                aria-label="Enter new password"
                name="newPassword"
                onkeyup="userDataValidation()"
                />

                <div class="form-notch"><div class="form-notch-leading" style="width: 0px;"></div><div class="form-notch-middle" style="width: 0px;"></div><div class="form-notch-trailing"></div></div>
              </div>
              
              <div class="space">
              <span class="error" id="matchError"></span>
              <div class="space">
              <a style="font-family: Times New Roman,Serif;">Confirm your password</a>
              <div class="form-outline">
                <input
                class="form-control"
                id="reEnterPassword"
                type="text"
                placeholder="Confirm your password"
                aria-label="Confirm your password"
                onkeyup="userDataValidation()"
                name="reEnterPassword"
                />
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 0px;"></div>
                  <div class="form-notch-middle" style="width: 0px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>
              <br>
              <button class="btn btn-info btn-block" type="button" id="resetSubmitBtn" >Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
