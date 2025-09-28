<?php
?>
<?= view('head'); ?>
<?= view('header'); ?>

<main class="container" style="max-width:1000px;margin:2rem auto;">
  <h1 style="display:flex;justify-content:space-between;align-items:center;">
    Étlap – Admin
    <a href="<?= site_url('admin/logout') ?>" style="font-size:.9rem;">Kijelentkezés</a>
  </h1>
  <p><a class="btn" href="<?= site_url('admin/etlap/new') ?>" style="padding:.5rem 1rem;border:1px solid #ccc;border-radius:6px;text-decoration:none;">Új étel</a></p>
  <table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Ár</th>
        <th>Kategória ID</th>
        <th>Műveletek</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($etelek)): ?>
        <?php foreach ($etelek as $e): ?>
          <tr>
            <td><?= esc($e['id']) ?></td>
            <td><?= esc($e['nev']) ?></td>
            <td><?= esc($e['ar']) ?></td>
            <td><?= esc($e['etel_kategoria_id']) ?></td>
            <td>
              <a href="<?= site_url('admin/etlap/edit/'.esc($e['id'])) ?>">Szerkeszt</a> |
              <a href="<?= site_url('admin/etlap/delete/'.esc($e['id'])) ?>" onclick="return confirm('Biztosan törlöd?')">Töröl</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="5">Nincs adat.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</main>

<?= view('footer'); ?>
<?= view('script'); ?>
