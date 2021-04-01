<!doctype html>
<html><head>
<meta charset="UTF-8">
  <title>Alpha Tracking | Raging Wolf Solutions</title>
  <script src="dmxAppConnect/dmxAppConnect.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="dmxAppConnect/dmxRouting/dmxRouting.js" defer=""></script>
  <script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer=""></script>
    <link rel="stylesheet" href="css/stylesheet.css">
  <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="manifest" href="icons/site.webmanifest">
<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#c4231c">
<link rel="shortcut icon" href="icons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/icons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
  <script src="dmxAppConnect/dmxBootstrap4Alert/dmxBootstrap4Alert.js" defer=""></script>
  <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css">
  <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer=""></script>
  <script src="dmxAppConnect/dmxBootstrap4Tooltips/dmxBootstrap4Tooltips.js" defer=""></script>
  <script src="dmxAppConnect/dmxBootstrap4Modal/dmxBootstrap4Modal.js" defer=""></script>
  </head>
  <body is="dmx-app" id="index">
    <?php include 'component--header.php';?>
    <main class="contact--main">
      <section class="contact--main--section">
        <div class="container contact--main--section--container h-100">
          <div class="row justify-content-center">
            <div class="col-auto col-12">
              <div class="modal" id="modal2" is="dmx-bs4-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Currently Unavailable</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="mb-2">Automated tracking is currently unavailable. To receive an update or ask any other questions about this shipment, email us directly at&nbsp;<a href="#"><b>support@ragingwolfsolutions.com</b></a></p>
                      <p class="text-danger mb-1">Please remember to include your Load Reference Number.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="mailto:support@ragingwolfsolutions.com">
                        <button type="button" class="btn btn-danger"><i class="fa fa-envelope"></i>&nbsp;Send Email</button></a>
                      <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal" id="modal1" is="dmx-bs4-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Finding Your Load Reference Number</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/BOL-LoadRef.jfif" class="img-fluid mb-3">
                      <p class="mb-1">Your Load Reference Number is located in the upper right hand corner of the Bill of Lading.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal" id="trackingmodal" is="dmx-bs4-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-dark border-secondary">
                      <h5 class="modal-title text-light">24745</h5>
                      <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body bg-dark">
                      <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                          <thead>
                            <tr>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-pencil"></i>&nbsp;Date Created</th>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-info-circle"></i>&nbsp;Status</th>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-calendar-o"></i>&nbsp;Pickup Date</th></tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="table-light">Unavailable</td>
                              <td class="table-light">Unavailable</td>
                              <td class="table-light">Unavailable</td>
                            </tr>
                            <tr>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-location-arrow"></i>&nbsp;Pickup Location</th>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-map-marker"></i>&nbsp;Destination</th>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-calendar-check-o"></i>&nbsp;Expected Delivery</th></tr>
                            <tr>
                              <td class="table-light">Unavailable</td>
                              <td class="table-light">Unavailable<br></td>
                              <td class="table-light">Unavailable</td>
                            </tr></tbody>
                        </table>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-borderless">
                          <thead>
                            <tr>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-pencil-square-o"></i>&nbsp;Order Notes / Information</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="table-light">Unavailable</td>
                            </tr>
                            <tr>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-exclamation-triangle"></i>&nbsp;Latest Updates</th></tr>
                            <tr>
                              <td class="table-light">No updates to display.</td>
                            </tr></tbody>
                        </table>
                      </div>
                      <p class="text-white-50 font-italic mb-1">To receive the location of your shipment, use the <b class="text-warning">Request Location</b> button below.</p></div>
                    <div class="modal-footer bg-dark border-secondary">
                      <div class="d-flex justify-content-between w-100">
                        <button type="button" class="btn btn-warning font-weight-bold text-dark"><i class="fa fa-truck">&nbsp;</i>Request Location</button>
                        <button type="button" class="btn btn-outline-light pl-4 pr-4" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <form id="trackform">
                <section id="contact1">
                <h5 class="text-uppercase text-yellow">alpha tracking</h5>
                <h1 class="text-light">Want to see your shipment status?</h1>
                <h5 class="mb-4 text-white-50">Alpha Tracking tells you the status of your shipment in our system. We just need to know...</h5>
                  <h5 class="text-light pt-2">What is your Load Reference Number?</h5>
                  <input id="alphatrackingnumber" name="alphatrackingnumber" class="form-control mb-3" placeholder="Looks like XXXXX" dmx-bs-tooltip="&quot;You can find your Load Reference Number in the upper-right hand corner of your BOL&quot;" data-placement="left" data-msg-required="" is="dmx-input" data-msg-pattern="" data-trigger="click">
                  <div class="d-flex pt-2 justify-content-between align-items-end">
                    <a href="" dmx-on:mousedown="modal1.show()">
                      <p class="text-primary mb-2">Find my Load Reference Number</p></a>
                    <button id="trackingsubmit" class="btn btn-lg w-auto btn-red text-light pl-5 pr-5" dmx-on:click="modal2.show()">Track &gt;&gt;</button></div>
                </section>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include 'component--footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="javascript/startquote.js"></script>
  </body></html>
