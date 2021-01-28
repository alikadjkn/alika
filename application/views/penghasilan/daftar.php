<style>
    table {
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0mm;
        border-spacing: 0px;
        font-size: 11px;
    }

    th {
        border: 1px solid black;
        padding: 1mm;
    }

    td {
        border: 1px solid black;
        padding: 1mm;
    }

    p {
        margin-top: 1px;
        margin-bottom: 1px;
        padding-top: 1px;
        padding-bottom: 1px;
    }
</style>

<page backtop="10mm" backbottom="10mm" backleft="0mm" backright="0mm" footer="date;time">
    <page_header>

    </page_header>
    <page_footer>

    </page_footer>

    <span>KEMENTERIAN KEUANGAN RI</span><span style="font-size: 13px; margin-left:250px; margin-bottom:1px;">DAFTAR GAJI</span>
    <p style="font-size: 13px; margin-left:442px; margin-top:1px;"><?= strtoupper($satker['nmsatker']); ?></p>
    <p style="font-size: 13px; margin-top:10px; margin-bottom:2px;">PEMBAYARAN : GAJI BULAN <?= strtoupper($bulan['bulan']); ?> <?= strtoupper($profil['tahun']); ?></p>

    <table>
        <thead>
            <tr>
                <td rowspan="2" style="text-align: left;">
                    <p>NO.</p>
                    <p>URT</p>
                </td>
                <td rowspan="2" style="text-align: left; width:120px;">
                    <p>NAMA</p>
                    <p>TANGGAL LAHIR</p>
                    <p>NIP</p>
                    <p>STATUS PEGAWAI</p>
                    <p>GOLONGAN</p>
                </td>
                <td rowspan="2" style="text-align: left;">
                    <p>STA.</p>
                    <p>KAWIN</p>
                    <p>JML/</p>
                    <p>ANAK</p>
                    <p>JIWA</p>
                </td>
                <td colspan="6">P E N G H A S I L A N</td>
                <td colspan="5">P O T O N G A N</td>
                <td rowspan="2" style="text-align: left;">
                    <p>JUMLAH</p>
                    <p>BERSIH</p>
                    <p>YANG</p>
                    <p>DIBAYARKAN</p>
                </td>
                <td rowspan="2" style="text-align: left;">
                    <p>TANDA</p>
                    <p>TANGAN</p>
                </td>
            </tr>
            <tr>
                <td style="text-align: left;">
                    <p>GAJI</p>
                    <p>POKOK</p>
                    <p>TUNJ.KELG</p>
                    <p>A. ISTRI/SUAMI</p>
                    <p>B. ANAK</p>
                </td>
                <td style="text-align: left;">
                    <p>TUN. UMUM</p>
                    <p>TAMB.UMUM</p>
                    <p>TUNJ.PAPUA</p>
                    <p>TERPENCIL</p>
                </td>
                <td style="text-align: left;">
                    <p>TUNJ.JABATAN</p>
                    <p>STRUKTURAL</p>
                    <p>FUNGSIONAL</p>
                    <p>LAIN-LAIN</p>
                    <p>PEMBULATAN</p>
                </td>
                <td style="text-align: left;">
                    <p>TUNJ.</p>
                    <p>BERAS</p>
                </td>
                <td style="text-align: left;">
                    <p>TUNJ.</p>
                    <p>KHUSUS</p>
                    <p>PAJAK</p>
                </td>
                <td style="text-align: left;">
                    <p>JUMLAH</p>
                    <p>PENGH</p>
                    <p>KOTOR</p>
                </td>
                <td style="text-align: left;">
                    <p>POT.</p>
                    <p>BERAS</p>
                </td>
                <td style="text-align: left;">
                    <p>IWP</p>
                    <p>BPJS</p>
                </td>
                <td style="text-align: left;">
                    <p>PAJAK</p>
                    <p>PENGHA</p>
                    <p>SILAN</p>
                </td>
                <td style="text-align: left;">
                    <p>SEWA RMH</p>
                    <p>TUNGGAKAN</p>
                    <p>UTANG LEBIH</p>
                    <p>POT. LAIN</p>
                    <p>TAPERUM</p>
                </td>
                <td style="text-align: left;">
                    <p>JUMLAH</p>
                    <p>POTONGAN</p>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr style="text-align: center;">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="16" style="padding-top:10px; padding-bottom:10px;"> ---------- data sebelum ----------</td>
            </tr>
            <tr>
                <td style="text-align: center;">2</td>
                <td style="width:120px;">
                    <p><?= strtoupper($pegawai['nmpeg']); ?></p>
                    <p>LHR. <?= date('d-m-Y', strtotime($pegawai['tgllhr'])); ?></p>
                    <p>NIP<?= $pegawai['nip']; ?></p>
                    <p>PNS GOL.<?= substr($gaji['kdgapok'], 0, 2); ?></p>
                    <p>NPWP <?= $pegawai['npwp']; ?></p>
                </td>
                <td>
                    <p><?= $gaji['kdkawin']; ?></p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['gapok'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tistri'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tanak'], 0, ',', '.'); ?></p>
                    <hr style="border: 1px solid grey">
                    <p><?= number_format($gaji['gapok'] + $gaji['tistri'] + $gaji['tanak'], 0, ',', '.'); ?></p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['tumum'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['ttambumum'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tpapua'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tpencil'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['tstruktur'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tfungsi'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tlain'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['bulat'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['tberas'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['tpajak'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($view_gaji['bruto'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['pberas'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['iwp'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['bpjs'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['pph'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($gaji['sewarmh'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['tunggakan'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['utanglebih'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['potlain'], 0, ',', '.'); ?></p>
                    <p><?= number_format($gaji['taperum'], 0, ',', '.'); ?></p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($view_gaji['potongan'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td style="text-align: right;">
                    <p><?= number_format($view_gaji['netto'], 0, ',', '.'); ?></p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                    <p style="color:white;">.</p>
                </td>
                <td></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="16" style="padding-top:10px; padding-bottom:10px;"> ---------- data sesudah ----------</td>
            </tr>
        </tbody>
    </table>

    <p style="font-size: 11px; margin-left:800px; margin-top:30px;">MENGETAHUI,</p>
    <p style="font-size: 11px; margin-left:800px; margin-top:2px;"><?= strtoupper($profil['jab_ttd_skp']); ?></p>
    <p style="font-size: 11px; margin-left:800px; margin-top:40px;"><?= strtoupper($profil['nama_ttd_skp']); ?></p>
    <p style="font-size: 11px; margin-left:800px; margin-top:2px;">NIP <?= $profil['nip_ttd_skp']; ?></p>

</page>