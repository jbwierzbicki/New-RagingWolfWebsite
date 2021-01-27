<!-- Wappler include  head-page="services-customized-services.php" appconnect="local" is="dmx-app" bootstrap4="cdn" fontawesome_4="cdn" jquery_slim_33="cdn" components="{&quot;dmxBootstrap4Modal&quot;:{},&quot;dmxAutocomplete&quot;:{},&quot;dmxValidator&quot;:{},&quot;dmxAnimateCSS&quot;:{}}" id="compquote"-->
<link rel="stylesheet" href="css/stylesheet.css">
  <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

<div class="row align-items-end justify-content-center h-100 email--row ml-0 mr-0">
  <div class="h-auto email--row--col offset-2 pl-sm-5 pr-sm-5 ml-0 mr-0 pt-3 pb-3 pl-4 pr-4">
    <h4 class="text-center email--row--col--h4 mb-1 pl-2 pr-2">Get started here for your fast, free quote.</h4>
    <h6 class="text-center email--row--col--h6 mb-2 pb-0">We just need your email and some additional information.</h6>
    <form id="form1" action="https://www.formbackend.com/f/adf44502c71b20a3" method="post" is="dmx-api-form" post-data="json" dmx-on:submit="miniquote.hide();miniquoteconfirmation.show();input1.setValue(&quot;&quot;)">
      <div class="form-row justify-content-center">
                  <div class="col-12">
                    <div class="form-group input-group col pl-1 pr-1">
                      <input class="form-control font-weight-bold" id="input1" name="emailtext" aria-describedby="input1_help" placeholder="Your email address" data-msg-alphanumeric="" is="dmx-input" dmx-on:keydown.enter="form1.miniquote.show()">
                      <button id="btn1" class="btn input-group-append text-white pl-3 pr-3" data-toggle="modal" data-target="#miniquote" dmx-on:mousedown="form1.miniquote.show()"><i class="fa fa-envelope"></i></button>
                    </div>
                    </div>
                </div>
                <div class="modal" id="miniquote" is="dmx-bs4-modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-nero border-dark pb-2">
                        <h5 class="modal-title text-light">Let's get started</h5>
                        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body bg-nero text-light">
                        <p class="mb-2">Your Email</p>
                        <input id="text1" name="email" type="email" class="form-control mb-3" data-rule-email="" required="" data-msg-required="An email address is required." data-msg-email="Please provide a valid email address." dmx-bind:value="input1.value">
                        <p class="mb-2">Your request or shipment details</p>
                        <textarea id="text2" class="form-control" name="quotemessage" required="" data-msg-required="We need some information here, please!"></textarea>
                      </div>
                      <div class="modal-footer bg-nero border-dark">
                        <button class="btn btn-red text-light pl-4 pr-4" type="submit">Send &gt;&gt;</button>
                      </div>
                    </div>
                  </div>
                </div>
    </form>
  </div>
  <div class="modal" id="miniquoteconfirmation" is="dmx-bs4-modal" tabindex="-1" role="dialog" dmx-animate-enter="zoomIn" dmx-on:hide-bs-modal="form1.reset()">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header bg-nero border-dark pb-2">
          <h5 class="modal-title text-light">Thank you</h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body bg-nero text-light">
          <h1 class="text-center text-success mb-3"><i class="fa fa-check-circle-o fa-3x"></i></h1>
          <h2 class="text-center">Your message was sent.</h2>
          <p class="mb-2 text-center text-white-50">Check your email shortly for a response from our team</p>
        </div>
      </div>
    </div>
  </div></div>