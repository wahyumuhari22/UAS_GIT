<?= $this->extend('Layout/v_main') ?>
<?= $this->Section('menu') ?>
<li class="has-submenu">
    <a href="/Layout"><i class="mdi mdi-airplay"></i>Halaman</a>
</li>
<li class="has-submenu">
    <a href="<?= site_url('Mahasiswa') ?>">Barang</a>
</li>
<?= $this->endSection() ?>