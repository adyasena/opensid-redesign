<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="space-y-5 sidebar">
  <form action="<?= site_url() ?>" role="form" class="relative">
    <i class="fas fa-search absolute top-1/2 left-0 transform -translate-y-1/2 z-10 px-3 text-gray-500"></i>
    <input type="text" name="cari" class="form-input px-10 w-full h-12 bg-white relative inline-block" placeholder="Cari...">
  </form>
  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden" >
      <?php if ($widget["isi"] == "agenda.php" || $widget["isi"] == "statistik.php" || $widget["isi"] == "sinergi_program.php" || $widget["isi"] == "galeri.php" || $widget["isi"] == "aparatur_desa.php" || $widget["isi"] == "peta_wilayah_desa.php" || $widget["isi"] == "peta_lokasi_kantor.php" || $widget["isi"] == "keuangan.php"): ?>
        <?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
      <?php endif ?>
      </div>
    <?php endforeach ?>
  <?php endif ?>
</aside>


