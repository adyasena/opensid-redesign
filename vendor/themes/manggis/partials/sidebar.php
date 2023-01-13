<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="space-y-5 sidebar">
  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php if ($widget['isi'] == "arsip_artikel.php" || $widget['isi'] == "menu_kategori.php" || $widget["isi"] == "statistik.php" || $widget["isi"] == "sinergi_program.php" || 
        $widget["isi"] == "galeri.php" || $widget["isi"] == "aparatur_desa.php" || $widget["isi"] == "keuangan.php"): ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden" >
        <?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
      </div>
      <?php elseif($widget["isi"] == "agenda.php" || $widget['isi'] == "statistik_pengunjung.php" || $widget['isi'] == "media_sosial.php" || $widget['isi'] == "komentar.php" || $widget["isi"] == "peta_wilayah_desa.php" || $widget["isi"] == "peta_lokasi_kantor.php") : ?>
          
      <?php else : ?>
        <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
        <div class="tes shadow rounded-lg bg-white overflow-hidden" >
          <?php if ($widget["jenis_widget"] == 1): ?>
            <?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
          <?php elseif($widget['jenis_widget'] == 2) : ?>
            <?php $this->load->view("../../{$widget['isi']}", $judul_widget) ?>
          <?php else : ?>
            <div class="box-header">
              <h3 class="box-title"><?= strip_tags($widget['judul']) ?></h3>
            </div>
            <div class="box-body">
                <?= html_entity_decode($widget['isi']) ?>
            </div>
          <?php endif ?>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  <?php endif ?>
</aside>
