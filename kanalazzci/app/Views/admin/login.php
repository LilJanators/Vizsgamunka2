<?php
?>
<?= view('head'); ?>
<?= view('header'); ?>

<main style="max-width:420px;margin:3rem auto;padding:1.5rem;border:1px solid #e5e5e5;border-radius:8px;">
  <h1 style="margin-top:0;">Admin bejelentkezés</h1>

  <?php if (session()->getFlashdata('error')): ?>
    <div style="margin:.5rem 0 1rem 0;padding:.5rem;border:1px solid #f3c2c2;background:#fde8e8;border-radius:6px;">
      <?= esc(session()->getFlashdata('error')) ?>
    </div>
  <?php endif; ?>

  <form method="post" action="<?= site_url('admin/login') ?>">
    <?= csrf_field() ?>
    <div style="margin-bottom:1rem;">
      <label>Felhasználónév</label><br>
      <input type="text" name="username" required style="width:100%;padding:.5rem;">
    </div>
    <div style="margin-bottom:1rem;">
      <label>Jelszó</label><br>
      <input type="password" name="password" required style="width:100%;padding:.5rem;">
    </div>
    <button type="submit" style="padding:.6rem 1.2rem;border-radius:6px;">Belépés</button>
  </form>
</main>

<?= view('footer'); ?>
<?= view('script'); ?>
