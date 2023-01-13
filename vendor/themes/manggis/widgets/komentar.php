<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box box-primary box-solid" style="height:100%">
  <div class="box-header">
    <h3 class="box-title"><i class="fa fa-comments mr-2 mr-1"></i><?= $judul_widget ?></h3>
  </div>
  <div class="box-body" style="height: 100%">
      <ul class="divide-y overflow-auto" style="height: 210px">
        <?php foreach($komen As $data): ?>
        <li class="py-2 space-y-2">
          <blockquote class="italic"> <?= potong_teks($data['komentar'], 50); ?></blockquote>... <a
            href="<?= site_url('artikel/' . buat_slug($data)); ?>" class="text-link">selengkapnya</a>
          <p class="text-xs lg:text-sm"><i class="fas fa-comment"></i> <?= $data['owner']?></p>
          <p class="text-xs lg:text-sm"><?= tgl_indo2($data['tgl_upload'])?></p>
        </li>
        <?php endforeach; ?>
      </ul>
  </div>
</div>