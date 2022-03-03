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
</style>

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

            <form style="width: 23rem;" method="post" action="regestration_SP_five.php">
              
              <br>
              
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Area Of Avilability</h3>

              <div class="form-outline">
                <input
                class="form-control"
                id="formControlReadonly"
                type="text"
                placeholder="priviosly enterd pincode"
                aria-label="selected pincode"
                readonly
                />
                <label class="form-label" for="formControlReadonly">Selected Pincode</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 100px;"></div><div class="form-notch-trailing"></div></div>
              </div>
              <br>
              <strong>Select The Areas Which Can Be Served By You</strong>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">janmane</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">siddapur</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">sirsi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">manjguni</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">teerthalli</label>
              </div>
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg " type="submit" href="regestration_SP_Two.php">privious</button>
                <button class="btn btn-info btn-lg" type="submit">next</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>





