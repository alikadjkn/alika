<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pembayaran Lainnya</h1>
    </div>
    <div class="row mb-2">
        <div class="col-lg-8">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('pembayaran-lainnya/index/') . $t['tahun'] . '/' . $jns; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-8">
            <?php foreach ($jenis as $j) : ?>
                <a href="<?= base_url('pembayaran-lainnya/index/') . $thn . '/' . $j['jenis']; ?>" class="btn btn-sm btn-outline-success <?= $j['jenis'] == $jns ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $j['jenis']; ?></a>
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
                            <th>Bulan</th>
                            <th>Bruto</th>
                            <th>PPh</th>
                            <th>Netto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $j1 = 0;
                        $j2 = 0;
                        $j3 = 0;
                        foreach ($lain as $r) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><a href="<?= base_url('pembayaran-lainnya/detail/') . $thn . '/' . $jns . '/' . $r['bulan']; ?>"><?= $r['nama_bulan']; ?></a>
                                </td>
                                <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?>
                                </td>
                                <td class="text-right"><?= number_format($r['pph'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto'], 0, ',', '.'); ?></td>
                            </tr>
                            <?php
                            $j1 += $r['bruto'];
                            $j2 += $r['pph'];
                            $j3 += $r['netto'];
                            ?>
                        <?php endforeach; ?>
                        <tr>
                            <th colspan="2" class="text-center">Jumlah</th>
                            <th class="text-right"><?= number_format($j1, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j2, 0, ',', '.'); ?></th>
                            <th class="text-right"><?= number_format($j3, 0, ',', '.'); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>