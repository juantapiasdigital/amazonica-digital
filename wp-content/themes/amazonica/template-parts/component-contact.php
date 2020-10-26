<?php
$background = get_sub_field('contact_background');
$image = get_sub_field('contact_image');
$content = get_sub_field('contact_content');
?>
<section class="contact">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 p-0">
        <div class="contact-front" style="background: url('<?php echo $background; ?>') no-repeat center center; background-size: cover; ">
          <figure class="contact-img">
            <img src="<?php echo $image; ?>" alt="Contact Form" class="img-fluid">
          </figure>
          <?php echo $content; ?>
        </div>
      </div>
      <div class="col-12 col-md-7 p-0">
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="80" title="Formulario de contacto 1"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>