<html><head><link rel="stylesheet" href="css/stylesheet.css">
  <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
</head><!-- Wappler include  head-page="index.php" appconnect="local" is="dmx-app" bootstrap4="cdn" fontawesome_4="cdn" jquery_slim_33="cdn" components="{&quot;dmxBootstrap4Modal&quot;:{}}"-->
<main class="index--main">
  <div class="container-fluid d-lg-none style1 index--main--container-callus">
    <h6 class="text-danger font-weight-bold text-center mb-0 pt-1 pb-1">Give us a call: <a href="tel:8559653725">(855) 965 - 3725</a></h6>
  </div>
  <section class="index--main--section">
    <div class="modal" id="modal1" is="dmx-bs4-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-light bg-nero border-dark d-flex pb-2">
            <h5 class="modal-title text-center w-100">OUR SERVICES</h5>
          </div>
          <div class="modal-body bg-nero">
            <div class="d-flex flex-column">
              <a href="https://ragingwolfsolutions.com/services-expedited-ground" class="d-flex w-100 mb-2">
                <button id="btn1" class="btn w-100 btn-outline-light">Expedited Ground</button>
              </a>
              <a href="https://ragingwolfsolutions.com/services-trucking" class="d-flex w-100 mb-2">
                <button id="btn2" class="btn w-100 btn-outline-light">Trucking</button>
              </a>
              <a href="https://ragingwolfsolutions.com/services-domestic-air-freight" class="d-flex w-100 mb-2">
                <button id="btn3" class="btn w-100 btn-outline-light">Domestic Air Freight</button>
              </a>
              <a href="https://ragingwolfsolutions.com/services-customized-services" class="d-flex w-100">
                <button id="btn4" class="btn w-100 btn-outline-light">Customized Services</button>
              </a>
            </div>
          </div>
          <div class="modal-footer bg-nero border-dark">
            <button type="button" class="btn w-100 btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container wappler-block d-flex align-items-center index--main--section--container">
      <div class="row justify-content-center index--main--section--container--row">
            <div class="col-12 col-md-4 col-xl-3 text-sm-left text-left text-md-center index--main--section--container--row--col">
              <img src="assets/images/rws_logo.svg" class="w-100 mb-3 index--main--section--container--row--col--img">
            </div>
            <div class="col-12 col-md-8 col-xl-7 pt-1 pb-1 index--main--section--container--row--col2">
              <h1 class="text-light mt-0">We are the Alpha Leaders in Logistics.</h1>
              <h5 class="text-light mb-4">With our comprehensive freight transportation services, Raging Wolf Solutions offers nation-wide shipping and a wide array of full-service solutions. Learn more or get your free quote today!</h5>
              <div class="btn-group index--main--section--container--row--col2--btngroup" role="group" aria-label="Button Group">
                <button id="ourservices" class="btn text-white index--main--section--container--row--col2--btngroup--btn1" data-toggle="modal" data-target="#modal1">Our services</button>
                <a href="startquote.php"><button id="startaquote" class="btn text-white index--main--section--container--row--col2--btngroup--btn2">Start a quote
                  </button></a>
              </div></div>
      </div>
        </div>
        <div class="container wappler-block index--main--section--container2 pt-3 pl-2 pr-2">
          <?php include 'component--email-submission.php';?>
          
        </div></section>
    </main>