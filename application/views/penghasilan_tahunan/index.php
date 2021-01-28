<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penghasilan Tahunan</h1>
    </div>
    <div class="row mb-3">
        <div class="col">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('penghasilan-tahunan/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
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
                            <th colspan="3">Gaji</th>
                            <th colspan="3">Kekurangan Gaji</th>
                            <th colspan="3">Uang Makan</th>
                            <th colspan="3">Uang Lembur</th>
                            <th colspan="3">Tunjangan Kinerja</th>
                            <th colspan="3">Total</th>
                            <th rowspan="2">Cetak</th>
                        </tr>
                        <tr class="align-middle">
                            <th>Bruto</th>
                            <th>Pot</th>
                            <th>Netto</th>
                            <th>Bruto</th>
                            <th>Pot</th>
                            <th>Netto</th>
                            <th>Bruto</th>
                            <th>Pot</th>
                            <th>Netto</th>
                            <th>Bruto</th>
                            <th>Pot</th>
                            <th>Netto</th>
                            <th>Bruto</th>
                            <th>Pot</th>
                            <th>Netto</th>
                            <th>Bruto</th>
                            <th>Pot</th>
                            <th>Netto</th>
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
                        $j10 = 0;
                        $j11 = 0;
                        $j12 = 0;
                        $j13 = 0;
                        $j14 = 0;
                        $j15 = 0;
                        $j16 = 0;
                        $j17 = 0;
                        $j18 = 0;
                        foreach ($penghasilan as $r) :
                            $total_bruto = $r['bruto1'] + $r['bruto2'] + $r['bruto3'] + $r['bruto4'] + $r['bruto5'];
                            $total_potongan = $r['potongan1'] + $r['potongan2'] + $r['potongan3'] + $r['potongan4'] + $r['potongan5'];
                            $total_netto = $r['netto1'] + $r['netto2'] + $r['netto3'] + $r['netto4'] + $r['netto5'];
                        ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['nama_bulan']; ?></td>
                                <td class="text-right"><?= number_format($r['bruto1'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['potongan1'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto1'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['bruto2'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['potongan2'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto2'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['bruto3'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['potongan3'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto3'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['bruto4'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['potongan4'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto4'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['bruto5'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['potongan5'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto5'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($total_bruto, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($total_potongan, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($total_netto, 0, ',', '.'); ?></td>
                                <td class="pb-0 pt-0">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="<?= base_url('penghasilan-tahunan/surat/') . $r['bulan'] . '/' . $r['tahun']; ?>" class="btn btn-sm btn-outline-success pt-0 pb-0">Surat</a>
                                        <a href="<?= base_url('penghasilan-tahunan/daftar/') . $r['bulan'] . '/' . $r['tahun']; ?>" class="btn btn-sm btn-outline-success pt-0 pb-0">Daftar</a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $j1 += $r['bruto1'];
                            $j2 += $r['potongan1'];
                            $j3 += $r['netto1'];
                            $j4 += $r['bruto2'];
                            $j5 += $r['potongan2'];
                            $j6 += $r['netto2'];
                            $j7 += $r['bruto3'];
                            $j8 += $r['potongan3'];
                            $j9 += $r['netto3'];
                            $j10 += $r['bruto4'];
                            $j11 += $r['potongan4'];
                            $j12 += $r['netto4'];
                            $j13 += $r['bruto5'];
                            $j14 += $r['potongan5'];
                            $j15 += $r['netto5'];
                            $j16 += $total_bruto;
                            $j17 += $total_potongan;
                            $j18 += $total_netto;
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
                            <th class="text-right"><?= number_format($j9, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j10, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j11, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j12, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j13, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j14, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j15, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j16, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j17, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j18, 0, ',', '.'); ?></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>