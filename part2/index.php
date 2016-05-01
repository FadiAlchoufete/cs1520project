<?php
/**
 * CS1520 Project
 *
 * @author Fadi Alchoufete <fba4@pitt.edu>
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DJ Fadi</title>

    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="DJ Fadi is available for weddings, birthdays, and much more in and around the Greater Pittsburgh area." />
    <meta name="keywords" content="dj,fadi,pittsburgh,wedding,music,arabic,english" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.bootstrap-autohidingnavbar.min.js"></script>
  </head>
  <body>
    <!-- BEGIN Main navigation -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DJ Fadi</a>
        </div>

        <div class="collapse navbar-collapse" id="main-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#locations">Locations</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END Main navigation -->

    <!-- BEGIN Main content -->
    <div class="container-fluid" id="main-content">
      <div class="row" id="main-header">
        <div class="col-md-12">
          <div class="title col-md-6 col-md-offset-3">
            <h1>DJ Fadi</h1>
            <h4>Music for all occasions. Playing the best English and Arabic music in and around the Greater Pittsburgh Area</h4>
            <a href="#about" class="btn btn-primary action-button">See More <span class="glyphicon glyphicon-chevron-down"></span></a>
          </div>
        </div>
      </div>

      <!-- BEGIN Section: About -->
      <div class="row row-inverse">
        <a name="about" class="lg-hidden md-hidden sm-hidden xs-hidden"></a>
        <div class="col-md-8 col-md-offset-2">
          <h1>About DJ Fadi</h1>

          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Available for All Occasions</h3>
              </div>
              <div class="panel-body">
                <p>Having a wedding? Birthday party? Bar mitzvah? Superbowl party? Don't waste time and energy looking anywhere else for your DJ! If your event is near Pittsburgh and you are in need of a DJ for a great price, <a href="#contact">contact me</a> below.</p>
              </div>
            </div><!-- .panel-primary -->
          </div><!-- .col-md-6 -->

          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Types of Music</h3>
              </div>
              <div class="panel-body">
                <p>We cater to any style occasion in many languages! You have the choice of any and all of the following options:</p>

                <ul>
                  <li>
                    English
                    <ul>
                      <li>Top 40</li>
                      <li>Country</li>
                      <li>Rock</li>
                      <li>Alternative</li>
                      <li>Many More!</li>
                    </ul>
                  </li>
                  <li>
                    Arabic
                    <ul>
                      <li>Levant Artists</li>
                      <li>Artists from Lebanon, Syria, and more</li>
                    </ul>
                  </li>
                  <li>Spanish</li>
                </ul>
              </div>
            </div><!-- .panel-primary -->
          </div><!-- .col-md-6 -->
        </div>
      </div>
      <!-- END Section: About -->

      <!-- BEGIN Section: Locations -->
      <div class="row" id="section-locations">
        <a name="locations" class="lg-hidden md-hidden sm-hidden xs-hidden"></a>
        <div class="col-md-3 col-sm-3">
          <div class="panel panel-primary location-info">
            <div class="panel-heading">
              <h3 class="panel-title">Locations</h3>
            </div>
            <div class="panel-body">
              <p>Available in many areas, including:</p>
              <ul>
                <li>Pittsburgh</li>
                <li>South-Eastern Ohio</li>
                <li>Northern West Virginia</li>
              </ul>
              <p>Curious if your area is covered? Feel free to ask <a href="#contact">here</a>.</p>
            </div>
          </div><!-- .panel-primary -->
        </div>
        <div class="col-md-8">
          <div id="gmap" style="height: 400px;margin-top:40px;"></div>
        </div>
      </div>
      <!-- END Section: Locations -->

      <!-- BEGIN Section: Contact -->
      <div class="row row-inverse">
        <a name="contact" class="lg-hidden md-hidden sm-hidden xs-hidden"></a>
        <div class="col-md-8 col-md-offset-2">
          <h1>Contact</h1>

          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Address</h3>
              </div>
              <div class="panel-body">
                <p>Sometimes sending paper copies is easier. Feel free to send to the following address:</p>
                <address>
                  <blockquote>
                    P.O. Box 51231
                    Pittsburgh, PA 15210
                  </blockquote>
                </address>
              </div>
            </div><!-- .panel-primary -->
          </div><!-- .col-md-6 -->

          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Email</h3>
              </div>
              <div class="panel-body">
                <p>Have any questions? Want to request a quote? Please use this form to contact me:</p>

                <!-- Shouldn't need the action, but keep it in case of no JS -->
                <form method="post" action="process-form.php" id="contact-form" novalidate="novalidate">
                  <div class="form-group">
                    <label class="control-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="e.g. John Doe" required />
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="e.g. johndoe@domain.tld" required />
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="message">Message</label>
                    <textarea id="message" name="message" id="message" class="form-control" rows="8" required></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
                </form>
              </div>
            </div><!-- .panel-primary -->
          </div><!-- .col-md-6 -->
        </div>
      </div>
      <!-- END Section: Contact -->

      <!-- BEGIN Footer -->
      <div class="footer">
        <div class="col-md-12">
          Copyright &copy; 2016. Fadi Alchoufete. All Rights Reserved.
        </div>
      </div>
      <!-- END Footer -->
    </div>
    <!-- END Main content -->


    <script type="text/javascript" src="js/form.validate.default.js"></script>
    <script type="text/javascript">
      // From https://css-tricks.com/snippets/jquery/smooth-scrolling/
      // For smooth scrolling
      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top - 45
              }, 1000);
              return false;
            }
          }
        });

        // Modified here
        $('a[href="#"]').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 1000);
          return false;
        });
      });

      // jQuery Validation of form
      $("#contact-form").submit(function(e) {
        e.preventDefault();

        if ($(this).valid()) {
          $.ajax({
            type: "POST",
            url: "process-form.php",
            data: $("#contact-form").serialize(),
            success: function() {
              alert("Thank you. Your request has submitted successfully");
              $("#contact-form").find("input,textarea").each(function() {
                $(this).val("");
              });
            },
            error: function(data) {
              alert(data.responseText);
            }
          });
        }
      });

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('gmap'), {
          center: {lat: 40.4136471, lng: -80.0304227},
          zoom: 7
        });

        var cityCircle = new google.maps.Circle({
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          center: {lat: 40.4136471, lng: -80.0304227},
          radius: 150000
        });
      }

      // Auto-hide navbar
      $(".navbar-fixed-top").autoHidingNavbar()
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcble0GJZI6BO2ZLT54AkaT0gPYNQ8zco&callback=initMap" async defer></script>
  </body>
</html>