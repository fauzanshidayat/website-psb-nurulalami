<?= $this->extend('front-end/layouts/main') ?>

<?= $this->section('content') ?>


<h3 class="mb-4">Formulir Pendaftaran Siswa Baru</h3>

<form action="<?= base_url('pendaftaran/simpan') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nisn" class="form-label">NISN</label>
        <input type="text" name="nisn" id="nisn" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Kirim Pendaftaran</button>
</form>
<?= $this->endSection() ?>