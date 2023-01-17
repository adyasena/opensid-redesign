<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $layananmandiri = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/layananmandiri.svg') ?>
<?php $statistik = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/statistik.svg') ?>
<?php $peta = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/peta.svg') ?>
<?php $sidesa = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/sidesa.svg') ?>

<?php
  $title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
  $slug = 'terkini';
  if(is_array($title)){
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>

<div class="container mx-auto flex flex-col lg:flex-row mt-5 gap-5 items-center justify-center text-center text-gray-600" style="">
  <div class="flex flex-row lg:gap-5">
    <a href="<?= site_url('layanan-mandiri') ?>" class="lg:mx-10 mx-5 lg:w-40 w-32 flex flex-col items-center">
      <img src="<?= $layananmandiri ?>" alt="Layanan Mandiri" class="lg:w-20 w-20">
      <p>Layanan Mandiri</p>
    </a>
    <a href="<?= site_url('first/statistik/4')?>" class="lg:mx-10 mx-5 lg:w-40 w-32 flex flex-col items-center">
      <img src="<?= $statistik ?>" alt="Statistik Penduduk" class="lg:w-20 w-20">
      <p>Statistik Penduduk</p>
    </a>
  </div>
  <div class="flex flex-row lg:gap-5">
    <a href="<?= site_url('first/peta') ?>" class="lg:mx-10 mx-5 lg:w-40 w-32 flex flex-col items-center">
      <img src="<?= $peta ?>" alt="Peta Desa" class="lg:w-20 w-20">
      <p>Peta Desa</p>
    </a>
    <a href="https://sidesa.purworejokab.go.id/" class="lg:mx-10 mx-5 lg:w-40 w-32 flex flex-col items-center">
      <img src="<?= $sidesa ?>" alt="Sidesa Purworejo" class="lg:w-20 w-20">
      <p>Sidesa Purworejo</p>
    </a>
  </div>
</div>

<div class="container mx-auto flex flex-col lg:flex-row my-5 px-4 gap-3 lg:gap-5 justify-between text-gray-600" style="margin-bottom:0px">
  <main class="lg:w-2/3 w-full overflow-hidden space-y-4">
    <!-- Tampilkan slider hanya di halaman awal. Tidak tampil pada daftar artikel di halaman kategori atau halaman selanjutnya serta halaman hasil pencarian -->
    <?php if(empty($cari AND count($slider_gambar) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <?php $this->load->view($folder_themes .'/partials/slider') ?>
    <?php endif; ?>

    <!-- Judul Kategori / Artikel Terkini -->
    <div class="flex justify-between items-center w-full" style="border-bottom: 1px solid #8a0090;">
      <h3 class="text-h4 text-primary-200"><?= $title ?></h3>
      <a href="<?= site_url('arsip') ?>" class="text-md text-primary-200 hover:text-primary-100">Indeks <i class="fas fa-chevron-right ml-1"></i></a>
    </div>

    <?php if(empty($cari AND count($slider_gambar) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <?php $this->load->view($folder_themes .'/partials/headline') ?>
    <?php endif; ?>

    <?php if($artikel) : ?>
      <?php foreach($artikel as $post) : ?>
        <?php $data['post'] = $post ?>
        <?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
      <?php endforeach ?>
      <?php $data['paging_page'] = $paging_page ?>
      <div class="pagination space-y-1 flex-wrap w-full">
        <?php $this->load->view($folder_themes .'/commons/paging', $data) ?>
      </div>
      <?php else : ?>
        <?php $data['title'] = $title ?>
        <?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
    <?php endif ?>
  </main>

  <!-- Bagian sidebar / widget -->
  <div class="lg:w-1/3 w-full" style="">
    <?php $this->load->view($folder_themes .'/partials/sidebar') ?>
  </div>
</div>

<div class="w-full container" style="margin-top:-10px;">
  <?php $this->load->view($folder_themes .'/partials/sidebar_bottom') ?>
</div>