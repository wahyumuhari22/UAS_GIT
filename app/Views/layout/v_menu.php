<?= $this->extend('Layout/v_main') ?>
<?= $this->Section('menu') ?>
<li class="has-submenu">
    <a href="<?= site_url('beranda') ?>"><i class="mdi mdi-airplay"></i>Beranda</a>
</li>
<li class="has-submenu">
    <a href="/hewanair"><i class="mdi mdi-airplay"></i>Hewan Air</a>
</li>


<?= $this->endSection() ?>