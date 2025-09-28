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
<main class="menu-main">
  <h1>Étlap</h1>

    <?php 
    
    foreach ($etlapKategoriak as $key => $etlapKategoria):
        
    ?>
        <h2 class="desszert"><?php  print($etlapKategoria['megnevezes']) ?></h2>
        <table class="menu-table">
          <thead>
            <tr>
              <th><?php  print($etlapKategoria['megnevezes']) ?></th>
              <th>Leírás</th>
              <th>Fénykép</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $kategoriaId = $etlapKategoria['id'];
          $aktualisEtlapelemek  = array_filter($etlapElemek, fn($elem) => $elem['etel_kategoria_id'] === $kategoriaId);
          
          foreach($aktualisEtlapelemek as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['nev']) ?> <div class="price">Ár: <?= $row['ar'] ?> Ft</div></td>
              <td><?= htmlspecialchars($row['leiras']) ?></td>
              <td><img src="<?php print(base_url('assets/'.trim($row['kep']))) ?>" alt="<?= htmlspecialchars($row['nev']) ?>"></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
    <?php
    endforeach;
    ?>
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
