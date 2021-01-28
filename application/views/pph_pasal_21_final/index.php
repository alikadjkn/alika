<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PPh Pasal 21 Final</h1>
    </div>
    <div class="row mb-3">
        <div class="col-lg-8">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('pph-pasal-21-final/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Jenis Pembayaran</th>
                            <th>Jumlah Bruto</th>
                            <th>PPh Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Uang Makan</td>
                            <td class="text-right"><?= number_format($makan['jumlah_bruto'], 0, ',', '.'); ?></td>
                            <td class="text-right"><?= number_format($makan['jumlah_pph'], 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Uang Lembur</td>
                            <td class="text-right"><?= number_format($lembur['jumlah_bruto'], 0, ',', '.'); ?></td>
                            <td class="text-right"><?= number_format($lembur['jumlah_pph'], 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="<?= base_url('pph-pasal-21-final/download-sentralisasi/') . $thn; ?>" class="btn btn-sm btn-outline-success" download>Download Form 1721-VII</a>
                            </td>
                            <th class="text-right"><?= number_format(($makan['jumlah_bruto'] + $lembur['jumlah_bruto']), 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format(($makan['jumlah_pph'] + $lembur['jumlah_pph']), 0, ',', '.'); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Jenis Pembayaran</th>
                            <th>Jumlah Bruto</th>
                            <th>PPh Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $j1 = 0;
                        $j2 = 0;
                        foreach ($lain as $r) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $r['jenis']; ?></td>
                                <td class="text-right"><?= number_format($r['jumlah_bruto'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['jumlah_pph'], 0, ',', '.'); ?></td>
                            </tr>
                        <?php
                            $j1 += $r['jumlah_bruto'];
                            $j2 += $r['jumlah_pph'];
                        endforeach; ?>
                        <tr>
                            <td colspan="2">
                                <a href="<?= base_url('pph-pasal-21-final/download/') . $thn; ?>" class="btn btn-sm btn-outline-success" download>Download Form 1721-VII</a>
                            </td>
                            <th class="text-right"><?= number_format($j1, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j2, 0, ',', '.'); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>