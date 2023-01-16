<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 
  $social_media = [
    'facebook' => [
      'color' => 'bg-blue-600',
      'icon' => 'fa-facebook-f'
    ],
    'twitter' => [
      'color' => 'bg-blue-400',
      'icon' => 'fa-twitter'
    ],
    'instagram' => [
      'color' => 'bg-pink-500',
      'icon' => 'fa-instagram'
    ],
    'telegram' => [
      'color' => 'bg-blue-500',
      'icon' => 'fa-telegram'
    ],
    'whatsapp' => [
      'color' => 'bg-green-500',
      'icon' => 'fa-whatsapp'
    ],
    'youtube' => [
      'color' => 'bg-red-500',
      'icon' => 'fa-youtube'
    ]
  ];
?>

<?php foreach($sosmed as $social) : ?>
  <?php if($social['link']) : ?>  
    <?php 
      $social_media[strtolower($social['nama'])]['link'] = $social['link'];
    ?>
  <?php endif ?>
<?php endforeach ?>

<div class="box box-primary box-solid">
  <div class="box-header">
    <h3 class="box-title"><i class="fas fa-globe mr-1"></i><?= $judul_widget ?></h3>
  </div>
  <div class="box-body flex gap-2 text-white mobile-center" style="font-size:0.8em;">
  <ul class="space-x-1 " style="">
      <?php foreach($social_media as $sm) : ?>
        <?php if($link = $sm['link']) : ?>         
          <li class="inline-block" style=""><a href="<?= $link ?>" class="inline-flex items-center justify-center <?= $sm['color'] ?> h-12 w-12 rounded-full"><i class="fab fa-2x <?= $sm['icon'] ?>"></i></a></li>
        <?php endif ?>
      <?php endforeach ?>
    </ul>
  </div>
</div>