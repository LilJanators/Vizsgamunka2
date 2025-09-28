<!DOCTYPE html>
<html lang="en">
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
    
    <main>

<!-- hero -->

<section class="hero" style="background-image: url('<?= base_url('assets/img/close-up-of-table-setting-with-cutlery-picjumbo-com.jpg'); ?>');">
  <div class="hero-content">
    <h1>Üdvözlünk a Kanalazz étteremben!</h1>
    <a href="<?= base_url('index.php/etlap') ?>" class="hero-btn">Fedezd fel az étlapot</a>
  </div>
</section>


<!-- vélemény -->

 <section class="reviews">
  <h2>Vendégeink véleménye</h2>

  <div class="reviews-container">
    <div class="review">
      <p class="review-text">„Már a névnél megvettem: *Kanalazz*! Mintha anyukám kiabálna a nappaliból, miközben a leves gőzölög. Zseni!”</p>
      <div class="stars">⭐⭐⭐⭐⭐</div>
      <div class="reviewer">
        <img src="<?= base_url('assets/img/review.svg'); ?>" alt="Vendég ikon" class="review-img">
        <span class="review-name">Kozma Zoltán</span>
      </div>
    </div>

    <div class="review">
      <p class="review-text">„A vöröslencse krémleves olyan selymes volt, hogy a kanál magától kért repetát. A pirított morzsa és a citrom? Egyenesen művészet!”</p>
      <div class="stars">⭐⭐⭐⭐</div>
      <div class="reviewer">
        <img src="<?= base_url('assets/img/review.svg'); ?>" alt="Vendég ikon" class="review-img">
        <span class="review-name">Kiss Anna</span>
      </div>
    </div>

    <div class="review">
      <p class="review-text">„Nagyon finom volt minden, a kiszolgálás pedig kedves és figyelmes. Csak ajánlani tudom!”</p>
      <div class="stars">⭐⭐⭐⭐</div>
      <div class="reviewer">
        <img src="<?= base_url('assets/img/review.svg'); ?>" alt="Vendég ikon" class="review-img">
        <span class="review-name">Szabó Péter</span>
      </div>
    </div>

    <div class="review">
      <p class="review-text">„Nagyon barátságos a hely, és gyors volt a kiszolgálás. A Somlói galuska valami fantasztikus!”</p>
      <div class="stars">⭐⭐⭐⭐⭐</div>
      <div class="reviewer">
        <img src="<?= base_url('assets/img/review.svg'); ?>" alt="Vendég ikon" class="review-img">
        <span class="review-name">Nagy Dóra</span>
      </div>
    </div>
  </div>
</section>

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