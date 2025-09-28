<?php
?>
<?= view('head'); ?>
<?= view('header'); ?>

<main class="container" style="max-width:800px;margin:2rem auto;">
  <h1><?= $mode === 'edit' ? 'Étel szerkesztése' : 'Új étel hozzáadása' ?></h1>
  <form method="post" action="<?= site_url('admin/etlap/save') ?>">
    <?= csrf_field() ?>
    <?php if (!empty($etel['id'])): ?>
      <input type="hidden" name="id" value="<?= esc($etel['id']) ?>">
    <?php endif; ?>

    <div style="margin-bottom:1rem;">
      <label>Név<br>
        <input type="text" name="nev" value="<?= esc($etel['nev']) ?>" required style="width:100%;padding:.5rem;">
      </label>
    </div>

    <div style="margin-bottom:1rem;">
      <label>Ár (Ft)<br>
        <input type="number" name="ar" value="<?= esc($etel['ar']) ?>" required style="width:100%;padding:.5rem;">
      </label>
    </div>

    <div style="margin-bottom:1rem;">
      <label>Leírás<br>
        <textarea name="leiras" rows="4" style="width:100%;padding:.5rem;"><?= esc($etel['leiras']) ?></textarea>
      </label>
    </div>

    <div style="margin-bottom:1rem;">
      <label>Kép (URL vagy fájlnév)<br>
        <input type="text" name="kep" value="<?= esc($etel['kep']) ?>" style="width:100%;padding:.5rem;">
      </label>
    </div>

    <div style="margin-bottom:1rem;">
      <label>Kategória ID<br>
        <input type="number" name="etel_kategoria_id" value="<?= esc($etel['etel_kategoria_id']) ?>" style="width:100%;padding:.5rem;">
      </label>
    </div>

    <div style="display:flex; gap:1rem;">
      <button type="submit" style="padding:.6rem 1.2rem;border-radius:6px;">Mentés</button>
      <a href="<?= site_url('admin/etlap') ?>" style="padding:.6rem 1.2rem;border-radius:6px;border:1px solid #ccc;text-decoration:none;">Mégse</a>
    </div>
  </form>
</main>

<?= view('footer'); ?>
<?= view('script'); ?>
