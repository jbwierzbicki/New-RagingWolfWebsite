<!doctype html>
<html><head>
<meta charset="UTF-8">
  <title>Alpha Tracking | Raging Wolf Solutions</title>
  <script src="dmxAppConnect/dmxAppConnect.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js" integrity="sha256-CutOzxCRucUsn6C6TcEYsauvvYilEniTXldPa6/wu0k=" crossorigin="anonymous"></script>
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
  <link rel="stylesheet" href="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.css">
  <script src="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.js" defer=""></script>
  <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer=""></script>
  <link rel="stylesheet" href="dmxAppConnect/dmxDatePicker/daterangepicker.min.css">
  <script src="dmxAppConnect/dmxDatePicker/daterangepicker.min.js" defer=""></script>
  <link rel="stylesheet" href="dmxAppConnect/dmxDatePicker/dmxDatePicker.css">
  <script src="dmxAppConnect/dmxDatePicker/dmxDatePicker.js" defer=""></script>
  <link rel="stylesheet" href="dmxAppConnect/dmxPreloader/dmxPreloader.css">
  <script src="dmxAppConnect/dmxPreloader/dmxPreloader.js" defer=""></script>
  <link rel="stylesheet" href="dmxAppConnect/dmxAnimateCSS/animate.min.css">
  <script src="dmxAppConnect/dmxAnimateCSS/dmxAnimateCSS.js" defer=""></script>
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
              <div class="modal" id="trackingmodal" is="dmx-bs4-modal" tabindex="-1" role="dialog" dmx-animate-enter="slideInDown">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <dmx-api-datasource id="trackingapi" is="dmx-fetch" dmx-bind:url="'https://ragingwolf.secure.force.com/services/apexrest/Account/' + trackform.alphatrackingnumber.value"></dmx-api-datasource>
                    <div class="modal-header bg-dark border-secondary">
                      <h5 class="modal-title text-light" dmx-text="trackform.alphatrackingnumber.value"></h5>
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
                              <td class="table-light">
                                {{trackingapi.data[0].CreatedDate}}</td>
                              <td class="table-light">{{trackingapi.data[0].FreightTM__Status__c}}</td>
                              <td class="table-light">{{trackingapi.data[0].Pickup_Arrival_Date__c}}</td>
                            </tr>
                            <tr>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-location-arrow"></i>&nbsp;Pickup Location</th>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-map-marker"></i>&nbsp;Destination</th>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-calendar-check-o"></i>&nbsp;Expected Delivery</th></tr>
                            <tr>
                              <td class="table-light" dmx-text="trackingapi.data[0].FreightTM__Pickup_Address__c">{{trackingapi.data[0].FreightTM__Pickup_City__c}}, {{trackingapi.data[0].FreightTM__Pickup_State__c}}</td>
                              <td class="table-light" dmx-text="trackingapi.data[0].FreightTM__Delivery_Address__c">{{trackingapi.data[0]. FreightTM__Delivery_City__c}}, {{trackingapi.data[0]. FreightTM__Delivery_State__c}}<br></td>
                              <td class="table-light" dmx-text="trackingapi.data[0].Delivery_Arrival_Date__c">Unavailable</td>
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
                              <td class="table-light"> {{trackingapi.data[0].Cust_Vis_LoadInfo__c}}</td>
                            </tr>
                            <tr>
                              <th scope="col" class="bg-secondary pt-2 pb-2 text-light"><i class="fa fa-exclamation-triangle"></i>&nbsp;Latest Updates</th></tr>
                            <tr>
                              <td class="table-light"> {{trackingapi.data[0].Order_Updates__c}}</td>
                            </tr></tbody>
                        </table>
                      </div>
                      <p class="text-white-50 font-italic mb-1">To receive the location of your shipment, use the <b class="text-warning">Request Location</b> button below.</p></div>
                    <div class="modal-footer bg-dark border-secondary">
                      <div class="d-flex justify-content-between w-100">
                        <a dmx-bind:href="mailto:support@ragingwolfsolutions.com?subject={{trackform.alphatrackingnumber.value}}%20Update%20Requested&amp;body=Please%20provide%20an%20update%20for%20the%20following%20shipment%3A%20{{trackform.alphatrackingnumber.value}}%0A%0A%0ASent%20via%20ragingwolfsolutions.com%2Falphatrack" dmx-on:click="requestlocation.show()"><button type="button" class="btn btn-warning font-weight-bold text-dark"><i class="fa fa-truck">&nbsp;</i>Request Location</button></a>
                        <button type="button" class="btn btn-outline-light pl-4 pr-4" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal" id="requestlocation" is="dmx-bs4-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Request Location</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>You will now be redirected to your default email client. If there is an issue opening the client, please email us directly at support@ragingwolfsolutions.com with your load reference number.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                  <input id="alphatrackingnumber" name="alphatrackingnumber" class="form-control mb-3" placeholder="Looks like XXXXX" dmx-bs-tooltip="&quot;You can find your Load Reference Number in the upper-right hand corner of your BOL&quot;" data-placement="left" data-msg-required="" is="dmx-input" data-msg-pattern="" data-trigger="click" type="number">
                  <div class="d-flex pt-2 justify-content-between align-items-end">
                    <a href="" dmx-on:mousedown="modal1.show()">
                      <p class="text-primary mb-2">Find my Load Reference Number</p></a>
                    <button id="trackingsubmit" class="btn btn-lg w-auto btn-red text-light pl-5 pr-5" data-target="#trackingmodal" dmx-on:mousedown="trackingmodal.show();trackingmodal.trackingapi.load({},true);trackingmodal.update()">Track &gt;&gt;</button></div>
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
