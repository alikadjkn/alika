<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dokumen Perubahan</h1>
    </div>
    <div class="row mb-3">
        <div class="col-lg-10">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('dokumen-perubahan/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
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
                            <th>No Dok</th>
                            <th>Uraian Dok</th>
                            <th>Tgl Dok</th>
                            <th>Gol</th>
                            <th>TMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($perubahan as $r) : ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['no']; ?></td>
                                <td><?= $r['uraian']; ?></td>
                                <td><?= date('d-m-Y', strtotime($r['tgl'])); ?></td>
                                <td><?= $r['kdgapok']; ?></td>
                                <td><?= date('d-m-Y', strtotime($r['tmt'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>