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
        font-size: 11px;
    }

    td.kosong {
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

    p.judul {
        font-size: 11px;
    }
</style>

<page backtop="5mm" backbottom="0mm" backleft="5mm" backright="5mm">

    <page_header>
        <table class="page_header" cellspacing="0px" cellpadding="0px">

        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
        </table>
    </page_footer>

    <table class="detail">
        <tr>
            <td class="angka" style="width:25%; border-bottom:none; text-align:center;">
                <img src="<?= base_url(); ?>assets/img/logo.jpeg" alt="logo kemenkeu" width="60">
            </td>
            <td class="angka" style="width:50%; text-align:center; padding-top:10px; padding-bottom:10px; font-size: 13px;">
                <strong>BUKTI PEMOTONGAN PAJAK</strong><br>
                <strong>PENGHASILAN PASAL 21</strong><br>
                <strong>(FINAL)</strong>
            </td>
            <td rowspan="2" class="angka" style="width:25%; padding-top:0; padding-left:10px;">
                <span style="font-size: 13px;"><strong>FORMULIR 1721 - VII</strong></span><br>
                <span style="font-size: 8px; margin-top:20px;">Lembar ke-1 : untuk Penerima Penghasilan</span><br>
                <span style="font-size: 8px; padding-top:10px;">Lembar ke-2 : untuk Pemotong</span>
            </td>
        </tr>
        <tr>
            <td class="angka" style="font-size: 10px; text-align:center;">
                <strong>KEMENTERIAN KEUANGAN RI</strong><br>
                <strong>DIREKTORAT JENDERAL PAJAK</strong>
            </td>
            <td class="angka" style="text-align:center; font-size: 10px; padding-top:5px; padding-bottom:5px;">Nomor : <span><?= $peg['nourut']; ?></span>/1721-VII/<?= $peg['tahun']; ?></td>
        </tr>
    </table>

    <p class="judul"><strong>A. IDENTITAS PENERIMA PENGHASILAN YANG DIPOTONG</strong></p>

    <table style="border: 1px solid black; width: 100%;">
        <tr>
            <td class="kosong" style="width:17%; padding-left:30px; padding-top:10px;">1. NPWP</td>
            <td class="kosong" style="width:3%; ">:</td>
            <td class="kosong" style="width:50%; margin-bottom:10px; padding-bottom:5px; padding-top:5px;"><?= $peg['npwp']; ?></td>
            <td class="kosong" style="width:30%;">2. NIP : <?= $peg['nip']; ?></td>
        </tr>
        <tr>
            <td class="kosong" style="width:17%; padding-left:30px;">3. NAMA</td>
            <td class="kosong" style="width:3%;">:</td>
            <td class="kosong" style="width:50%; margin-bottom:10px; padding-bottom:5px; padding-top:5px;"><?= $peg['nmpeg']; ?></td>
            <td class="kosong" style="width:30%;"></td>
        </tr>
        <tr>
            <td class="kosong" style="width:17%; padding-left:30px; padding-bottom:10px; padding-top:5px;">4. ALAMAT</td>
            <td class="kosong" style="width:3%; padding-bottom:10px; padding-top:5px;">:</td>
            <td class="kosong" style="width:50%; margin-bottom:10px; padding-bottom:10px; padding-top:5px;"><?= $peg['alamat']; ?></td>
            <td class="kosong" style="width:30%;"></td>
        </tr>
    </table>

    <p class="judul"><strong>B. PPh PASAL 21 YANG DIPOTONG</strong></p>

    <?php
    $kdgol = substr($peg['kdgol'], 0, 1);
    ?>

    <table class="detail">
        <tr style="text-align:center;">
            <td class="angka" style="width:45%; padding-top:15px; padding-bottom:15px;">KODE OBJEK PAJAK</td>
            <td class="angka" style="width:25%;">JUMLAH PENGHASILAN BRUTO (Rp)</td>
            <td class="angka" style="width:10%;">TARIF (%)</td>
            <td class="angka" style="width:20%;">PPh DIPOTONG (Rp)</td>
        </tr>
        <tr style="text-align:center; font-size:7px;">
            <td class="angka" style="padding-top:3px; padding-bottom:3px;">(1)</td>
            <td class="angka">(2)</td>
            <td class="angka">(3)</td>
            <td class="angka">(4)</td>
        </tr>
        <?php $no = 1;
        $j1 = 0;
        $j2 = 0;
        foreach ($lain as $r) : ?>
            <tr>
                <td class="angka" style="padding-top:15px; padding-left:15px; border-bottom:none;"><?= $no++; ?>. 21-499-99</td>
                <td class="angka" style="border-bottom:none;"></td>
                <td class="angka" style="border-bottom:none;"></td>
                <td class="angka" style="border-bottom:none;"></td>
            </tr>
            <tr>
                <td class="angka" style="padding-left:15px; border-bottom:none;">
                    <span style="margin-left:12px;">Objek PPh Pasal 21 Final Lainnya (<?= $r['jenis']; ?>)</span>
                </td>
                <td class="angka" style="padding-right:10px; text-align:right; border-bottom:none;"><?= number_format($r['jumlah_bruto'], 0, ',', '.'); ?></td>
                <td class="angka" style="padding-right:10px; text-align:right; border-bottom:none;"><?= $kdgol == '3' ? '5%' : ($kdgol == '4' ? '15%' : '0%'); ?></td>
                <td class="angka" style="padding-right:10px; text-align:right; border-bottom:none;"><?= number_format($r['jumlah_pph'], 0, ',', '.'); ?></td>
            </tr>
        <?php
            $j1 += $r['jumlah_bruto'];
            $j2 += $r['jumlah_pph'];
        endforeach; ?>
        <tr>
            <td class="angka" style="padding-left:15px; padding-top:10px;"><span style="margin-left:12px;"></span>
            </td>
            <td class="angka" style="padding-right:10px; text-align:right; padding-top:10px;"></td>
            <td class="angka" style="padding-right:10px; text-align:right; padding-top:10px;"></td>
            <td class="angka" style="padding-right:10px; text-align:right; padding-top:10px;"></td>
        </tr>
        <tr>
            <td class="angka" style="text-align:center; padding-top:5px; padding-bottom:5px;">
                <span style="margin-left:12px;"><strong>Jumlah</strong></span>
            </td>
            <td class="angka" style="padding-right:10px; text-align:right;"><strong><?= number_format($j1, 0, ',', '.'); ?></strong></td>
            <td class="angka" style="padding-right:10px; text-align:right;"></td>
            <td class="angka" style="padding-right:10px; text-align:right;"><strong><?= number_format($j2, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>

    <?php
    $kdsatker = $satker['kdsatker'];
    $np = $profil['npwp_bendahara'];
    $nmsatker = trim(strtoupper($satker['nmsatker']));
    ?>

    <p class="judul"><strong>C. IDENTITAS PEMOTONG</strong></p>

    <table style="border: 1px solid black; width: 100%;">
        <tr>
            <td class="kosong" style="width:17%; padding-left:30px; padding-top:15px; padding-bottom:10px;">1. NPWP</td>
            <td class="kosong" style="width:3%; padding-bottom:10px; padding-top:15px;">:</td>
            <td class="kosong" style="width:50%; padding-bottom:10px; padding-top:15px;"><?= substr($np, 0, 2) . '.' . substr($np, 2, 3) . '.' . substr($np, 5, 3) . '.' . substr($np, 8, 1) . '-' . substr($np, 9, 3) . '.' . substr($np, 12, 3); ?></td>
            <?php if ($profil['file']) : ?>
                <td rowspan="3" class="angka" style="width:30%;"><img src="<?= base_url() . 'assets/files/' . $profil['file']; ?>" width="160" style="display:block; height: auto; margin-left: 10px; margin-right: auto;"></td>
            <?php else : ?>
                <td rowspan="3" class="angka" style="width:30%;"></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td class="kosong" style="width:17%; padding-left:30px; padding-bottom:10px; padding-top:5px;">2. NAMA</td>
            <td class="kosong" style="width:3%; padding-bottom:10px; padding-top:5px;">:</td>
            <td class="kosong" style="width:50%; padding-bottom:10px; padding-top:5px;">BENDAHARA PENGELUARAN <?= $nmsatker; ?></td>
        </tr>
        <tr>
            <td colspan="3" class="kosong" style="padding-left:30px; padding-bottom:15px; padding-top:5px;">3. TANGGAL DAN TANDATANGAN : [ <?= $profil['tgl_spt'] == null ? '' : date('d-m-Y', $profil['tgl_spt']); ?> ]</td>
        </tr>
    </table>

    <table style="border: 1px solid black; width: 100%; border-bottom:none; margin-top:20px;">
        <tr>
            <td colspan="3" class="kosong" style="text-align:center; width:100%; padding-top:5px;  padding-bottom:5px;">KODE OBJEK PAJAK PENGHASILAN PASAL 21 (FINAL)</td>
        </tr>
    </table>

    <table style="border: 1px solid black; width: 100%;">
        <tr>
            <td class="kosong" style="width:5%; text-align:right; padding-top:5px;">1.</td>
            <td class="kosong" style="width:10%; text-align:center; padding-top:5px;">21-401-01</td>
            <td class="kosong" style="width:85%; padding-top:5px;">Uang Pesangon yang Dibayarkan Sekaligus</td>
        </tr>
        <tr>
            <td class="kosong" style="width:5%; text-align:right;">2.</td>
            <td class="kosong" style="width:10%; text-align:center;">21-401-02</td>
            <td class="kosong" style="width:85%;">Uang Manfaat Pensiun, Tunjangan Hari Tua, atau Jaminan Hari Tua yang Dibayarkan Sekaligus</td>
        </tr>
        <tr>
            <td class="kosong" style="width:5%; text-align:right;">3.</td>
            <td class="kosong" style="width:10%; text-align:center;">21-402-01</td>
            <td class="kosong" style="width:85%;">Honor dan Imbalan Lain yang Dibebankan kepada APBN atau APBD yang Diterima oleh PNS, Anggota TNI/POLRI,</td>
        </tr>
        <tr>
            <td class="kosong" style="width:5%; text-align:right;"></td>
            <td class="kosong" style="width:10%;"></td>
            <td class="kosong" style="width:85%;">Pejabat Negara dan Pensiunannya</td>
        </tr>
        <tr>
            <td class="kosong" style="width:5%; text-align:right; padding-bottom:5px;">4.</td>
            <td class="kosong" style="width:10%; text-align:center; padding-bottom:5px;">21-499-99</td>
            <td class="kosong" style="width:85%; padding-bottom:5px;">Objek PPh Pasal 21 Final Lainnya</td>
        </tr>
    </table>


</page>