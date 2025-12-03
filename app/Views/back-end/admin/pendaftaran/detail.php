<?= $this->extend('back-end/layouts/main') ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pendaftar</h1>

    <div class="row justify-content-center">
        <!-- Kolom Kiri: Data Pribadi -->
        <div class="col-lg-6 mb-3">
            <div class="card shadow p-4">
                <h5 class="card-title mb-4">Data Pribadi</h5>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['nama_lengkap']) ?></p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Jenis Kelamin:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['jenis_kelamin']) ?></p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Tempat Lahir:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['tempat_lahir']) ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Tanggal Lahir:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['tanggal_lahir']) ?></p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Jenjang Sekolah:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['jenjang']) ?></p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Asal Sekolah:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['asal_sekolah']) ?></p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Orangtua/Wali:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['nama_ortu']) ?></p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nomor HP/WA:</label>
                    <p class="form-control-plaintext"><?= esc($pendaftar['no_hp']) ?></p>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: File-->
        <div class="col-lg-6 mb-3">
            <div class="card shadow p-4">
                <h5 class="card-title mb-4">File & Persetujuan</h5>

                <!-- Akte Kelahiran -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Akte Kelahiran:</label>
                    <p class="form-control-plaintext">
                        <?php if ($pendaftar['photo_akte']): ?>
                            <a href="/uploads/akte/<?= esc($pendaftar['photo_akte']) ?>" target="_blank" class="btn btn-sm btn-outline-primary">Lihat/Download</a>
                        <?php else: ?>
                            <span class="text-muted">Belum ada file</span>
                        <?php endif; ?>
                    </p>
                </div>

                <!-- Kartu Keluarga -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Kartu Keluarga:</label>
                    <p class="form-control-plaintext">
                        <?php if ($pendaftar['photo_kk']): ?>
                            <a href="/uploads/kk/<?= esc($pendaftar['photo_kk']) ?>" target="_blank" class="btn btn-sm btn-outline-secondary mb-1">Lihat/Download</a>
                        <?php else: ?>
                            <span class="text-muted">Belum ada file</span>
                        <?php endif; ?>
                    </p>
                </div>

                <!-- Ijazah/SKL -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Ijazah/SKL:</label>
                    <p class="form-control-plaintext">
                        <?php if ($pendaftar['photo_ijazah']): ?>
                            <a href="/uploads/ijazah/<?= esc($pendaftar['photo_ijazah']) ?>" target="_blank" class="btn btn-sm btn-outline-success">Lihat/Download</a>
                        <?php else: ?>
                            <span class="text-muted">Belum ada file</span>
                        <?php endif; ?>
                    </p>
                </div>

                <!-- Tombol Kembali -->
                <div class="d-grid mt-4">
                    <a href="/dashboard/pendaftar" class="btn btn-secondary btn-lg">Kembali ke Dashboard</a>
                </div>
            </div>
        </div>

    </div>



</div>
<?= $this->endSection() ?>