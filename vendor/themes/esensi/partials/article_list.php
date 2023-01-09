<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $url = site_url('artikel/'.buat_slug($post)) ?>
<?php $abstract = potong_teks(strip_tags($post['isi']), 300) ?>
<?php $image = ($post['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$post['gambar'])) ?
  AmbilFotoArtikel($post['gambar'],'sedang') :
  gambar_desa($desa['logo']);
?>

<div class="bg-white shadow rounded-lg p-3 lg:p-5 border overflow-auto" style="width: 400px; height: 400px;">
  <figure class="<?php $image === gambar_desa($desa['logo']) and print('') ?>" style="width: 100%; height: 100%; position: relative;">
    <img src="<?= $image ?>" alt="<?= $post['judul'] ?>" class="<?php $image !== gambar_desa($desa['logo']) and print('w-full h-full') ?> max-w-full mx-auto bg-opacity-60" style=" object-fit: cover;" >
    <div class="absolute bg-gray-800 bg-opacity-60 top-0 left-0 right-0 h-full"></div>
  </figure>
  <div class="space-y-3">
    <a href="<?= $url ?>" class="text-h5 hover:text-primary-100"><?= $post['judul'] ?></a>
    <ul class="inline-flex gap-x-5 gap-y-3 text-xs lg:text-sm text-gray-500 flex-wrap">
      <li><i class="fas fa-calendar-alt mr-1 text-primary-100"></i> <?= tgl_indo($post['tgl_upload']) ?></li>
      <li><i class="fas fa-user mr-1 text-primary-100"></i> <?= $post['owner'] ?></li>
      <?php if($post['kategori']) : ?>
        <li><i class="fas fa-bookmark mr-1 text-primary-100"></i> <?= $post['kategori'] ?></li>
      <?php endif ?>
    </ul>
  </div>
</div>