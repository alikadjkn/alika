<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Uang Makan</h1>
    </div>
    <div class="row mb-3">
        <div class="col-lg-8">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('uang-makan/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr class="align-middle">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Bulan</th>
                            <th colspan="3">Bruto</th>
                            <th>Potongan</th>
                            <th rowspan="2">Netto</th>
                        </tr>
                        <tr class="align-middle">
                            <th>Jml Hari</th>
                            <th>Tarif</th>
                            <th>Jumlah</th>
                            <th>PPh Final</th>
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
                        foreach ($makan as $r) : ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['nama_bulan']; ?></td>
                                <td class="text-right"><?= number_format($r['jmlhari'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['tarif'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['pph'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto'], 0, ',', '.'); ?></td>
                            </tr>
                            <?php
                            $j1 += $r['jmlhari'];
                            $j2 += $r['tarif'];
                            $j3 += $r['bruto'];
                            $j4 += $r['pph'];
                            $j5 += $r['netto'];
                            ?>
                        <?php endforeach; ?>
                        <tr class="align-middle">
                            <th colspan="2" class="text-center">Jumlah</th>
                            <th class="text-right"><?= number_format($j1, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j2, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j3, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j4, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j5, 0, ',', '.'); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>