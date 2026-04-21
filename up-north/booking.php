<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Up North Lodge and Resort</title>
        <link rel="icon" type="image/x-icon" href="up-north-logo.png">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    </head>
    <body>
       
    <header>
        <nav class="navbar navbar-expand-lg custom-nav">
            <?php include __DIR__ . '/includes/nav.php'; ?>
        </nav>
            
        <img src="images/lake.jpg" alt="Lake with dock">
            
        <div id="hero" class="px-4 py-5 text-center"> 
            <div class="col-lg-6 mx-auto"> 
                <h1 class="display-5 fw-bold">Ready to Book Your Stay?</h1> 
                <p class="lead mb-4">We'd love to have you stay with us! Take a look at our houses below and pick your date!</p> 
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
                    <a class="btn btn-primary" href="features.html" role="button">Features</a>
                    <a class="btn btn-primary" href="about.html" role="button">About</a> 
                </div> 
            </div> 
        </div>
    </header>

    <div id="filters" class="row g-3 mb-4 ">

    <!-- View -->
    <div class="col-md-3">
        <select id="view" class="form-select-filter">
            <option value="">All Views</option>
            <option value="1">Lake</option>
            <option value="2">Woods</option>
        </select>
    </div>

    <!-- Type -->
    <div class="col-md-3">
        <select id="type" class="form-select-filter">
        <option value="">All Types</option>
        <option value="1">Cabin</option>
        <option value="2">House</option>
        <option value="3">Lodge</option>
        </select>
    </div>

    <!-- Sleeps -->
    <div class="col-md-3">
        <select id="sleeps" class="form-select-filter">
            <option value="">Any Size</option>
            <option value="2">2+</option>
            <option value="4">4+</option>
            <option value="6">6+</option>
        </select>
    </div>

    <!-- Price -->
    <div class="col-md-3">
        <select id="price" class="form-select-filter">
            <option value="">Any Price</option>
            <option value="200">Under $200</option>
            <option value="300">Under $300</option>
            <option value="400">Under $400</option>
        </select>
    </div>

</div>


        <section class="container py-5">
            <h2 class="text-center mb-5">Our Properties</h2>
            <div id="results" class="row row-cols-1 row-cols-md-3 g-4">
                
            </div>

        </section>

        <section class="container py-5">
            <h2 class="text-center mb-5">Book Your Stay</h2>
            <p class="text-center">Select a property above and fill in your information below to complete your booking.</p>
            <form id="bookingForm" class="row g-3" action="confirmation.php" method="POST">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter your first name" required>
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter your last name" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="col-md-6"              >
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                </div>
                <div class="col-md-6">
                    <label for="checkin" class="form-label">Check-in Date</label>
                    <input type="text" name="checkin" id="checkin" class="form-control" placeholder="Select check-in date" required>
                </div>
                <div class="col-md-6">
                    <label for="checkout" class="form-label">Check-out Date</label>
                    <input type="text" name="checkout" id="checkout" class="form-control" placeholder="Select check-out date" required>
                </div>
                <input type="hidden" id="accommodation" name="accommodation">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </div>
            </form>

        <!--Footer-->
        <div class="container">
            <?php include __DIR__ . '/includes/footer.php'; ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="booking.js"></script>
    </body>
</html>