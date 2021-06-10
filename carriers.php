<!doctype html>
<html><head>
<meta charset="UTF-8">
  <title>Carriers | Raging Wolf Solutions</title>
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
  <script src="dmxAppConnect/dmxBootstrap4Modal/dmxBootstrap4Modal.js" defer=""></script>
  <meta name="description" content="Join our base of trusted partner carriers. The 'PACK' is moving freight all across the United States and Canada!">
  <script src="dmxAppConnect/bs-custom-file-input/bs-custom-file-input.min.js" defer=""></script>
  </head>
  <body is="dmx-app" id="index">
    <?php include 'component--header.php';?>
    <main class="contact--main">
      <section class="carriers--main--section">
        <div class="contact--main--section--container h-100 container-lg">
          <div class="row justify-content-center row-cols-1 w-100 mh-100">
            <div class="col-12 pt-5">
              <h1 class="text-light text-left">Would you like to move freight with us?</h1>
              <p class="text-white-50">The 'PACK' is always looking to expand its base of trusted, dedicated freight carrier partners. If you'd like to move with us, please fill out the form below.</p>
              <form id="carrierform">
                <div class="row">
                  <div class="col">
                    <div class="form-group col-6 pl-0">
                      <label for="input5" class="text-light">What is your name or company name?</label>
                      <input type="text" class="form-control" id="input5" name="input5" aria-describedby="input5_help" placeholder="Enter some text">
                      <small id="input5_help" class="form-text text-muted">Your input is very valuable.</small>
                    </div>
                    <div class="form-group col-6 pl-0">
                      <label for="input6" class="text-light">What is your email address?</label>
                      <input type="text" class="form-control" id="input6" name="input6" aria-describedby="input5_help" placeholder="Enter some text">
                      <small id="input5_help1" class="form-text text-muted">Your input is very valuable.</small>
                    </div>
                    <p class="text-light mb-2">W-9</p>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <input type="file" class="form-control" id="input1" name="input1" aria-describedby="input1_help">
                        <small id="input1_help" class="form-text text-muted">Select here your W-9 document for upload.</small>
                      </div>
                    </div>
                    <p class="text-light mb-2">Operating Authority</p>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <input type="file" class="form-control" id="input2" name="input2" aria-describedby="input1_help">
                        <small id="input1_help1" class="form-text text-muted">Select here your Operating Authority document for upload.</small>
                      </div>
                    </div>
                    <p class="text-light mb-2">Insurance Documentation</p>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <input type="file" class="form-control" id="input3" name="input3" aria-describedby="input1_help">
                        <small id="input1_help2" class="form-text text-muted">Select here your Insurance document for upload.</small>
                      </div>
                    </div>
                    <p class="text-light mb-2">Completed Carrier Agreement</p>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <input type="file" class="form-control" id="input4" name="input4" aria-describedby="input1_help">
                        <small id="input1_help3" class="form-text text-muted">Select here your Carrier Agreement document for upload.</small>
                      </div>
                    </div></div>
                </div>
              </form></div>
          </div>
        </div>
      </section>
    </main>
    <?php include 'component--footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="javascript/startquote.js"></script>
  </body></html>
