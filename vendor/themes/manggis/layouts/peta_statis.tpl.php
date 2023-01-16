<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view($folder_themes . '/commons/meta') ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/2.0.1/mapbox-gl.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/peta.css'); ?>">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts-3d.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php $this->load->view('global/validasi_form', ['web_ui' => true]); ?>
  <?php $this->load->view($folder_themes .'/commons/source_css') ?>
  <?php $this->load->view($folder_themes .'/commons/source_js') ?>
  <style>
    .font-primary {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="font-primary bg-gray-100">
  <style>
    #map {
      width: 100%;
      height: 88vh !important;
    }
  </style>

    <?php $this->load->view($folder_themes . '/commons/loading_screen') ?>
    <?php $this->load->view($folder_themes .'/commons/header') ?>

  <main class="container w-full space-y-1 text-gray-600">
    <div class="page-title text-center">
      <h2 class="text-3xl font-bold text-bold my-0 pt-6 pb-2">Peta <?= NAMA_DESA ?></h2>
    </div>
    <br>
    <?php $this->load->view($halaman_peta); ?>
  </main>
  <?php $this->load->view('head_tags_front') ?>
  <?php $this->load->view($folder_themes .'/commons/footer') ?>
  <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js?" . THEME_VERSION) ?>"></script>
</body>

</html>