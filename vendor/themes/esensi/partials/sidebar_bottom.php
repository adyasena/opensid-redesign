<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="space-y-5 sidebar flex flex-row" style="flex-wrap:wrap">
  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden" style="margin-right: 20px;">
      <?php if($widget['isi'] == "menu_kategori.php" || $widget['isi'] == "arsip_artikel.php" || $widget['isi'] == "komentar.php" || $widget['isi'] == "media_sosial.php" || $widget['isi'] == "statistik_pengunjung.php") : ?>
        <?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
      <?php else : ?>
        
      <?php endif ?>
      </div>
    <?php endforeach ?> 
  <?php endif ?>
</aside>