<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Uang Lembur</h1>
    </div>
    <div class="row mb-3">
        <div class="col-lg-10">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('uang-lembur/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr class="align-middle">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Bulan</th>
                            <th colspan="3">Jumlah Jam Lembur</th>
                            <th colspan="3">Bruto</th>
                            <th>Potongan</th>
                            <th rowspan="2">Netto</th>
                            <th rowspan="2">Keterangan Jam Lembur</th>
                        </tr>
                        <tr class="align-middle">
                            <th>Hari Kerja</th>
                            <th>Hari Libur</th>
                            <th>Uang Makan</th>
                            <th>Uang Lembur</th>
                            <th>Uang Makan</th>
                            <th>Jumlah</th>
                            <th>PPh Psl 21 Final</th>
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
                        foreach ($lembur as $r) : ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no; ?></td>
                                <td><?= $r['nama_bulan']; ?></td>
                                <td class="text-right"><?= number_format($r['jkerja'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['jlibur'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['jmakan'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['lembur'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['makan'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['pph'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto'], 0, ',', '.'); ?></td>
                                <td class="text-muted text-sm">
                                    <?php
                                    for ($i = 1; $i < 32; $i++) {
                                        $h = $r['jhari' . $i . ''];
                                        echo $h > 1 ? 'Tgl ' . $i . ': ' . $h . ' jam; ' : '';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $j1 += $r['jkerja'];
                            $j2 += $r['jlibur'];
                            $j3 += $r['jmakan'];
                            $j4 += $r['lembur'];
                            $j5 += $r['makan'];
                            $j6 += $r['bruto'];
                            $j7 += $r['pph'];
                            $j8 += $r['netto'];
                            ?>
                        <?php endforeach; ?>
                        <tr>
                            <th colspan="2" class="text-center">Jumlah</th>
                            <th class="text-right"><?= number_format($j1, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j2, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j3, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j4, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j5, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j6, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j7, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j8, 0, ',', '.'); ?></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>