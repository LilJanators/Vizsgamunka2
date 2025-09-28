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
    
  <!-- Elérhetőség -->

  <main class="contact-main">
    <h1>Kapcsolat és Asztalfoglalás</h1>
  
    <div class="contact-wrapper">
      <div class="contact-info">
        <h2>Kanalazz Étterem</h2>
        <p>
          1046 Budapest, Fóti út 82<br>
          Asztalfoglalás: +36 1 234 5678<br>
          E-mail: <a href="mailto:kanalazz@gmail.com">kanalazz@gmail.com</a>
        </p>
  
        <h3>Nyitvatartás</h3>
        <ul>
          <li>Hétfő – Péntek: 11:00 – 21:30</li>
          <li>Szombat: 11:00 – 21:30</li>
          <li>Vasárnap: 11:00 – 21:00</li>
        </ul>
      </div>
  
      <!-- Térkép -->
      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10742.740382655173!2d19.103338!3d47.585637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741da251fcbef4f%3A0x68b01b0c1e697b3e!2sF%C3%B3ti%20%C3%BAt%2082%2C%201046%20Budapest!5e0!3m2!1shu!2shu!4v1682871393945!5m2!1shu!2shu" 
          allowfullscreen="" 
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  
    <!-- Űrlap -->
    <section class="form-section">
      <h2>Asztalfoglalás</h2>
      <form method="POST" action="<?= base_url('index.php/asztalfoglalasuzenet') ?>">
        
        <label for="nev">Név:</label>
        <input type="text" id="nev" name="nev"  value="<?= set_value('nev') ?>" required>
        <div class="error"><?= isset($validation) ? $validation->showError('nev') : '' ?></div>
  
        <label for="tel">Telefonszám:</label>
        <input type="tel" id="tel" name="tel"  value="<?= set_value('tel') ?>" required>
        <div class="error"><?= isset($validation) ? $validation->showError('tel') : '' ?></div>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  value="<?= set_value('email') ?>" required>
        <div class="error"><?= isset($validation) ? $validation->showError('email') : '' ?></div>

        <label for="idopont">Időpont:</label>
          <select id="idopont" name="idopont" required>
            <option value="">-- Válassz időpontot --</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option>
          </select>
          
          
          <label for="letszam">Létszám:</label>
          <select id="letszam" name="letszam" required>
            <option value="">-- Válassz létszámot --</option>
            <option value="1-2">1–2 személy</option>
            <option value="3-4">3–4 személy</option>
            <option value="4plus">4+ személy</option>
          </select>
      
      
  
        <label for="uzenet">Üzenet:</label>
        <textarea id="uzenet" name="uzenet" rows="5" required>
             <?= set_value('uzenet') ?>
        </textarea>
        <div class="error"><?= isset($validation) ? $validation->showError('uzenet') : '' ?></div>
        
        <button class="asztalgomb" type="submit">Foglalás</button>
      </form>
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