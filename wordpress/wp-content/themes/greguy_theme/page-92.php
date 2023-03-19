<?php get_header() ?>

<div class="container-fluid container-flex">
  <div class="row about-figure">
    <div class="col-md about-page">
      <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/Greguy-Jules.jpg" alt="">
    </div>
    <div class="col-md info">
      <h2 class="h2"><?php the_title() ?></h2>
      <p class="p-0"><?php the_content() ?></p>
    </div>
  </div>
</div>




<hr id="divider">

<div class="container-fluid services">

  <div class="row services-content">
    <div class=" col-md row-1">
      <div class="image-1">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/keys_image_1.jpg" alt="#">
      </div>

      <?php if (is_active_sidebar('desc1')) : ?>
        <div class="desc-1">
          <?php dynamic_sidebar('desc1') ?>
        </div>
      <?php endif ?>
    </div>

    <div class=" col-md row-2">
      <?php if (is_active_sidebar('desc2')) : ?>
        <div class="desc-2">
          <?php dynamic_sidebar('desc2') ?>
        </div>
      <?php endif ?>

      <div class="image-2">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/house.image.jpg" alt="#">
      </div>
    </div>


    <div class=" col-md row-3">
      <div class="image-3">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/kitchen_image_1.jpg" alt="">
      </div>

      <?php if (is_active_sidebar('desc3')) : ?>
        <div class="desc-3">
          <?php dynamic_sidebar('desc3') ?>
        </div>
      <?php endif ?>

    </div>
  </div>

</div>

</div>

<hr id="divider">

<div class="container-fluid contact-container row">

    <div class="contact-form col-md">
        <div class="contact-form-wrapper  ">

            <form action="#" class="contact-form ">
                <h5 class="title">Contact</h5>
                <p>
                    Send Us A Message
                </p>
                <div>
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                </div>
                <div>
                    <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                </div>
                <div>
                    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
                </div>
                <div class="submit-button-wrapper">
                    <button type="submit" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                        SEND MESSAGE
                    </button>

                </div>
            </form>
        </div>
    </div>

    <div class="contact-text col-md">
        <h1 class="h1">Get in touch with us today and our team will assist you</h1>
        <p>Our experts and developers would love to contribute their expertise and insights and help you today. Contact us to help you plan your next transaction, either buying or selling a home.</p>
        <a href="https://www.kwconnexion.com/en/brokers/greguy-jules/">
            <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-ripple-color="dark">
                Contact Us
            </button>
        </a>
    </div>


</div>


<hr id="divider">


<?php get_footer() ?>