<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <?php
        $levels = [
            ['id' => 1, 'level' => 'Halaman Utama'],
            ['id' => 2, 'level' => 'Rincian'],
            ['id' => 3, 'level' => 'Laporan']
        ];
        $menus = [
            ['menu' => 'Beranda', 'level' => 1, 'url' => 'beranda'],
            ['menu' => 'Penghasilan', 'level' => 1, 'url' => 'penghasilan'],
            ['menu' => 'Gaji', 'level' => 2, 'url' => 'gaji'],
            ['menu' => 'Kekurangan Gaji', 'level' => 2, 'url' => 'kekurangan-gaji'],
            ['menu' => 'Uang Makan', 'level' => 2, 'url' => 'uang-makan'],
            ['menu' => 'Uang Lembur', 'level' => 2, 'url' => 'uang-lembur'],
            ['menu' => 'Tunjangan Kinerja', 'level' => 2, 'url' => 'tunjangan-kinerja'],
            ['menu' => 'Pembayaran Lainnya', 'level' => 2, 'url' => 'pembayaran-lainnya'],
            ['menu' => 'PPh Pasal 21', 'level' => 3, 'url' => 'pph-pasal-21'],
            ['menu' => 'PPh Pasal 21 Final', 'level' => 3, 'url' => 'pph-pasal-21-final'],
            ['menu' => 'Penghasilan Tahunan', 'level' => 3, 'url' => 'penghasilan-tahunan'],
            ['menu' => 'Dokumen Perubahan', 'level' => 3, 'url' => 'dokumen-perubahan']
        ];
        foreach ($levels as $r) :
            $level = $r['level'];
            $id_level = $r['id'];
            $newAr = [];
            foreach ($menus as $val) {
                if ($val['level'] == $id_level) {
                    $newAr[] = $val;
                }
            }
        ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                <span><?= $level; ?></span>
            </h6>
            <ul class="nav flex-column">
                <?php
                foreach ($newAr as $s) :
                    $menu = $s['menu'];
                    $url = $s['url'];
                ?>
                    <li class="nav-item m-0 p-0">
                        <a class="nav-link <?= $this->uri->segment(1) == $url ? 'active' : ''; ?> pb-1" href="<?= base_url() . $url; ?>">
                            &nbsp; <?= $menu; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
        <a href="<?= base_url('sign-out'); ?>" class="btn btn-sm btn-outline-success mt-3 ml-4">Keluar Aplikasi</a>
    </div>
</nav>