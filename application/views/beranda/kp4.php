<style>
    table {
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0mm;
        border-spacing: 0px;
        font-size: 13px;
    }

    table.kosong {
        width: 100%;
        border: none;
        border-collapse: collapse;
        padding: 0mm;
        border-spacing: 0px;
        font-size: 13px;
    }

    th {
        border: 1px solid black;
        padding: 1mm;
    }

    td {
        border: 1px solid black;
        padding: 1mm;
    }

    td.kosong {
        border: none;
        padding: 1mm;
    }

    h5 {
        text-align: center;
        font-size: 18px;
        margin-top: 2px;
        margin-bottom: 2px;
        font-weight: 100;
    }

    p {
        text-align: justify;
        line-height: 1.6;
    }
</style>

<page backtop="5mm" backbottom="5mm" backleft="0mm" backright="0mm" footer="date;time">
    <page_header>

    </page_header>
    <page_footer>

    </page_footer>

    <h5>SURAT KETERANGAN</h5>
    <h5>UNTUK MENDAPATKAN TUNJANGAN KELUARGA</h5>
    <hr>

    <table class="kosong" style="margin-top: 20px;">
        <tr>
            <td class="kosong" colspan="4">Saya yang bertanda tangan dibawah ini,</td>
        </tr>
        <tr>
            <td class="kosong">1.</td>
            <td class="kosong">Nama Lengkap</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['nmpeg']; ?></td>
        </tr>
        <tr>
            <td class="kosong">2.</td>
            <td class="kosong">NIP</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['nip']; ?></td>
        </tr>
        <tr>
            <td class="kosong">3.</td>
            <td class="kosong">Tempat, Tgl Lahir</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['tempatlhr']; ?>, <?= date('d-m-Y', strtotime($pegawai['tgllhr'])); ?></td>
        </tr>
        <tr>
            <td class="kosong">4.</td>
            <td class="kosong">Jenis Kelamin</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['kdkelamin'] == '1' ? 'Pria' : 'Wanita'; ?></td>
        </tr>
        <tr>
            <td class="kosong">5.</td>
            <td class="kosong">Status</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['kdkawin']; ?> (<?= substr($pegawai['kdkawin'], 0, 2) == '11' ? 'Kawin' : 'Tidak Kawin'; ?> <?= substr($pegawai['kdkawin'], 2, 2); ?> Anak)</td>
        </tr>
        <tr>
            <td class="kosong">6.</td>
            <td class="kosong">Status Kepegawaian</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['kdpeg'] == '1' ? 'PNS' : 'CPNS'; ?></td>
        </tr>
        <tr>
            <td class="kosong">7.</td>
            <td class="kosong">Jabatan</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['nama_jabatan']; ?></td>
        </tr>
        <tr>
            <td class="kosong">8.</td>
            <td class="kosong">Pangkat/ Gol</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['nama_pangkat']; ?></td>
        </tr>
        <tr>
            <td class="kosong">9.</td>
            <td class="kosong">Nama Instansi</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $satker['nmsatker']; ?></td>
        </tr>
        <tr>
            <td class="kosong">10.</td>
            <td class="kosong">Masa Kerja Gol</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= substr($pegawai['kdgapok'], 0, 2); ?> <?= substr($pegawai['kdgapok'], 2, 2); ?> tahun</td>
        </tr>
        <tr>
            <td class="kosong">11.</td>
            <td class="kosong">Digaji sebesar</td>
            <td class="kosong">:</td>
            <td class="kosong">Rp <?= number_format($gaji['gapok'], 0, ',', '.'); ?>,00</td>
        </tr>
        <tr>
            <td class="kosong">12.</td>
            <td class="kosong">Alamat</td>
            <td class="kosong">:</td>
            <td class="kosong"><?= $pegawai['alamat']; ?></td>
        </tr>
    </table>

    <table class="kosong" style="margin-top:10px;">
        <tr>
            <td class="kosong" colspan="2">Menerangkan dengan sesungguhnya:</td>
        </tr>
        <tr>
            <td class="kosong">a.</td>
            <td class="kosong">Disamping jabatan utama tersebut, bekerja pula sebagai: dengan mendapat penghasilan sebesar Rp 0,-</td>
        </tr>
        <tr>
            <td class="kosong">b.</td>
            <td class="kosong">Mempunyai pensiun/ pensiun janda</td>
        </tr>
        <tr>
            <td class="kosong">c.</td>
            <td class="kosong">Mempunyai susunan keluarga sebagai berikut:</td>
        </tr>
    </table>

    <table style="margin-top:5px; margin-left:22px;">
        <tr style="text-align:center;">
            <td>No</td>
            <td>Nama</td>
            <td>Tgl Lahir</td>
            <td>Status</td>
            <td>Tunjangan</td>
        </tr>
        <?php if ($keluarga) : ?>
            <?php $no = 1;
            foreach ($keluarga as $r) :
                switch ($r['kdkeluarga']) {
                    case '1':
                        $status = 'Isteri';
                        break;
                    case '2':
                        $status = 'Suami';
                        break;
                    case '3':
                        $status = 'Anak';
                        break;
                    default:
                        $status = 'Lainnya';
                        break;
                }
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td style="width:200px;"><?= $r['nama']; ?></td>
                    <td style="width:70px;"><?= date('d-m-Y', strtotime($r['tgllhr'])); ?></td>
                    <td style="width:80px;"><?= $status; ?></td>
                    <td style="width:100px;"><?= $r['kddapat'] == '1' ? 'Dapat' : 'Tidak'; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td> - </td>
                <td style="width:200px;"> - </td>
                <td style="width:70px;"> - </td>
                <td style="width:80px;"> - </td>
                <td style="width:100px;"> - </td>
            </tr>
        <?php endif; ?>
    </table>
    <table class="kosong" style="margin-top:5px;">
        <tr>
            <td class="kosong">d.</td>
            <td class="kosong">Jumlah anak seluruhnya: <?= substr($pegawai['kdkawin'], 3, 1); ?> (yang menjadi tanggungan termasuk yang tidak masuk dalam daftar gaji)</td>
        </tr>
    </table>

    <p>Keterangan ini saya buat dengan sesungguhnya dan apabila keterangan ini ternyata tidak benar (palsu) saya bersedia dituntut pengadilan berdasarkan undang-undang yang berlaku dan bersedia mengembalikan semua penghasilan yang telah saya terima yang seharusnya bukan menjadi hak saya.</p>

    <table class="kosong">
        <tr>
            <td class="kosong" style="width:350px;">Mengetahui</td>
            <td class="kosong"></td>
        </tr>
        <tr>
            <td class="kosong" style="width:350px;"><?= $profil['jab_ttd_kp4']; ?></td>
            <td class="kosong">Yang Menerangkan,</td>
        </tr>
    </table>
    <table class="kosong" style="padding-top:40px;">
        <tr>
            <td class="kosong" style="width:350px;"><?= $profil['nama_ttd_kp4']; ?></td>
            <td class="kosong"><?= $pegawai['nmpeg']; ?></td>
        </tr>
        <tr>
            <td class="kosong" style="width:350px;">NIP <?= $profil['nip_ttd_kp4']; ?></td>
            <td class="kosong">NIP <?= $pegawai['nip']; ?></td>
        </tr>
    </table>

</page>