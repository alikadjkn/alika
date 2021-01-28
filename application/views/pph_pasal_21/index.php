<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PPh Pasal 21</h1>
    </div>
    <div class="row mb-3">
        <div class="col-lg-8">
            <?php foreach ($tahun as $t) : ?>
                <a href="<?= base_url('pph-pasal-21/index/') . $t['tahun']; ?>" class="btn btn-sm btn-outline-success <?= $t['tahun'] == $thn ? 'active' : '' ?> ml-1 mt-1 mb-1"><?= $t['tahun']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-8">
            <a href="<?= base_url('pph-pasal-21/download/') . $thn; ?>" class="btn btn-sm btn-outline-success" download>Download Form 1721-A2</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <?php
                $tahun = $thn;
                $tahun_lalu = $tahun - 1;

                //tampilkan
                $setahun = $gaji['jumlah'] >= 12 ? 12 : $gaji['jumlah'];
                $gapok = $gaji['gapok'] + $kurang['gapok'];
                $tistri = $gaji['tistri'] + $kurang['tistri'];
                $tanak = $gaji['tanak'] + $kurang['tanak'];
                $kelg = $gapok + $tistri + $tanak;
                $tumum = $gaji['tumum'] + $kurang['tumum'];
                $tstruktur = $gaji['tstruktur'] + $kurang['tstruktur'];
                $tfungsi = $gaji['tfungsi'] + $kurang['tfungsi'];
                $tunj = $tstruktur + $tfungsi;
                $tberas = $gaji['tberas'] + $kurang['tberas'];
                $bulat = $gaji['bulat'] + $kurang['bulat'];
                $tpapua = $gaji['tpapua'] + $kurang['tpapua'];
                $tk = $tukin['netto'] + $rapel['netto'];
                $bruto = $kelg + $tumum + $tunj + $tberas + $bulat + $tpapua + $tk;
                $ptkp_wp = $tarif['ptkp_wp'];
                $ptkp_istri = $tarif['ptkp_istri'];
                $ptkp_anak = $tarif['ptkp_anak'];
                $iuran_pensiun = $tarif['iuran_pensiun'];
                $biaya_jabatan = $tarif['biaya_jabatan'];
                $biaya_jabatan_maks = $tarif['biaya_jabatan_maks'];
                $jml_iuran_pensiun = ($iuran_pensiun * $kelg) / 100;
                $jml_biaya_jabatan = ($biaya_jabatan * $bruto) / 100;
                $total_biaya_jabatan = $jml_biaya_jabatan >= 6000000 ? 6000000 : $jml_biaya_jabatan;
                $pengurangan = $jml_iuran_pensiun + $total_biaya_jabatan;
                $netto = $bruto - $pengurangan;
                $setahun = $setahun < 1 ? 1 : $setahun;
                $disetahun = ROUND($netto / $setahun * 12, -3, PHP_ROUND_HALF_UP);
                $peg_wp = intval(substr($peg['kdkawin'], 0, 1));
                $peg_istri = intval(substr($peg['kdkawin'], 1, 1));
                $peg_anak = intval(substr($peg['kdkawin'], 2, 2));
                $jml_ptkp_wp = $peg_wp * $ptkp_wp;
                $jml_ptkp_istri = $peg_istri * $ptkp_istri;
                $jml_ptkp_anak = $peg_anak * $ptkp_anak;
                $ptkp = $jml_ptkp_wp + $jml_ptkp_istri + $jml_ptkp_anak;
                $pkp = $disetahun - $ptkp;
                $jml_dipungut = $gaji['tpajak'] + $kurang['tpajak'] + $tukin['potongan'] + $rapel['pph'];
                $pph_tarif_1 = $tarif['pph_tarif_1'];
                $pph_tarif_2 = $tarif['pph_tarif_2'];
                $pph_tarif_3 = $tarif['pph_tarif_3'];
                $pph_tarif_4 = $tarif['pph_tarif_4'];
                $pph_limit_1 = $tarif['pph_limit_1'];
                $pph_limit_2 = $tarif['pph_limit_2'];
                $pph_limit_3 = $tarif['pph_limit_3'];
                //hitung pph
                if ($pkp > $pph_limit_3) {
                    $pph1 = $pph_tarif_1 * $pph_limit_1;
                    $pph2 = $pph_tarif_2 * ($pph_limit_2 - $pph_limit_1);
                    $pph3 = $pph_tarif_3 * ($pph_limit_3 - $pph_limit_2);
                    $pph4 = $pph_tarif_4 * ($pkp - $pph_limit_3);
                    $pph = ($pph1 + $pph2 + $pph3 + $pph4) / 100;
                } else if ($pkp > $pph_limit_2) {
                    $pph1 = $pph_tarif_1 * $pph_limit_1;
                    $pph2 = $pph_tarif_2 * ($pph_limit_2 - $pph_limit_1);
                    $pph3 = $pph_tarif_3 * ($pkp - $pph_limit_2);
                    $pph = ($pph1 + $pph2 + $pph3) / 100;
                } else if ($pkp > $pph_limit_1) {
                    $pph1 = $pph_tarif_1 * $pph_limit_1;
                    $pph2 = $pph_tarif_2 * ($pkp - $pph_limit_1);
                    $pph = ($pph1 + $pph2) / 100;
                } else {
                    $pph = ($pph_tarif_1 * $pkp) / 100;
                }
                $sisa = $pph - $jml_dipungut;

                ?>
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Uraian</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="3">Penghasilan Bruto :</th>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Gaji Pokok</td>
                            <td class="text-right"><?= number_format($gapok, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Tunjangan Istri/Suami</td>
                            <td class="text-right"><?= number_format($tistri, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Tunjangan Anak</td>
                            <td class="text-right"><?= number_format($tanak, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Jumlah Gaji dan Tunjangan Keluarga <small>(No.1 s/d No.3)</small></td>
                            <td class="text-right"><?= number_format($kelg, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Tunjangan Perbaikan Penghasilan</td>
                            <td class="text-right"><?= number_format($tumum, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Tunjangan Struktural/Fungsional</td>
                            <td class="text-right"><?= number_format($tunj, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Tunjangan Beras</td>
                            <td class="text-right"><?= number_format($tberas, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Tunjangan Khusus</td>
                            <td class="text-right"><?= number_format($bulat, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>Tunjangan Lain-lain</td>
                            <td class="text-right"><?= number_format($tpapua, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>Penghasilan Tetap dan Teratur Lainnya yang Pembayarannya Terpisah dari Pembayaran Gaji</td>
                            <td class="text-right"><?= number_format($tk, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td>Jumlah Penghasilan Bruto <small>(No.4 s/d No.10)</small></td>
                            <td class="text-right"><?= number_format($bruto, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <th colspan="3">Pengurangan :</th>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Biaya Jabatan <small>(5% <small>X</small> No.11 Maks. 6.000.000)</small></td>
                            <td class="text-right"><?= number_format($total_biaya_jabatan, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td>Iuran Pensiun <small>(4,75% <small>X</small> No.4)</small></td>
                            <td class="text-right"><?= number_format($jml_iuran_pensiun, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td>Jumlah Pengurangan <small>(No.12 s/d No.13)</small></td>
                            <td class="text-right"><?= number_format($pengurangan, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <th colspan="3">Penghitungan PPh Pasal 21 :</th>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td>Jumlah Penghasilan Netto <small>(No.11 - No.14)</small></td>
                            <td class="text-right"><?= number_format($netto, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td>Jumlah Penghasilan Masa Sebelumnya</td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr class="text-bold text-success">
                            <td class="text-center">17</td>
                            <td>Jumlah Penghasilan Netto untuk Penghitungan PPh Pasal 21 (Setahun/Disetahunkan)</td>
                            <td class="text-right"><?= number_format($disetahun, 0, ',', '.'); ?></td>
                        </tr>
                        <tr class="text-bold text-success">
                            <td class="text-center">18</td>
                            <td>Penghasilan Tidak Kena Pajak (PTKP)</td>
                            <td class="text-right"><?= number_format($ptkp, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td>Penghasilan Kena Pajak Setahun/Disetahunkan <small>(17 - 18)</small></td>
                            <td class="text-right"><?= number_format($pkp, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td>PPh Pasal 21 Atas Penghasilan Kena Pajak Setahun/Disetahunkan</td>
                            <td class="text-right"><?= number_format($pph, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">21</td>
                            <td>PPh Pasal 21 Yang Telah DIpotong Masa Sebelumnya</td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr class="text-bold text-success">
                            <td class="text-center">22</td>
                            <td>PPh Pasal 21 Terutang</td>
                            <td class="text-right"><?= number_format($pph, 0, ',', '.'); ?></td>
                        </tr>
                        <tr class="text-bold text-success">
                            <td class="text-center">23</td>
                            <td>PPh Pasal 21 Yang Telah Dipotong dan Dilunasi</td>
                            <td class="text-right"><?= number_format($pph, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>A. Atas Gaji dan Tunjangan</td>
                            <td class="text-right"><?= number_format($jml_dipungut, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>B. Atas Penghasilan Tidak Tetap dan Teratur Lainnya yang Pembayarannya Terpisah dari Pembayaran Gaji</td>
                            <td class="text-right"><?= number_format($sisa, 0, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>