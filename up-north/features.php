<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Features</title>
        <link rel="icon" type="image/x-icon" href="up-north-logo.png">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/ui/1.14.2/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
       
        <header>
            <nav class="navbar navbar-expand-lg custom-nav">
            <?php include __DIR__ . '/includes/nav.php'; ?>
        </nav>
                
            <img src="images/cottages/lakeside/cascade.png" alt="Lake Cascade" class="header-image">
                
            <div id="hero" class="px-4 py-5 text-center"> 
                <div class="col-lg-6 mx-auto"> 
                    <h1 class="display-5 fw-bold">Everything You Need for a Perfect Stay</h1> 
                    <p class="lead mb-4">Our resort is designed so you have everything you need the moment you arrive. From cozy fire pits perfect for late-night conversations to a variety of games and activities that keep the fun going all day, every detail is meant to make your stay easy and enjoyable. Whether you’re looking to relax, connect with others, or stay active, there’s always something right at your fingertips—so you can focus on making memories without worrying about anything else.</p> 
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
                        <a class="btn btn-primary" href="booking.php" role="button">Book Now</a>
                        <a class="btn btn-primary" href="about.html" role="button">About</a> 
                    </div> 
                </div> 
            </div>
        </header>

        <section class="container py-5">
            <h2 class="text-center mb-5">Everything Included in Your Stay</h2>

            <div class="row g-4">

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🌊 Lakefront Access</h4>
                    <p>Private docks, swimming, and peaceful water views.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🔥 Fire Pits</h4>
                    <p>Perfect for late nights under the stars.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🛶 Outdoor Activities</h4>
                    <p>Kayaking, hiking trails, and nature exploration.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🌲 Scenic Surroundings</h4>
                    <p>Surrounded by woods, water, and quiet beauty.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🛋️ Cozy Interiors</h4>
                    <p>Fully furnished spaces designed for comfort.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🔥 Fireplaces</h4>
                    <p>Warm, inviting spaces for relaxing evenings.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🍳 Full Kitchen</h4>
                    <p>Everything you need to cook and dine in.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🛏️ Comfortable Bedding</h4>
                    <p>Sleep soundly in soft, cozy beds.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>❄️ Heating & AC</h4>
                    <p>Stay comfortable in every season.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>📶 WiFi Access</h4>
                    <p>Stay connected—or unplug if you prefer.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🪟 Scenic Views</h4>
                    <p>Beautiful views from every window.</p>
                </div>
                </div>

                <div class="col-md-3">
                <div class="feature-card p-4 h-100 text-center">
                    <h4>🧺 Essentials Included</h4>
                    <p>Linens, towels, and everyday necessities provided.</p>
                </div>
                </div>

            </div>
            </section>

        <section class="container py-5">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>

            <div id="accordion">
                
                <h3>What time is check-in and check-out?</h3>
                <div>
                <p>
                    Check-in begins at 3:00 PM, and check-out is at 11:00 AM. If you need a little extra time, feel free to reach out—we’ll do our best to accommodate.
                </p>
                </div>

                <h3>What should I bring for my stay?</h3>
                <div>
                <p>
                    We provide most essentials, including linens, towels, and kitchen basics. We recommend bringing personal items, groceries, and anything you’d like for outdoor activities or relaxing by the lake.
                </p>
                </div>

                <h3>Are pets allowed?</h3>
                <div>
                <p>
                    Select cabins are pet-friendly! Please contact us ahead of time so we can match you with the best space for you and your pet.
                </p>
                </div>

                <h3>Is there WiFi available?</h3>
                <div>
                <p>
                    Yes—WiFi is available in all cabins and lodges. That said, many guests choose to unplug and enjoy the quiet of the outdoors during their stay.
                </p>
                </div>

                <h3>What activities are available on-site?</h3>
                <div>
                <p>
                    Guests can enjoy kayaking, swimming, hiking trails, yard games, and relaxing by the fire pits. Each season offers something a little different, from summer lake days to cozy winter nights.
                </p>
                </div>

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