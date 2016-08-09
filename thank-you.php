


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        🌴 Coastal Coding | School For Software Engineering
      
    </title>

    
      <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
      <link href="assets/css/toolkit-startup.css" rel="stylesheet">
      <link href="assets/css/application-startup.css" rel="stylesheet">
    

    

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
    </style>
  </head>


<body>

<div class="stage" id="stage">

<div class="block block-inverse block-fill-height app-header"
     style="background-image: url(assets/img/startup-1.jpg);">

  <nav class="navbar navbar-transparent navbar-fixed-top navbar-padded app-navbar p-t-md">
  <div class="container">
    <div class="navbar-header">
        <strong style="background: #fff; padding: 12px; border-radius: 4px; color: #28669F;">
          🌴 Coastal Coding
        </strong>
    </div>
  </div>
</nav>

  <div class="block-xs-middle p-b-lg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="block-title m-b-sm">You'll hear from us soon.</h1>
          <p class="lead m-b-md text-muted">We'll let you know when you can check out the details on the full course expectations, example porfolios, professor and assistant bios, classroom details, and requirements.</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
<?php
require 'vendor/autoload.php';
$sendgrid = new SendGrid('trentellingsen', 'cc4GOD!!');

$email = new SendGrid\Email();
$email->addTo('trentellingsen@gmail.com')
    ->setFrom('me@bar.com')
    ->setSubject('Subject goes here')
    ->setText('Hello World!')
    ->setHtml('<strong>Hello World!</strong>');

$sendgrid->send($email);
?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
  </body>
</html>