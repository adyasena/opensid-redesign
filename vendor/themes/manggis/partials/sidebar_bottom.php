<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="sidebar flex" style="flex-wrap:wrap; justify-content:center; height: 300px">
  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php 
        if($widget["isi"] == "agenda.php" || $widget['isi'] == "komentar.php") : 
      ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden lg:w-400 w-full" style="margin:10px; height:93%">
        <?php 
        $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) 
        ?>
      </div>
      <?php endif ?>
    <?php endforeach ?> 
  <?php endif ?>
</aside>

<aside class="sidebar flex" style="flex-wrap:wrap; justify-content:center;">
  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php 
        if($widget["isi"] == "peta_wilayah_desa.php" || $widget["isi"] == "peta_lokasi_kantor.php") : 
      ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden lg:w-400 lg:h-[350px] w-full" style="margin:10px;">
        <?php 
        $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) 
        ?>
      </div>
      <?php endif ?>
    <?php endforeach ?> 
  <?php endif ?>
</aside>

<aside class="sidebar flex" style="flex-wrap:wrap; justify-content:center;">
  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php 
        if($widget['isi'] == "statistik_pengunjung.php" || $widget['isi'] == "media_sosial.php") : 
      ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden lg:w-400 w-full" style="margin:10px;">
        <?php 
        $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) 
        ?>
      </div>
      <?php endif ?>
    <?php endforeach ?> 
  <?php endif ?>
</aside>