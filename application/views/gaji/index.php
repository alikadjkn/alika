<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gaji</h1>
    </div>
    <div class="row mb-3">
        <div class="col">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('gaji/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
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
                            <th colspan="10">Bruto</th>
                            <th colspan="7">Potongan</th>
                            <th rowspan="2">Netto</th>
                        </tr>
                        <tr class="align-middle">
                            <th>Gapok</th>
                            <th>Istri</th>
                            <th>Anak</th>
                            <th>Umum</th>
                            <th>Str/Fng</th>
                            <th>Bulat</th>
                            <th>Beras</th>
                            <th>Pajak</th>
                            <th>Lain2</th>
                            <th>Jumlah</th>
                            <th>IWP</th>
                            <th>PPh</th>
                            <th>Rumdin</th>
                            <th>Lain2</th>
                            <th>Taperum</th>
                            <th>BPJS</th>
                            <th>Jumlah</th>
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
                        foreach ($gaji as $r) : ?>
                            <tr class="align-middle">
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $r['nama_bulan']; ?></td>
                                <?php
                                $gapok = $r['gapok'];
                                $tistri = $r['tistri'];
                                $tanak = $r['tanak'];
                                $tumum = $r['tumum'] + $r['ttambumum'];
                                $tstruktur = $r['tstruktur'] + $r['tfungsi'];
                                $bulat = $r['bulat'];
                                $tberas = $r['tberas'];
                                $tpajak = $r['tpajak'];
                                $bruto = $gapok + $tistri + $tanak + $tumum + $tstruktur + $bulat + $tberas + $tpajak;
                                $iwp = $r['iwp'];
                                $pph = $r['pph'];
                                $sewarmh = $r['sewarmh'];
                                $tlain = $r['tpapua'] + $r['tpencil'] + $r['tlain'];
                                $potlain = $r['pberas'] + $r['tunggakan'] + $r['utanglebih'] + $r['potlain'];
                                $taperum = $r['taperum'];
                                $bpjs = $r['bpjs'];
                                $potongan = $iwp + $pph + $sewarmh + $potlain + $taperum + $bpjs;
                                $netto = $bruto - $potongan;
                                ?>
                                <td class="text-right"><?= number_format($gapok, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tistri, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tanak, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tumum, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tstruktur, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($bulat, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tberas, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tpajak, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($tlain, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($bruto, 0, ',', '.'); ?>
                                <td class="text-right"><?= number_format($iwp, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($pph, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($sewarmh, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($potlain, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($taperum, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($bpjs, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($potongan, 0, ',', '.'); ?></td>
                                <td class="text-right"><?= number_format($netto, 0, ',', '.'); ?></td>
                            </tr>
                            <?php
                            $j1 += $gapok;
                            $j2 += $tistri;
                            $j3 += $tanak;
                            $j4 += $tumum;
                            $j5 += $tstruktur;
                            $j6 += $bulat;
                            $j7 += $tberas;
                            $j8 += $tpajak;
                            $j9 += $tlain;
                            $j10 += $bruto;
                            $j11 += $iwp;
                            $j12 += $pph;
                            $j13 += $sewarmh;
                            $j14 += $potlain;
                            $j15 += $taperum;
                            $j16 += $bpjs;
                            $j17 += $potongan;
                            $j18 += $netto;
                            ?>
                        <?php endforeach; ?>
                        <tr class="align-middle">
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>