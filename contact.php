<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>PMR Builder - Engineers &amp; Builders</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="PMR Builder Chennai Construction">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <style>
      #html-spinner, #svg-spinner{
  -webkit-transition-property: -webkit-transform;
  -webkit-transition-duration: 1.2s;
  -webkit-animation-name: rotate;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  
  -moz-transition-property: -moz-transform;
  -moz-animation-name: rotate; 
  -moz-animation-duration: 1.2s; 
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  
  transition-property: transform;
  animation-name: rotate; 
  animation-duration: 1.2s; 
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@-webkit-keyframes rotate {
    from {-webkit-transform: rotate(0deg);}
    to {-webkit-transform: rotate(360deg);}
}

@-moz-keyframes rotate {
    from {-moz-transform: rotate(0deg);}
    to {-moz-transform: rotate(360deg);}
}

@keyframes rotate {
    from {transform: rotate(0deg);}
    to {transform: rotate(360deg);}
}
    </style>
</head>
<body>
  <div class="body-inner">

  <div w3-include-html="templates/top-bar.html"></div>
    <!--/ Topbar end -->
<!-- Header start -->
<div w3-include-html="templates/header.html"></div>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Reaching our Office</h2>
        <h3 class="section-sub-title">Find Our Location</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visit Our Office</h4>
            <p>123/32A, Ellai amman Kovil Street, Vannanthurai, Adayar, Chennai</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Email Us</h4>
            <p>contact@pmrbuilder.in</p>
            <p>pmrbuilder@gmail.com</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Call Us</h4>
            <p>(+91) 98402 78261</p>
            <p>(044) 42323182</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="google-map">
      <div id="map" class="map" data-latitude="12.999088" data-longitude="80.263136" data-marker="images/marker.png" data-marker-name="PMR"></div>
    </div>

    <div class="gap-40"></div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">We love to hear</h3>
        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        <form id="contact-form" method="post" role="form" onsubmit='event.preventDefault(); return contactFormValidate();' >
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="text">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Subject</label>
                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"></textarea>
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit" id="sendButton">Send Message</button>
            <button class="btn btn-success solid blank" id="sentButton" disabled>MESSAGE SENT</button>
            <button class="btn btn-primary solid blank" id="sendingButton" disabled>Sending Message &nbsp;<svg id="svg-spinner" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 48 48">
  <circle cx="24" cy="4" r="4" fill="#fff"/>
  <circle cx="12.19" cy="7.86" r="3.7" fill="#fffbf2"/>
  <circle cx="5.02" cy="17.68" r="3.4" fill="#fef7e4"/>
  <circle cx="5.02" cy="30.32" r="3.1" fill="#fef3d7"/>
  <circle cx="12.19" cy="40.14" r="2.8" fill="#feefc9"/>
  <circle cx="24" cy="44" r="2.5" fill="#feebbc"/>
  <circle cx="35.81" cy="40.14" r="2.2" fill="#fde7af"/>
  <circle cx="42.98" cy="30.32" r="1.9" fill="#fde3a1"/>
  <circle cx="42.98" cy="17.68" r="1.6" fill="#fddf94"/>
  <circle cx="35.81" cy="7.86" r="1.3" fill="#fcdb86"/>
</svg></button>
          </div>
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<div w3-include-html="templates/footer.html"></div>
<!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js" defer></script>
  <!-- Template custom -->
  <script src="js/script.js"></script>
  <script src="js/includeHtml.js"></script>
  <script>
      // Validate contact form and Trigger php email code
    function contactFormValidate () {
    let name = $('#name').val();  
    let email = $('#email').val();
    let subject = $('#subject').val();
    let msg = $('#message').val();

    let emailPattern = /^\S+@\S+\.\S+$/;
    
    // Input fields validation
    
    if(name == '' || name == null) {
      Swal.fire({
        'title':'Missing',
        'text':'Please enter your name',
        'icon':'error'
      });
      return false;
    }

    if(email == '' || email == null) {
      Swal.fire({
        'title':'Missing',
        'text':'Please enter your email address',
        'icon':'error'
      });
      return false;
    } else if (!emailPattern.test(email)){
      Swal.fire({
        'title':'Incorrect Format',
        'text':'Please check your email address',
        'icon':'error'
      });
      return false;
    }
    if(subject == '' || subject == null) {
      Swal.fire({
        'title':'Missing',
        'text':'Please enter the subject',
        'icon':'error'
      });
      return false;
    }
    if(msg == '' || msg == null) {
      Swal.fire({
        'title':'Missing',
        'text':'Please enter your message',
        'icon':'error'
      });
      return false;
    }
    // enabling sending animation
    $('#sendButton').hide();
    $('#sendingButton').show();
    $('#sentButton').hide();
    
    $.post('contact_action.php', {
        'name':name,
        'email':email,
        'subject': subject,
        'message': msg
    }, function(data, status){
        if(status){
            let newdata = JSON.parse(data);
            if (newdata.status){
                Swal.fire({
                'title':'Success',
                'text':'Email Sent',
                'icon':'success'
            });
            // enabling sent button
            $('#sendButton').hide();
            $('#sendingButton').hide();
            $('#sentButton').show();
            clearForm();
            } else {
                Swal.fire({
                'title':'Error',
                'text':'Error sending mail.',
                'icon':'error'
            });
            console.log(newdata.error);
            // showing contact on button, after error.
            $('#sendButton').hide();
            $('#sendingButton').hide();
            $('#sentButton').text('CONTACT 98402 78261');
            $('#sentButton').show();
            clearForm();
            }
            
        } else {
            let newdata = JSON.parse(data);
            Swal.fire({
                'title':'Ajax Error',
                'text':'Error sending mail.',
                'icon':'error'
            });
            console.log(newdata)
            // showing contact on button, after error.
            $('#sendButton').hide();
            $('#sendingButton').hide();
            $('#sentButton').text('Call 98402 78261');
            $('#sentButton').show();
        }
    });
    
  }

  function clearForm(){
    $('#name').val() = '';
    $('#email').val() = '';
    $('#subject').val() = '';
    $('#message').val() = '';
  }

  </script>
  </div><!-- Body inner end -->
  </body>

  </html>