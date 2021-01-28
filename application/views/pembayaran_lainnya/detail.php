<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Pembayaran Lainnya</h1>
    </div>
    <div class="row mb-2">
        <div class="col-lg-10">
            <a href="<?= base_url('pembayaran-lainnya/index/') . $thn . '/' . $jns; ?>" class="btn btn-sm btn-outline-success ml-1 mt-1 mb-2">Kembali ke halaman sebelumnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr class="align-middle">
                            <th>No</th>
                            <th>Uraian Kegiatan</th>
                            <th>Tanggal</th>
                            <th>SPM</th>
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
                        foreach ($detail as $r) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['uraian']; ?></td>
                                <td class="text-center"><?= date('d-m-Y', $r['tanggal']); ?></td>
                                <td class="text-center"><?= $r['nospm']; ?></td>
                                <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['pph'], 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($r['netto'], 0, ',', '.'); ?></td>
                            </tr>
                            <?php
                            $j1 += $r['bruto'];
                            $j2 += $r['pph'];
                            $j3 += $r['netto'];
                            ?>
                        <?php endforeach; ?>
                        <tr class="align-middle">
                            <th colspan="4" class="text-center">Jumlah</th>
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