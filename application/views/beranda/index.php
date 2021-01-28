<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Beranda</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th colspan="2">Data Pegawai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NIP</td>
                            <td><?= $pegawai['nip']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?= $pegawai['nmpeg']; ?></td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td><?= $pegawai['tempatlhr']; ?>, <?= date('d-m-Y', strtotime($pegawai['tgllhr'])); ?></td>
                        </tr>
                        <tr>
                            <td>Pangkat/ Gol</td>
                            <td><?= $pegawai['nama_pangkat']; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= $pegawai['kdkawin']; ?> (<?= substr($pegawai['kdkawin'], 0, 2) == '11' ? 'Kawin' : 'Tidak Kawin'; ?> <?= substr($pegawai['kdkawin'], 2, 2); ?> Anak)</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><?= $pegawai['nama_jabatan']; ?></td>
                        </tr>
                        <tr>
                            <td>Masa Kerja</td>
                            <td><?= substr($pegawai['kdgapok'], 0, 2); ?> <?= substr($pegawai['kdgapok'], 2, 2); ?> tahun</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $pegawai['alamat']; ?></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="2"><a href="<?= base_url('sign-out'); ?>" class="btn btn-sm btn-outline-success mt-1 mb-1">Sign Out / Keluar Aplikasi</a></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th colspan="5">Data Keluarga</th>
                                </tr>
                                <tr class="align-middle">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tgl Lahir</th>
                                    <th>Status</th>
                                    <th>Tunjangan</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                    <tr class="align-middle">
                                        <td><?= $no++; ?></td>
                                        <td><?= $r['nama']; ?></td>
                                        <td><?= date('d-m-Y', strtotime($r['tgllhr'])); ?></td>
                                        <td><?= $status; ?></td>
                                        <td><?= $r['kddapat'] == '1' ? 'Dapat' : 'Tidak'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5"><a href="<?= base_url('beranda/kp4'); ?>" class="btn btn-sm btn-outline-success pt-0 pb-0">Download KP4</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th colspan="5">Data Rekening</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nomor</td>
                                    <td><?= $pegawai['rekening']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Bank</td>
                                    <td><?= $pegawai['nm_bank']; ?></td>
                                </tr>
                                <tr>
                                    <td>Atas Nama</td>
                                    <td><?= $pegawai['nmrek']; ?></td>
                                </tr>
                                <tr>
                                    <td>NPWP</td>
                                    <td><?= $pegawai['npwp']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>