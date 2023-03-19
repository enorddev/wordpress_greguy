<?php get_header() ?>

<div class="p-5 text-center bg-image" style="
            background-image: url('<?php echo get_template_directory_uri() ?> /img/showcase1.jpg');
            height: 600px;
            background-position: bottom;
            /* background-size: cover; */
            background-attachment: fixed;
          ">



    <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text">
                <h1 class="mb-3 h1 main-header">Unlocking The Door To Your New Home</h1>

                <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                    <a href="https://www.kwconnexion.com/en/brokers/greguy-jules/">Contact Us</a>
                </button>
            </div>
        </div>
    </div>
</div>
</header>

<div class="container-fluid container-figure">
    <h3 class="h3 head-heading"><q>Home is where your story begins. Let me help you start your next chapter.</q> </h3>

    <div class="row container-flex">
        <div class="col-md realtor">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/greguy-1.jpg" alt="">
        </div>
        <div class=" col-md info">
            <h2 class="h2"><?php the_title() ?></h2>
            <h5 class="h5">Residential Real Estate Broker</h5>
            <p class="p-0"><?php the_content() ?></p>
            <div class="btn-group-flex">
                <a href="http://localhost/wordpress_greguy/wordpress/listings/">
                    <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                        <i class="fas fa-home"></i>
                        Listings
                    </button>
                </a>

                <a href="https://api.whatsapp.com/send/?phone=15148854582&text&app_absent=0">
                    <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                        <i class="fas fa-mobile-alt"></i>
                        SMS
                    </button>
                </a>
            </div>

        </div>
        <div class="social-container">

            <div class="social-center">
                <a class="btn btn-outline-dark btn-floating m-1" href="https://www.youtube.com/watch?v=pL_vTMBzKkI&t=46s" role="button"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/AskGreguy/" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/greguy.jules_realtor/?hl=en" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-dark btn-floating m-1" href="https://www.linkedin.com/in/greguy-jules-b9985730/?originalSubdomain=ca" role="button"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<hr id="divider">

<div class="container-fluid container-block">
    <div class="container-block-text">
        <h3>Our Services</h3>
        <h1>Top real estate
            services available</h1>
    </div>
    <div class="row blocks">


        <div class="col-md box-one active">

            <div class="box">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/thumbnail1.jpg" alt="">
            </div>

            <?php if (is_active_sidebar('box1')) : ?>
                <div class="box-text">
                    <?php dynamic_sidebar('box1') ?>
                </div>

            <?php endif ?>
        </div>


        <div class="col-md box-two active">

            <?php if (is_active_sidebar('box2')) : ?>
                <div class="box">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/thumbnail3.jpg" alt="">
                    <div class="box-text">
                        <?php dynamic_sidebar('box2') ?>
                    </div>
                </div>
            <?php endif ?>
        </div>



        <div class="col-md box-three active">

            <?php if (is_active_sidebar('box3')) : ?>
                <div class="box">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/thumbnail2.jpg" atl="">
                    <div class="box-text">
                        <?php dynamic_sidebar('box3') ?>
                    </div>
                </div>
            <?php endif ?>
        </div>


    </div>
</div>

<hr id="divider">

<div class="container-fluid container-map row">

    <div class="col-md map-text">
        <div class="map-content">
            <strong>| OFFICE:</strong>
            <p>7993 St Laurent Blvd <br>
                Montreal, Quebec H2R 1X2
            </p>


            <strong>| PHONE:</strong>
            <p>(514) 885-4582 <br>
                (514) 316-0120</p>

            <strong>| EMAIL:</strong>
            <p>info@kwconnexion.com</p>
        </div>

    </div>

    <div class="col-md" id="map"></div>

</div>

<hr id="divider">

<div class="container-fluid contact-container row">

    <div class="contact-form col-md">
        <div class="contact-form-wrapper  ">

            <form action="#" class="contact-form ">
                <h5 class="title">Book An Appointment</h5>
                <!-- <p>
                    Send Us A Message
                </p> -->
                <div>
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                </div>
                <div>
                    <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                </div>

                <div>
                    <input type="phone" class="form-control rounded border-white mb-3 form-input" placeholder="Phone" required>
                </div>

                <div>
                    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
                </div>
                <div class="submit-button-wrapper">
                    <button type="submit" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                        Submit Form
                    </button>

                </div>
            </form>
        </div>
    </div>

    <div class="contact-text col-md">
        <h1 class="h1">We look forward to hearing from you and helping you achieve your real estate goals.</h1>
        <p>We are excited to help you with all your real estate needs. If you are interested in buying or selling a property, please don't hesitate to contact us.
            We will do our best to accommodate your schedule and get back to you as soon as possible to confirm the appointment.
        </p>
        <!-- <a href="https://www.kwconnexion.com/en/brokers/greguy-jules/">
            <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                Contact Us
            </button>
        </a> -->
    </div>


</div>




<hr id="divider">



<?php get_footer() ?>