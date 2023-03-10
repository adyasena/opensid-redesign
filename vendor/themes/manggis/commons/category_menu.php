<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section x-data="{catMenu: false}" class="container">
  <button 
    type="button"
    class="lg:hidden inline-block py-4 px-6 z-10 relative"
    @click="catMenu = !catMenu">
    <i class="fa fa-list fa-lg"></i>
  </button>

  <div 
    x-show="catMenu"
    x-on:click="catMenu = false"
    x-transition.opacity
    class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"
    style="z-index: 9999;"
  ></div>

  <div
    class="lg:py-3 px-3 lg:block transform transition-transform duration-300 lg:visible"
    :class="{'bg-white text-gray-700 w-3/4 shadow fixed top-0 left-0 h-screen block inset-0 overflow-y-auto opacity-100 visible': catMenu, 'bg-white lg:bg-transparent fixed lg:relative -translate-x-full h-screen lg:h-auto lg:translate-x-0 opacity-0 lg:opacity-100':!catMenu}"
    x-transitionx-on:click.stop
    x-trap.noscroll.inert="catMenu"
    style="z-index:10000;">

    <h5 class="text-h5 pt-5 pb-3 px-3 lg:hidden">Menu Kategori</h5>
    <div class="flex lg:flex-row flex-col justify-between items-center relative z-10">
      <ul class="w-full text-sm">
        <?php foreach($menu_kiri as $menu) : ?>
          <li class="lg:inline-block">
            <a href="<?= site_url("artikel/kategori/{$menu['slug']}") ?>" class="block lg:inline-block py-2 px-3 hover:text-link-accent">
              <?= $menu['kategori'] ?>
            </a>
          </li>
          <?php if(count($menu['submenu']) > 0) : ?>
            <?php foreach($menu['submenu'] as $submenu) : ?>
              <li class="lg:inline-block">
                <a href="<?= site_url("artikel/kategori/{$submenu['slug']}") ?>" class="block lg:inline-block py-2 px-3 hover:text-link-accent">
                  <?= $submenu['kategori'] ?>
                </a>
              </li>
            <?php endforeach ?>
          <?php endif ?>
        <?php endforeach; ?>
      </ul>

      <div class="flex flex-col lg:flex-row gap-3 mt-5 lg:mt-0 flex-wrap lg:justify-end w-full px-3">
        <form action="<?= site_url() ?>" role="form" class="relative flex flex-row gap-2 lg:gap-3">
          <input type="text" name="cari" class="text-black form-input px-3 w-full bg-white relative inline-block" placeholder="Cari..." style="height:35px;">
          <button type="submit" class="btn btn-accent text-sm w-auto text-center fas fa-search"></button>
        </form>
      </div>
    </div>
  </div>

</section>
