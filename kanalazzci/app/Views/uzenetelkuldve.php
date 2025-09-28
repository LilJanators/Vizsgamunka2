<!DOCTYPE html>
<html lang="hu">
<!-- head -->
<?php
    print(view('head'));
?>
<!-- end of head -->
<body>
<div class="container">
<!-- header -->
<?php
    print(view('header'));
?>
<!-- end of header -->
<main id="thankyou-main" class="menu-main">
  <h1>Üzenet elküldve köszönjük!</h1>

  <div>
      <section class="manual-carousel">
      <div class="carousel-wrapper">
      <img src="<?= base_url('assets/img/thankyou.jpg'); ?>" alt="Köszönjük">
      </div>
      </section>
      </div>

</main>


  <!-- footer -->
  <?php
    print(view('footer'));
  ?>
  <!-- end of footer -->

  <?php
    print(view('script'));
  ?>
</div>
</body>
</html>