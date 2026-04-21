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

    </head>
    <body>
       
    <header>
        <nav class="navbar navbar-expand-lg custom-nav">
            <?php include __DIR__ . '/includes/nav.php'; ?>
        </nav>
            
        <img src="images/lake.jpg" alt="Lake with dock">
            
        <div id="hero" class="px-4 py-5 text-center"> 
            <div class="col-lg-6 mx-auto"> 
                <h1 class="display-5 fw-bold">Your Weekend Getaway</h1> 
                <p class="lead mb-4">Trade stressful work for the quiet charm of a cozy lakeside cottage or a rustic woodland lodge. Surrounded by trees and water, this is where you can truly unplug. Whether you’re seeking a romantic escape, a family getaway, or a weekend with friends, these inviting retreats offer the perfect mix of comfort and nature—your own private slice of serenity, far from the noise and close to what matters most.</p> 
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
                    <a class="btn btn-primary" href="features.php" role="button">Features</a>
                    <a class="btn btn-primary" href="about.php" role="button">About</a> 
                </div> 
            </div> 
        </div>
    </header>

    <section class="container py-5">
        <h2 class="text-center mb-4">Explore Our Stays</h2>
        <div class="row">
            <div class="col-md-6 transition-hover">
                <img src="images/cottages/lakeside/gooseberry.jpg" class="img-fluid rounded mb-3" alt="Cottage">
                <div class="mask">
                    <h3>Lakeside Cottage</h3>
                    <p>Perfect for couples or small families.</p>
                    <a class="btn btn-light" href="booking.php" role="button">Book Now</a>
                </div>
                </div>
                <div class="col-md-6 transition-hover">
                <img src="images/cottages/woods/sugar-maple.jpg" class="img-fluid rounded mb-3" alt="Cabin">
                <div class="mask">
                    <h3>Woodland Cabin</h3>
                    <p>Nestled in the trees for total privacy.</p>
                    <a class="btn btn-light" href="book.php" role="button">Book Now</a>
                </div>
            </div>
        </div>
    </section>

     <section class="container py-5">
        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="images/cottages/lakeside/kakabeka.jpg" class="img-fluid rounded shadow" alt="Lakeside Deck">
            </div>

            <div class="col-md-6 text-center text-md-start mt-4 mt-md-0">
                <h2 class="mb-3">Everything You Need for a Perfect Stay</h2>
                <p class="mb-4">
                    From private lake access to cozy indoor spaces, explore the details that make our cabins and lodges feel like home.
                </p>

                <ul class="list-unstyled mb-4">
                    <li>Lakefront access</li>
                    <li>Fire pits & outdoor seating</li>
                    <li>Fully furnished interiors</li>
                    <li>Nature trails nearby</li>
                </ul>

                <a href="features.php" class="btn btn-primary btn-lg">Explore Features</a>
            </div>

        </div>
    </section>

        <section class="py-5 text-center text-white owners">
            <div class="owners-overlay"></div>

            <div class="position-relative container">
                <h2 class="display-5 fw-bold mb-3">Discover the Heart of Up North Lodge</h2>
                <p class="lead mb-4">
                From our story to your stay, every corner is designed for comfort, connection, and memories that last.
                </p>
                <a href="about.php" class="btn btn-outline-light btn-lg">Learn Our Story</a>
            </div>
        </section>

        <!--Footer-->
        <div class="container">
            <?php include __DIR__ . '/includes/footer.php'; ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>