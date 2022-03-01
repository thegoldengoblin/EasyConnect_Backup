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
  margin-top: 2  !important;
}

</style>

<script>

   //Validate registration form
  function userDataValidation(){
    var flag=3;

    //Validation Of city
    if(document.getElementById('City').value!=""){
      if(validationOfCity(document.getElementById('City').value)){
        flag+=1;
      }
    }

    //Validation Of District
    if(document.getElementById('District').value!=""){
      if(validationOfCity(document.getElementById('District').value)){
        flag+=1;
      }
    }

    //Validation Of State
    if(document.getElementById('State').value!=""){
      if(validationOfCity(document.getElementById('State').value)){
        flag+=1;
      }
    }

    //Validation Of Country
    if(document.getElementById('Country').value!=""){
      if(validationOfCity(document.getElementById('Country').value)){
        flag+=1;
      }
    }

    //Validation Of Pincode
    if(document.getElementById('Pincode').value!=""){
      if(validationOfPincode(document.getElementById('Pincode').value)){
        flag+=1;
      }
    }

    if(flag==8){
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

           <!--Form Styling--> 
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;">

              <div class="space">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Contact Details</h3>

              <!--input localality-->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example18" class="form-control form-control-lg" name="Locality" required/>
                <label class="form-label" for="form2Example18">Locality/House no.</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

               <!--input Street-->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example28" class="form-control form-control-lg" name="Street" required />
                <label class="form-label" for="form2Example28">Street</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

               <!--input Landmark-->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example18" class="form-control form-control-lg" name="Landmark" required />
                <label class="form-label" for="form2Example18">Landmark</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

               <!--input City-->
              <div class="form-outline mb-4">
                <input type="text" id="City" class="form-control form-control-lg" name="City" onkeyup="userDataValidation()" required/>
                <label class="form-label" for="form2Example18">City</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

              <!--Input District--> 
              <div class="form-outline mb-4">
                <input type="text" id="District" class="form-control form-control-lg" name="District" onkeyup="userDataValidation()" required />
                <label class="form-label" for="form2Example18">District</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

               <!--input State-->
              <div class="form-outline mb-4">
                <input type="text" id="State" class="form-control form-control-lg" name="State" onkeyup="userDataValidation()" required />
                <label class="form-label" for="form2Example18">State</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

               <!--input Country-->
              <div class="form-outline mb-4">
                <input type="text" id="Country" class="form-control form-control-lg" name="Country" onkeyup="userDataValidation()" required />
                <label class="form-label" for="form2Example18">Country</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 39.2px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>

               <!--input Pincode-->
              <div class="form-outline mb-4">
                <input type="text" id="Pincode" class="form-control form-control-lg" name="Pincode" onkeyup="userDataValidation()" required />
                <label class="form-label" for="form2Example18">Pincode</label>
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>                 
                    <div class="form-notch-middle" style="width: 39.2px;"></div>
                    <div class="form-notch-trailing"></div>                
                  </div>
              </div>

              <!--submit-->
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="button" id="registrationSubmit" href="regestration_rofilePicture.php">Continue</button>
              </div>
            </form>
          </div>
        </div>  
      </div>
    </div>
  </section>
</body>
</html>