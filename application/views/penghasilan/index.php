<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penghasilan</h1>
    </div>
    <div class="row mb-3">
        <div class="col">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('penghasilan/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['name']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr class="align-middle">
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Gaji</th>
                            <th>Kekurangan Gaji</th>
                            <th>Uang Makan</th>
                            <th>Uang Lembur</th>
                            <th>Tunjangan Kinerja</th>
                            <th>Total</th>
                            <th>Cetak</th>
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
                        foreach ($penghasilan as $r) :
                            $total = $r['netto1'] + $r['netto2'] + $r['netto3'] + $r['netto4'] + $r['netto5'];
                        ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['nama_bulan']; ?></td>
                                <td class="text-right"><?= number_format($r['netto1'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto2'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto3'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto4'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto5'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($total, 0, ',', '.'); ?></td>
                                <td class="pb-0 pt-0">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="<?= base_url('penghasilan/surat/') . $r['bulan'] . '/' . $r['tahun']; ?>" class="btn btn-sm btn-outline-success pt-0 pb-0">Surat</a>
                                        <a href="<?= base_url('penghasilan/daftar/') . $r['bulan'] . '/' . $r['tahun']; ?>" class="btn btn-sm btn-outline-success pt-0 pb-0">Daftar</a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $j1 += $r['netto1'];
                            $j2 += $r['netto2'];
                            $j3 += $r['netto3'];
                            $j4 += $r['netto4'];
                            $j5 += $r['netto5'];
                            $j6 += $total;
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
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>