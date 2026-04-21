<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About Us</title>
        <link rel="icon" type="image/x-icon" href="up-north-logo.png">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="turn.min.js"></script>

    </head>
    <body>
       
        <header>
            <nav class="navbar navbar-expand-lg custom-nav">
            <?php include __DIR__ . '/includes/nav.php'; ?>
        </nav>
            
            <img src="images/big-owners.JPEG" alt="The Owners of Up North Lodge and Resort">
            
            <div id="hero" class="px-4 py-5 text-center"> 
                <div class="col-lg-6 mx-auto"> 
                    <h1 class="display-5 fw-bold">Our Story</h1> 
                    <p class="lead mb-4">What started in band class as a group of friends turned into a team that built something real together. Mandy brings the vision and adventure, Ada creates the excitement through events and marketing, Fin makes sure everything is set up for residents to enjoy, and Megan keeps it all financially on track. Together, we combined our strengths to turn a simple idea into something meaningful.</p> 
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
                        <a class="btn btn-primary" href="features.php" role="button">Features</a>
                        <a class="btn btn-primary" href="booking.php" role="button">Book Now</a> 
                    </div> 
                </div> 
            </div>
        </header>

        <div id="magazine-container">
            <div id="magazine">
                <div style="background-image:url(images/1.png);"></div>
                <div style="background-image:url(images/2.png);"></div>
                <div style="background-image:url(images/3.png);"></div>
                <div style="background-image:url(images/4.png);"></div>
                <div style="background-image:url(images/5.png);"></div>
                <div style="background-image:url(images/6.png);"></div>
            <div style="background-image:url(images/7.png);"></div>
                <div style="background-image:url(images/8.png);"></div>
                <div style="background-image:url(images/9.png);"></div>
                <div style="background-image:url(images/10.png);"></div>
            </div>

            <div class="d-flex justify-content-center my-4">
                <button onclick="$('#magazine').turn('previous')">Previous</button>
                <button onclick="$('#magazine').turn('next')">Next</button>
            </div>
        </div>

        <section class="container py-4 text-center green-bg mt-4">
            <h2 class="mb-4">What Guests Are Saying</h2>

            <div id="testimonial-box">
                <p class="testimonial active">“Absolutely beautiful. The lake views were stunning and the cabin felt like home.”<br>-Ashley</p>
                <p class="testimonial">“Perfect weekend getaway. Quiet, peaceful, and the bonfire nights were unforgettable.”<br>-Michael</p>
                <p class="testimonial">“Everything was so cozy and well thought out. Already planning our next trip back!”<br>-Sarah</p>
            </div>

            <div class="dots">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
            </div>
        </section>

        <section class="container py-5">
            <h2 class="text-center mb-5">Find Us</h2>

            <div class="row align-items-stretch">

                <div class="col-md-6 mb-4 mb-md-0">
                <div class="h-100">
                    <iframe 
                    src="https://www.google.com/maps?q=Menomonie,WI&output=embed"
                    width="100%" 
                    height="100%" 
                    style="border:0; min-height:350px; border-radius:10px;" 
                    allowfullscreen="" 
                    loading="lazy">
                    </iframe>
                </div>
                </div>

                <div class="col-md-6 d-flex flex-column justify-content-center">
                <h3 class="mb-3">Up North Lodge & Resort</h3>
                
                <p class="mb-2">
                    📍 123 Lakeview Drive<br>
                    Menomonie, WI
                </p>

                <p class="mb-2">
                    📞 (123) 456-7890
                </p>

                <p class="mb-4">
                    ✉️ info@upnorthlodge.com
                </p>

                <p class="mb-4">
                    Whether you have questions, need help planning your stay, or just want to learn more, we’d love to hear from you.
                </p>

                <a href="mailto:info@upnorthlodge.com" class="btn btn-primary">
                    Contact Us
                </a>
                </div>

            </div>
        </section>

        <!--Footer-->
        <div class="container">
            <?php include __DIR__ . '/includes/footer.php'; ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="script.js"></script>

<script type="text/javascript">
  $(window).ready(function() {
    var displayMode = ($(window).width() <= 768) ? 'single' : 'double';
    $('#magazine').turn({
      display: displayMode,
      acceleration: true,
      gradients: !$.isTouch,
      elevation:50,
      when: {
        turned: function(e, page) {
          /*console.log('Current view: ', $(this).turn('view'));*/
        }
      }
    });

    // Responsive: change display mode on resize
    $(window).on('resize', function() {
      var newMode = ($(window).width() <= 768) ? 'single' : 'double';
      $('#magazine').turn('display', newMode);
    });
  });

  $(window).bind('keydown', function(e){
    if (e.keyCode==37)
      $('#magazine').turn('previous');
    else if (e.keyCode==39)
      $('#magazine').turn('next');
  });
</script>


    </body>
</html>

