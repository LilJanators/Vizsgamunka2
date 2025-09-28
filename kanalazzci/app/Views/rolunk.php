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

      <!-- Rólunk -->

      <main>
        <section class="about-section">
            <h1>Rólunk</h1>
            <p>
              A <strong>Kanalazz!</strong> étterem 2002 óta várja vendégeit Újpest szívében. Több mint két évtizede azon dolgozunk, hogy otthonos hangulatban, friss alapanyagokból készült, ízletes ételeket kínáljunk minden betérő vendégünknek.
            </p>
          
            <p>
              Legyen szó egy gyors ebédről, családi vacsoráról vagy baráti összejövetelről, nálunk mindig meleg fogadtatásban lesz részed. Kínálatunkban megtalálhatók a hagyományos magyar ételek mellett modern, könnyed fogások is – mindezt elérhető áron, barátságos kiszolgálással.
            </p>
          
            <p>
              Látogass el hozzánk, és tapasztald meg, miért szeretnek annyian nálunk „kanalazni”.
            </p>
          </section>

      <!-- Képek -->
      
      
      <div>
      <section class="manual-carousel">
      <h2>Galéria</h2>
      <div class="carousel-wrapper">
      <button class="carousel-btn left" id="kepValtVissza">&#10094;</button>
      <img id="galeriaKep" src="<?= base_url('assets/img/Kanalazz.png'); ?>" alt="Galéria kép">
      <button class="carousel-btn right"  id="kepValtElore">&#10095;</button>
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
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const galeria = new KepValto(
                            [
                             "<?= base_url('assets/img/2.jpg') ?>",
                             "<?= base_url('assets/img/3.jpg') ?>"
                            ],
                            "galeriaKep",
                            "kepValtElore",
                            "kepValtVissza"
                          );
  });
  </script>
  
</div>
</body>
</html>