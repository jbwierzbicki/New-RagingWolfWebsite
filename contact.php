<!doctype html>
<html><head>
<meta charset="UTF-8">
  <title>Contact Us | Raging Wolf Solutions</title>
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
  <meta name="description" content="Full service logistics provider, offering shipping and freight transportation solutions across the continental United States.">
  <meta name="keywords" content="freight forwarder
freight shipping
freight quote
3pl
logistics
cargo
trucking
contact">
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script>
    $('#contactform').submit(function(){    
      if ($('input#website').val().length != 0) {
        return false;
      } 
    });
  </script>
  <!-- 
  <script>
    function onSubmit(token) {
      document.getElementById("contactform").submit();
   }
 </script>
-->
  </head>
  <body is="dmx-app" id="index">
    <?php include 'component--header.php';?>
    <main class="contact--main">
      <section class="contact--main--section">
        <div class="container contact--main--section--container h-100">
          <div class="row justify-content-center">
            <div class="col-auto col-12">
              <form id="contactform" method="post" action="https://www.formbackend.com/f/ca7ba20b52e5799d">
              <section id="contact1">
                <h5 class="text-uppercase text-yellow">Contact Us</h5>
                <h1 class="text-light">Need to reach us?</h1>
                <h5 class="mb-4 text-white-50">We are standing by 24/7 to address any of your questions or concerns. Just tell us...</h5>
                <h5 class="text-light pt-2">What is your name?</h5>
                <input id="Name" name="Name" class="form-control mb-3" placeholder="Your name or company name">
                <h5 class="text-light">What is your email address?</h5>
                <input id="email" name="email" class="form-control mb-3" placeholder="email@address.com" type="email" data-rule-email="" required="" data-msg-required="An email is required.">
                <h5 class="text-light">How can we help you?</h5>
                <textarea id="text1" class="form-control" name="Message" required="" data-msg-required="Please provide details for your request."></textarea>
                <input id="website" name="website" type="text" value="">
                <div class="d-flex justify-content-end pt-2">
                  <button id="contactsubmit" class="btn btn-lg w-auto btn-red text-light mt-4 pl-5 pr-5" type="submit">Send &gt;&gt;</button></div>
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
