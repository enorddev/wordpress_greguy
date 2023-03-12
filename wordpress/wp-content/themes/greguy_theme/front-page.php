<?php get_header() ?>

<div class="p-5 text-center bg-image" style="
            background-image: url('<?php echo get_template_directory_uri() ?> /img/pexels-vecislavas-popa-1571470.jpg');
            height: 500px;
            background-position: center;
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
    <hr id="divider">
    <h3 class="h3"><q>Home is where your story begins. Let me help you start your next chapter.</q> </h3>
    <div class="row container-flex">
        <div class="col-md realtor">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/greguy-1.jpg" alt="">
        </div>
        <div class=" col-md info">
            <h2 class="h2"><?php the_title() ?></h2>
            <h5 class="h5">Residential Real Estate Broker</h5>
            <p class="p-0"><?php the_content() ?></p>
            <div class="btn-group-flex">
                <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                    <a href="https://www.kwconnexion.com/en/brokers/greguy-jules/">
                        <i class="fas fa-home"></i>
                        Listings
                    </a>

                </button>
                <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                    <a href="https://api.whatsapp.com/send/?phone=15148854582&text&app_absent=0">
                        <i class="fas fa-mobile-alt"></i>
                        SMS
                    </a>
                </button>
            </div>
            <hr>
            <div class="social-container">
                <h3>Follow Me</h3>
                <div class="social-center">
                    <a class="btn btn-outline-dark btn-floating m-1" href="https://www.youtube.com/watch?v=pL_vTMBzKkI&t=46s" role="button"><i class="fab fa-youtube"></i></a>


                    <a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/AskGreguy/" role="button"><i class="fab fa-facebook-f"></i></a>


                    <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/greguy.jules_realtor/?hl=en" role="button"><i class="fab fa-instagram"></i></a>


                    <a class="btn btn-outline-dark btn-floating m-1" href="https://www.linkedin.com/in/greguy-jules-b9985730/?originalSubdomain=ca" role="button"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="container-fluid container-block">

    <div class="row blocks">


        <div class="col-md">

            <?php if (is_active_sidebar('box1')) : ?>
                <div class="box">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/add_home_work_black_48dp.svg" alt="">
                </div>
                <?php dynamic_sidebar('box1') ?>
                <?php endif ?>;
        </div>


        <div class="col-md">

            <?php if (is_active_sidebar('box2')) : ?>
                <div class="box">

                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/holiday_village_black_48dp.svg" alt="">
                    <?php dynamic_sidebar('box2') ?>
                </div>
                <?php endif ?>;
        </div>


        <div class="col-md">

            <?php if (is_active_sidebar('box3')) : ?>
                <div class="box">

                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/real_estate_agent_black_48dp.svg" atl="">
                    <?php dynamic_sidebar('box3') ?>
                </div>
                <?php endif ?>;
        </div>

    </div>
</div>



<div class="container-fluid container-map">
    <div id="map"></div>
</div>



<div class="container-fluid contact-container">
    <div class="contact-form">
        <div class="contact-form-wrapper d-flex justify-content-center">
            <form action="#" class="contact-form">
                <h5 class="title">Contact</h5>
                <p>
                    Feel free to contact me if you need any assistance,
                    any help or another question.
                </p>
                <div>
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                </div>
                <div>
                    <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                </div>
                <div>
                    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required>
                    </textarea>
                </div>
                <div class="submit-button-wrapper">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>


<?php get_footer() ?>