<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $url = site_url('artikel/'.buat_slug($post)) ?>
<?php $abstract = potong_teks(strip_tags($post['isi']), 300) ?>
<?php $image = ($post['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$post['gambar'])) ?
  AmbilFotoArtikel($post['gambar'],'sedang') :
  gambar_desa($desa['logo']);
?>

<?php $tanggal = $post['tgl_upload'];
      setlocale(LC_TIME, 'id_ID.utf8');
      $date = date("d M Y", strtotime($tanggal)); ?>

<div class="max-w-full w-full pb-2 lg:pb-5 overflow-auto" style="border-bottom: 1px solid #ccc;">
  <figure class="h-20 lg:h-32 w-1/3 float-left relative <?php $image === gambar_desa($desa['logo']) ?>" style="padding-right: 1rem;">
    <img src="<?= $image ?>" style="position: relative; height: 100%; top: 0; left:0;" 
      alt="<?= $post['judul'] ?>" class="<?php $image !== gambar_desa($desa['logo']) and print('w-full object-cover object-center') ?> max-w-full mx-auto h-auto">
      <div class="text-xs lg:text-sm text-white p-1" style="lg:padding: 0.25rem; z-index:1000; background-color:#8a0090; position: absolute; opacity: 0.85; bottom:0; left:0;">
      <?php echo $date ?> </div>
  </figure>
  <a href="<?= $url ?>" class="text-h5 text-primary-200 hover:text-primary-100 my-2"><?= $post['judul'] ?></a>
  <div class="flex flex-col">
  <p class="line-clamp-4" style="margin-bottom: 4px; -webkit-line-clamp: 3;"><?= $abstract ?></p>
  <a href="<?= $url ?>" class="text-md text-primary-200 hover:text-primary-100">
    Lihat Selengkapnya
  <i class="fas fa-chevron-right ml-1"></i>
  </a>
  </div>
  
</div>