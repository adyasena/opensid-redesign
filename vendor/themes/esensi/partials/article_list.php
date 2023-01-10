<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $url = site_url('artikel/'.buat_slug($post)) ?>
<?php $abstract = potong_teks(strip_tags($post['isi']), 300) ?>
<?php $image = ($post['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$post['gambar'])) ?
  AmbilFotoArtikel($post['gambar'],'sedang') :
  gambar_desa($desa['logo']);
?>

<div class="max-w-full w-full pb-4 overflow-auto">
  <figure class="h-32 lg:h-40 w-1/2 lg:w-1/3 float-left pr-3 <?php $image === gambar_desa($desa['logo']) and print('h-auto') ?>">
    <div style="background-image: url('<?= $image ?>'); position: relative; background-size: cover; background-position: center; background-repeat: no-repeat; height: 100%; top: 0px;" 
      alt="<?= $post['judul'] ?>" class="<?php $image !== gambar_desa($desa['logo']) and print('w-full object-cover object-center') ?> max-w-full mx-auto h-auto">
      <div class="text-xs lg:text-sm text-white p-2" style="background-color:#8a0090; position: absolute; opacity: 0.85; bottom:0; left:0;">
      <?= tgl_indo($post['tgl_upload']) ?> </div>
    </div>
  </figure>
  <div class="mb-9">
    <a href="<?= $url ?>" class="text-h5 text-primary-200 hover:text-primary-100 my-2"><?= $post['judul'] ?></a>
    <p class="line-clamp-4" style="margin-bottom: 4px;"><?= $abstract ?></p>
    <a href="<?= $url ?>" class="text-sm text-primary-200 hover:text-primary-100">
      Lihat Selengkapnya
      <i class="fas fa-chevron-right ml-1"></i>
    </a>
  </div>
</div>