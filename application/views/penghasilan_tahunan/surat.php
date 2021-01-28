<style type="text/css">
    table.page_header {
        width: 100%;
        border: none;
        padding: 0mm;
        border-spacing: 0px;
        margin-top: 5px;
        margin-left: 20px;
        align-content: center;
        align-items: center;
        align-self: center;
        box-align: center;
        text-align: center;
    }

    table.page_header_garis {
        width: 100%;
        border: none;
        border-bottom: solid 1mm #77797a;
        padding: 0mm;
        border-spacing: 0px;
        margin-top: 5px;
        margin-left: 20px;
    }

    table.page_footer {
        width: 100%;
        border: none;
        padding: 0mm;
        font-size: 7px;
    }

    td.logo {
        text-align: center;
    }

    td.kop1 {
        text-align: center;
        font-size: 17px;
        width: 80%;
    }

    td.kop2 {
        text-align: center;
        font-size: 15px;
    }

    td.kop3 {
        text-align: center;
        font-size: 9px;
        line-height: 7px;
        margin-right: 100px;
    }

    td.garis {
        width: 95%;
        text-align: center;
        font-size: 9px;
        line-height: 7px;
    }

    #judul1 {
        text-align: center;
        font-size: 15px;
    }

    #judul2 {
        text-align: center;
        font-size: 13px;
    }

    #judul3 {
        text-align: left;
        font-size: 13px;
    }

    table.page {
        width: 100%;
        border: 1px;
        padding: 1mm;
        font-size: 13px;
    }

    table.detail {
        width: 100%;
        padding: 0mm;
        font-size: 13px;
        border-collapse: collapse;
        border: 1px solid black;
    }

    td.data {
        border: 1px solid black;
        font-size: 11px;
    }

    td.angka {
        border: 1px solid black;
        text-align: right;
        padding-right: 5px;
        font-size: 11px;
    }

    td.head {
        border: 1px solid black;
        font-size: 13px;
    }

    td.headangka {
        border: 1px solid black;
        text-align: right;
        padding-right: 5px;
        font-size: 13px;
    }
</style>

<page backtop="40mm" backbottom="0mm" backleft="5mm" backright="5mm">

    <page_header>
        <table class="page_header" cellspacing="0px" cellpadding="0px">
            <tr>
                <td class="logo" rowspan="10">
                    <img src="<?= base_url('assets/img/logo.jpeg'); ?>" alt="logo kemenkeu" width="100">
                </td>
                <td class="kop1">
                    <b>KEMENTERIAN KEUANGAN REPUBLIK INDONESIA</b>
                </td>
            </tr>
            <tr>
                <td class="kop2">
                    <b>DIREKTORAT JENDERAL KEKAYAAN NEGARA</b>
                </td>
            </tr>
            <tr>
                <td class="kop2" style="line-height:1px;">
                    <b><?= $satker['header1']; ?></b>
                </td>
            </tr>
            <tr>
                <td class="kop2">
                    <b><?= $satker['header2']; ?></b><br><br>
                </td>
            </tr>
            <tr>
                <td class="kop3">
                    <?= $satker['subheader1']; ?>
                </td>
            </tr>
            <tr>
                <td class="kop3">
                    <?= $satker['subheader2']; ?>
                </td>
            </tr>
            <tr>
                <td class="kop3">
                    <?= $satker['subheader3']; ?>
                </td>
            </tr>
            <tr>
                <td class="kop3">
                </td>
            </tr>
            <tr>
                <td class="kop3">
                </td>
            </tr>
        </table>
        <table class="page_header_garis" cellspacing="0px" cellpadding="0px">
            <tr>
                <td class="garis"></td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
        </table>
    </page_footer>

    <div id="judul1" style="margin-top: 10px;">
        <strong>SURAT KETERANGAN PENGHASILAN</strong><br>
        <span style="font-size: 12px;">Nomor: </span><span style="font-size: 12px; margin-left: 30px;"><?= $profil['no_skp']; ?></span>
    </div>

    <p style="margin-left:10px; margin-top:25px;  text-align: justify;">Yang bertandatangan dibawah ini, <?= $profil['jab_ttd_skp']; ?> - <?= $satker['nmsatker']; ?>, menerangkan bahwa:</p>

    <table style="width: 95%; margin-bottom: 10px; margin-left:20px;">
        <tr>
            <td style="width: 15%;">Nama</td>
            <td style="width: 2%;">:</td>
            <td><?= $pegawai['nmpeg']; ?></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><?= $pegawai['nip']; ?></td>
        </tr>
        <tr>
            <td>Pangkat/Gol.</td>
            <td>:</td>
            <td><?= $pegawai['nama_pangkat']; ?></td>
        </tr>
    </table>

    <span style="width: 95%; margin-bottom: 10px; margin-left:10px;">Mempunyai penghasilan bulan <strong><?= $bulan['bulan'] . ' ' . $profil['tahun']; ?></strong> sebagai berikut:</span>

    <table style="width: 95%; margin-bottom: 10px; margin-left:20px;">
        <?php
        $gapok = $gaji['gapok'] + $kurang['gapok'];
        $tistri = $gaji['tistri'] + $kurang['tistri'];
        $tanak = $gaji['tanak'] + $kurang['tanak'];
        $tumum = $gaji['tumum'] + $kurang['tumum'] + $gaji['ttambumum'] + $kurang['ttambumum'];
        $tjabatan = $gaji['tstruktur'] + $kurang['tstruktur'] + $gaji['tfungsi'] + $kurang['tfungsi'];
        $bulat = $gaji['bulat'] + $kurang['bulat'];
        $tberas = $gaji['tberas'] + $kurang['tberas'];
        $tpajak = $gaji['tpajak'] + $kurang['tpajak'];
        $tlain = $gaji['tpapua'] + $kurang['tpapua'] + $gaji['tpencil'] + $kurang['tpencil'] + $gaji['tlain'] + $kurang['tlain'];
        $bruto1 = $gapok + $tistri + $tanak + $tumum + $tjabatan + $bulat + $tberas + $tpajak + $tlain;
        $iwp = $gaji['iwp'] + $kurang['iwp'];
        $pph = $gaji['pph'] + $kurang['pph'];
        $bpjs = $gaji['bpjs'] + $kurang['bpjs'];
        $lainnya = $gaji['tunggakan'] + $kurang['tunggakan'] + $gaji['utanglebih'] + $kurang['utanglebih'] + $gaji['potlain'] + $kurang['potlain'] + $gaji['sewarmh'] + $kurang['sewarmh'];
        $taperum = $gaji['taperum'] + $kurang['taperum'];
        $potongan1 = $iwp + $pph + $bpjs + $lainnya + $taperum;
        $netto1 = $bruto1 - $potongan1;
        ?>
        <tr>
            <td style="width: 2%;">I.</td>
            <td colspan="8" style="width: 92%;">Gaji Induk</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">1.</td>
            <td style="width: 30%;">Gaji Pokok</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($gapok, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">2.</td>
            <td style="width: 30%;">Tunjangan Istri/Suami</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tistri, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">3.</td>
            <td style="width: 30%;">Tunjangan Anak</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tanak, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">4.</td>
            <td style="width: 30%;">Tunjangan Umum</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tumum, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">5.</td>
            <td style="width: 30%;">Tunjangan Str/Fung</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tjabatan, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">6.</td>
            <td style="width: 30%;">Pembulatan</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($bulat, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">7.</td>
            <td style="width: 30%;">Tunjangan Beras</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tberas, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">8.</td>
            <td style="width: 30%;">Tunjangan Pajak & Lainnya</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tpajak + $tlain, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Jumlah Kotor</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($bruto1, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Dengan potongan sebagai berikut:</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">1.</td>
            <td style="width: 30%;">Iuran Wajib Pegawai</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($iwp, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">2.</td>
            <td style="width: 30%;">Pajak Penghasilan</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($pph, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">3.</td>
            <td style="width: 30%;">BPJS</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($bpjs, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">4.</td>
            <td style="width: 30%;">Sewa Rmh & Taperum</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($lainnya + $taperum, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Jumlah Potongan</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($potongan1, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Jumlah Bersih</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($netto1, 0, ',', '.'); ?></td>
        </tr>

        <?php
        $tunjangan = $tukin['tjpokok'] + $tukin['tjtamb'] + $rapel['bruto'];
        $absenp = $tukin['abspotp'];
        $absenr = $tukin['abspotr'];
        $pajak = $tukin['tkpph'];
        $bruto2 = $tunjangan + $pajak - $absenr;
        $potongan2 = $pajak + $rapel['pph'];
        $netto2 = $bruto2 - $potongan2;
        ?>

        <tr>
            <td style="width: 2%;">II.</td>
            <td colspan="8" style="width: 92%;">Tunjangan Kinerja</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">1.</td>
            <td style="width: 30%;">Tunj. Pokok, Tamb & PPh</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($tunjangan + $pajak, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">2.</td>
            <td style="width: 30%;">Potongan Absen (<?= $absenp; ?>%)</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($absenr, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Jumlah Kotor</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($bruto2, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Dengan potongan sebagai berikut:</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 4%;">1.</td>
            <td style="width: 30%;">Pajak Penghasilan</td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($potongan2, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Jumlah Potongan</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($potongan2, 0, ',', '.'); ?></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="width: 34%;">Jumlah Bersih</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($netto2, 0, ',', '.'); ?></td>
        </tr>

        <?php
        $netto3 = $makan['netto'];
        $netto4 = $lembur['netto'];
        ?>

        <tr>
            <td>III.</td>
            <td colspan="2" style="width: 34%;">Uang Makan</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($netto3, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td>IV.</td>
            <td colspan="2" style="width: 34%;">Uang Lembur</td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;">Rp</td>
            <td style="width: 12%; text-align: right;"><?= number_format($netto4, 0, ',', '.'); ?></td>
        </tr>

        <?php $netto = $netto1 + $netto2 + $netto3 + $netto4; ?>

        <tr>
            <td colspan="3" style="width: 34%;"><strong>Total Penghasilan</strong></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"></td>
            <td style="width: 12%; text-align: right;"></td>
            <td style="width: 8%; text-align: right;"><strong>Rp</strong></td>
            <td style="width: 12%; text-align: right;"><strong><?= number_format($netto, 0, ',', '.'); ?></strong></td>
        </tr>
        <tr>
            <td colspan="9" style="width: 94%; font-size:11px; text-align:right;"><i>(<?= terbilang($netto, 4); ?> rupiah.)</i></td>
        </tr>
        <?php
        $kdkawin = $gaji['kdkawin'];
        $ybs = intval(substr($kdkawin, 0, 1));
        $istri = intval(substr($kdkawin, 1, 1));
        $anak = intval(substr($kdkawin, 2, 2));
        $jumlah = $ybs + $istri + $anak;
        ?>
        <tr>
            <td colspan="9" style="width: 94%; text-align: justify;">Catatan : Keluarga terdiri atas <?= $jumlah; ?> orang anggota, yaitu <?= $istri; ?> istri atau suami dan <?= $anak; ?> orang anak yang diperhitungkan untuk menyusun tunjangan keluarga dalam daftar gaji yang bersangkutan.</td>
        </tr>
    </table>

    <table style="width: 100%; margin-bottom:30px;">
        <tr>
            <td style="width: 65%;"></td>
            <td style="width: 35%;">Mengetahui,</td>
        </tr>
        <tr>
            <td style="width: 65%;"></td>
            <td style="width: 35%;"><?= $profil['jab_ttd_skp']; ?></td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;"></td>
            <td style="width: 35%;"><?= $profil['nama_ttd_skp']; ?></td>
        </tr>
        <tr>
            <td style="width: 65%;"></td>
            <td style="width: 35%;">NIP <?= $profil['nip_ttd_skp']; ?></td>
        </tr>
    </table>

</page>