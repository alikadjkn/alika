<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tunjangan Kinerja</h1>
    </div>
    <div class="row mb-3">
        <div class="col">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('tunjangan-kinerja/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr class="align-middle">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Bulan</th>
                            <th colspan="7">Bruto</th>
                            <th>Potongan</th>
                            <th rowspan="2">Netto</th>
                            <th rowspan="2">Keterangan Potongan</th>
                        </tr>
                        <tr class="align-middle">
                            <th>Grade</th>
                            <th>Pokok</th>
                            <th>Tambahan</th>
                            <th>%</th>
                            <th>Absen</th>
                            <th>Pajak</th>
                            <th>Jumlah</th>
                            <th>PPh Psl 21</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $j1 = 0;
                        $j2 = 0;
                        $j3 = 0;
                        $j4 = 0;
                        $j5 = 0;
                        $j6 = 0;
                        $j7 = 0;
                        $j8 = 0;
                        $j9 = 0;
                        foreach ($tukin as $r) : ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['nama_bulan']; ?></td>
                                <?php
                                $bruto = $r['tjpokok'] + $r['tjtamb'] + $r['tkpph'] - $r['abspotr'];
                                $netto = $bruto - $r['tkpph'];
                                ?>
                                <td class="text-center"><?= number_format($r['grade'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['tjpokok'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['tjtamb'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['abspotp'], 2, ',', '.'); ?>%</td>
                                <td class="text-right"><?= number_format($r['abspotr'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['tkpph'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($bruto, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['tkpph'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($netto, 0, ',', '.'); ?></td>
                                <td class="text-muted text-sm">
                                    <?php
                                    $p1 = 'Terlambat (1%) : ' . number_format($r['p1'], 0, ',', '.') . ' kali<br>';
                                    $p2 = 'Terlambat (1,25%) : ' . number_format($r['p2'], 0, ',', '.') . ' kali <br>';
                                    $p3 = 'Terlambat (2,50%) : ' . number_format($r['p3'], 0, ',', '.') . ' kali <br>';
                                    $p4 = 'Pulang Sebelum Waktunya (0,50%) : ' . number_format($r['p4'], 0, ',', '.') . ' kali <br>';
                                    $p5 = 'Pulang Sebelum Waktunya (1%) : ' . number_format($r['p5'], 0, ',', '.') . ' kali <br>';
                                    $p6 = 'Pulang Sebelum Waktunya (1,25%) : ' . number_format($r['p6'], 0, ',', '.') . ' kali <br>';
                                    $p7 = 'Pulang Sebelum Waktunya (2,50%) : ' . number_format($r['p7'], 0, ',', '.') . ' kali <br>';
                                    $p8 = 'Cuti Penting Saudara Dekat Sakit/Meninggal, Perkawinan, Musibah (0%) : ' . number_format($r['p8'], 0, ',', '.') . ' kali <br>';
                                    $p9 = 'Cuti Penting Saudara Dekat Sakit/Meninggal, Perkawinan, Musibah (5%) : ' . number_format($r['p9'], 0, ',', '.') . 'kali <br>';
                                    $p10 = 'Cuti Penting Mendampingi Istri Melahirkan : (0%) : ' . number_format($r['p10'], 0, ',', '.') . ' kali <br>';
                                    $p11 = 'Cuti Penting Mendampingi Istri Melahirkan : (5%) : ' . number_format($r['p11'], 0, ',', '.') . 'kali <br>';
                                    $p12 = 'Cuti Penting Alasan Lainnya (5%) : ' . number_format($r['p12'], 0, ',', '.') . ' kali <br>';
                                    $p13 = 'Cuti Sakit Dengan Keterangan Dokter/Kecelakaan (0%) : ' . number_format($r['p13'], 0, ',', '.') . ' kali <br>';
                                    $p14 = 'Cuti Sakit Dengan Keterangan Dokter/Kecelakaan (2,50%) : ' . number_format($r['p14'], 0, ',', '.') . 'kali <br>';
                                    $p15 = 'Cuti Sakit Tanpa Keterangan Dokter (5%) : ' . number_format($r['p15'], 0, ',', '.') . ' kali <br>';
                                    $p16 = 'Cuti bersalin sampai persalinan ketiga (0%) : ' . number_format($r['p16'], 0, ',', '.') . 'kali <br>';
                                    $p17 = 'Cuti bersalin sampai persalinan ketiga (2,50%) : ' . number_format($r['p17'], 0, ',', '.') . ' kali <br>';
                                    $p18 = 'Alpha/Ijin (5%) : ' . number_format($r['p18'], 0, ',', '.') . ' kali <br>';
                                    $p19 = 'Cuti Besar (0%) : ' . number_format($r['p19'], 0, ',', '.') . ' kali <br>';
                                    $p20 = 'Cuti Besar (2,50%) : ' . number_format($r['p20'], 0, ',', '.') . ' kali <br>';
                                    $p21 = 'Cuti Besar (5%) : ' . number_format($r['p21'], 0, ',', '.') . ' kali <br>';
                                    $p22 = 'Terlambat (0,50%) : ' . number_format($r['p22'], 0, ',', '.') . ' kali <br>';

                                    echo $r['p22'] > 0 ? $p22 : '';
                                    echo $r['p1'] > 0 ? $p1 : '';
                                    echo $r['p2'] > 0 ? $p2 : '';
                                    echo $r['p3'] > 0 ? $p3 : '';
                                    echo $r['p4'] > 0 ? $p4 : '';
                                    echo $r['p5'] > 0 ? $p5 : '';
                                    echo $r['p6'] > 0 ? $p6 : '';
                                    echo $r['p7'] > 0 ? $p7 : '';
                                    echo $r['p8'] > 0 ? $p8 : '';
                                    echo $r['p9'] > 0 ? $p9 : '';
                                    echo $r['p10'] > 0 ? $p10 : '';
                                    echo $r['p11'] > 0 ? $p11 : '';
                                    echo $r['p12'] > 0 ? $p12 : '';
                                    echo $r['p13'] > 0 ? $p13 : '';
                                    echo $r['p14'] > 0 ? $p14 : '';
                                    echo $r['p15'] > 0 ? $p15 : '';
                                    echo $r['p16'] > 0 ? $p16 : '';
                                    echo $r['p17'] > 0 ? $p17 : '';
                                    echo $r['p18'] > 0 ? $p18 : '';
                                    echo $r['p19'] > 0 ? $p19 : '';
                                    echo $r['p20'] > 0 ? $p20 : '';
                                    echo $r['p21'] > 0 ? $p21 : '';
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $j2 += $r['tjpokok'];
                            $j3 += $r['tjtamb'];
                            $j4 += $r['abspotp'];
                            $j5 += $r['abspotr'];
                            $j6 += $r['tkpph'];
                            $j7 += $bruto;
                            $j8 += $r['tkpph'];
                            $j9 += $netto;
                            ?>
                        <?php endforeach; ?>
                        <tr class="align-middle">
                            <th colspan="3" class="text-center">Jumlah</th>
                            <th class="text-right"><?= number_format($j2, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j3, 0, ',', '.'); ?></th>
                            <th class="text-right"></th>
                            <th class="text-right"><?= number_format($j5, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j6, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j7, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j8, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j9, 0, ',', '.'); ?></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>