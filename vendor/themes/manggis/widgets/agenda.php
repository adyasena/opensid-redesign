<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box" style="height:100%">
  <div class="box-header">
    <h3 class="box-title">
      <i class="fas fa-calendar-alt mr-1"></i><?= $judul_widget ?>
    </h3>
  </div>
  <div class="box-body" style="height:100%">
    <ul class="nav nav-tabs flex list-none border-b-0 pl-0 mb-4" id="tab-agenda" role="tablist">
      <?php if (count($hari_ini) >= 0): ?>
      <li class="nav-item flex-grow text-center active" role="presentation"><a href="#hari-ini" class="nav-link font-medium border-x-0 border-t-0 border-b-2 border-transparent px-4 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" data-bs-toggle="pill" data-bs-target="#hari-ini" role="tab"
      aria-controls="hari-ini" aria-selected="true" data-toggle="tab" href="#hari-ini">Hari ini</a></li>
      <?php endif; ?>

      <?php if (count($yad) >= 0): ?>
      <li class="nav-item flex-grow text-center" role="presentation"><a href="#yad" class="nav-link font-medium border-x-0 border-t-0 border-b-2 border-transparent px-4 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" data-bs-toggle="pill" data-bs-target="#yad" role="tab"
      aria-controls="yad">Yang akan datang</a></li>
      <?php endif; ?>
      <?php if (count($lama) >= 0): ?>
      <li class="nav-item flex-grow text-center" role="presentation"><a href="#lama" class="nav-link font-medium border-x-0 border-t-0 border-b-2 border-transparent px-4 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" data-bs-toggle="pill" data-bs-target="#lama" role="tab"
      aria-controls="lama">Lama</a></li>
      <?php endif; ?>
    </ul>

    <div class="tab-content content overflow-auto" style="height: 170px">
      <?php if (count(array_merge($hari_ini, $yad, $lama)) > 0): ?>
        <div id="hari-ini" class="tab-pane fade show active h-full" role="tabpanel">
          <?php if (count($hari_ini) > 0): ?>
            <?php foreach ($hari_ini as $agenda): ?>
              <table class="w-full text-sm mb-4">
                <tr>
                  <td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda" width="40%">Waktu</th>
                  <td width="5%">:</td>
                  <td id="isi-meta-agenda" width="55%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda">Lokasi</th>
                  <td>:</td>
                  <td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda">Koordinator</th>
                  <td>:</td>
                  <td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
                </tr>
              </table>
            <?php endforeach; ?>
          <?php else : ?>
            <div class="flex items-center justify-center w-full h-full">
              <p class="text-center">Belum ada agenda</p>
            </div>
          <?php endif; ?>
        </div>

        <div id="yad" class="tab-pane fade h-full" role="tabpanel">
          <?php if (count($yad) > 0): ?>
            <?php foreach ($yad as $agenda): ?>
              <table class="w-full text-sm mb-4">
                <tr>
                  <td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda" width="40%">Waktu</th>
                  <td width="5%">:</td>
                  <td id="isi-meta-agenda" width="55%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda">Lokasi</th>
                  <td>:</td>
                  <td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda">Koordinator</th>
                  <td>:</td>
                  <td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
                </tr>
              </table>
            <?php endforeach; ?>
          <?php else : ?>
            <div class="flex items-center justify-center w-full h-full">
              <p class="text-center">Belum ada agenda</p>
            </div>
          <?php endif; ?>
        </div>

        <div id="lama" class="tab-pane fade h-full" role="tabpanel">
          <?php if (count($lama) > 0): ?>
            <?php foreach ($lama as $agenda): ?>
              <table class="w-full text-sm mb-4">
                <tr>
                  <td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a>
                  </td>
                </tr>
                <tr>
                  <th id="label-meta-agenda" width="40%">Waktu</th>
                  <td width="5%">:</td>
                  <td id="isi-meta-agenda" width="55%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda">Lokasi</th>
                  <td>:</td>
                  <td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
                </tr>
                <tr>
                  <th id="label-meta-agenda">Koordinator</th>
                  <td>:</td>
                  <td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
                </tr>
              </table>
            <?php endforeach; ?>
          <?php else : ?>
            <div class="flex items-center justify-center w-full h-full">
              <p class="text-center">Tidak ada agenda</p>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>