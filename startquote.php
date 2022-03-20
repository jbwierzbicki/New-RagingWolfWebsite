<!doctype html>
<html><head>
<meta charset="UTF-8">
  <title>Start a Quote | Raging Wolf Solutions</title>
  <script src="dmxAppConnect/dmxAppConnect.js"></script>
<link href="http://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
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
  <meta name="description" content="Full service logistics provider, offering shipping and freight transportation solutions across the continental United States.">
  <meta name="keywords" content="quote
pricing
rate
freight forwarder
freight shipping
freight quote
3pl
logistics
cargo
trucking">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-147350949-1"></script>
  <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css">
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-147350949-1');
  </script>
  <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer=""></script>
  </head>
  <body is="dmx-app" id="index">
    <?php include 'component--header.php';?>
    <main class="startquote--main">
      <section class="startquote--main--section">
        <div class="container startquote--main--section--container h-100">
          <div class="row justify-content-center">
            <div class="col-auto col-12">
              <form id="form1" method="post" action="https://ragingwolf.secure.force.com/services/apexrest/newquote" post-data="json" is="dmx-api-form">
                <section id="quote1">
                  <h5 class="text-uppercase text-yellow">Request a Quote</h5>
                  <h1 class="text-light">We're happy to help!</h1>
                  <h5 class="mb-4 text-white-50">We'll just need some information to get started on your quote. Would you mind telling us...</h5>
                  <h5 class="text-light pt-2">What is your email address?</h5>
                  <input id="email" name="CustomerEmailc" type="email" class="form-control mb-3" placeholder="email@address.com" data-rule-email="">
                  <h5 class="text-light">Who are we addressing?</h5>
                  <input id="name" name="CustomerNamec" class="form-control mb-4" placeholder="Your name or company name" required="">
                  <div class="d-flex justify-content-end pt-2">
                    <button id="btn1" class="btn btn-lg pl-5 pr-5 w-auto btn-red text-light" onclick="quote1next()">Next &gt;&gt;</button></div>
                </section>
                <section id="quote2" class="style1">
                  <h5 class="text-uppercase text-yellow">Request a Quote</h5>
                  <h1 class="text-light">Pickup Information</h1>
                  <h5 class="mb-4 text-white-50">We'll just need some information to get started on your quote. Would you mind telling us...</h5>
                  <h5 class="text-light pt-2">Where is this picking up from?</h5>
                  <input id="pickuplocation" name="PickupLocationc" class="form-control mb-3" placeholder="City, State or ZIP" required="">
                  <h5 class="text-light">When does it need picked up?</h5>
                  <input id="pickupdatetime" name="PickupTimec" class="form-control mb-4" placeholder="Approximate date and time" required=""><div class="d-flex pt-2 justify-content-between"><button id="btn2" class="btn btn-lg pl-5 pr-5 w-auto text-light btn-dark" onclick="quote2back()">&lt;&lt; Back</button>
                  <button id="btn3" class="btn btn-lg pl-5 pr-5 w-auto btn-red text-light" onclick="quote2next()">Next &gt;&gt;</button>
                  </div></section>
                <section id="quote3">
                  <h5 class="text-uppercase text-yellow">Request a Quote</h5>
                  <h1 class="text-light">Delivery Information</h1>
                  <h5 class="mb-4 text-white-50">We'll just need some information to get started on your quote. Would you mind telling us...</h5>
                  <h5 class="text-light pt-2">Where is this shipment delivering to?</h5>
                  <input id="deliverylocation" name="DeliveryLocationc" class="form-control mb-3" placeholder="City, State or ZIP" required="">
                  <h5 class="text-light">When does it need to be delivered?</h5><input id="deliverydatetime" name="DeliveryTimec" class="form-control mb-4" placeholder="Approximate date and time" required="">
                  <div class="d-flex pt-2 justify-content-between"><button id="btn4" class="btn btn-lg pl-5 pr-5 w-auto text-light btn-dark" onclick="quote3back()">&lt;&lt; Back</button>
                    <button id="btn5" class="btn btn-lg pl-5 pr-5 w-auto btn-red text-light" onclick="quote3next()">Next &gt;&gt;</button>
                  </div></section>
                <section id="quote4">
                  <h5 class="text-uppercase text-yellow">Request a Quote</h5>
                  <h1 class="text-light">Additional Details</h1>
                  <h5 class="mb-4 text-white-50">We'll just need some information to get started on your quote. Would you mind telling us...</h5>
                  <h5 class="text-light pt-2">Dimensions, weight, and number of pallets?</h5>
                  <input id="dimensions" name="CommodityDetailsc" class="form-control mb-3" placeholder="We'll use this to determine the type of transport needed">
                  <h5 class="text-light">Preferred transport or additional notes?</h5><textarea id="additionaldetails" class="form-control" name="AdditionalNotesc"></textarea>
                  <div class="d-flex justify-content-between mt-4 pt-2"><button id="btn6" class="btn btn-lg pl-5 pr-5 w-auto text-light btn-dark" onclick="quote4back()">&lt;&lt; Back</button>
                    <button id="btn6" class="btn btn-lg pl-5 pr-5 w-auto btn-red text-light" onclick="quote4submit()" type="submit">Submit &gt;&gt;</button>
                  </div></section>
              </form>
              <div class="justify-content-center flex-column" id="quotecomplete">
                <h1 class="text-yellow text-center text-success mb-4"><i class="fa fa-check-circle-o fa-3x"></i></h1>
                <h1 class="text-light text-center">Your quote has been submitted!</h1>
                <h5 class="text-center text-white-50">Check your email for follow-up information and pricing shortly.</h5>
              </div>
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
