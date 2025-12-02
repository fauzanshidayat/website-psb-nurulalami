<?= $this->extend('front-end/layouts/main') ?>

<?= $this->section('content') ?>
<section id="informasi" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-success">
            Informasi Penerimaan Santri Baru (PSB)
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-header text-bg-success fw-bold">
                        Persyaratan Umum
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Lulusan SD/MI atau SMP/MTs.</li>
                            <li class="list-group-item">Fotokopi Ijazah/SKL dan KK.</li>
                            <li class="list-group-item">Mengisi formulir pendaftaran.</li>
                            <li class="list-group-item">Pas Foto 3x4 (2 Lembar).</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-header text-bg-success fw-bold">
                        Jadwal Penting
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Pendaftaran Online: [Tgl] - [Tgl]
                            </li>
                            <li class="list-group-item">
                                Ujian Seleksi: [Tanggal Ujian]
                            </li>
                            <li class="list-group-item">
                                Pengumuman Hasil: [Tanggal Pengumuman]
                            </li>
                            <li class="list-group-item">Daftar Ulang: [Tgl] - [Tgl]</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-header text-bg-success fw-bold">
                        Biaya Pendaftaran
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Biaya pendaftaran sebesar **Rp 250.000**.
                        </p>
                        <p class="text-muted small">
                            Pembayaran dapat ditransfer ke Bank Syariah Mandiri (BSM) No.
                            Rek. **[Nomor Rekening]** a.n. [Nama Yayasan].
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-sm btn-outline-success">Unduh Brosur PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pendaftaran" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 text-success">
            Formulir Pendaftaran Online
        </h2>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow p-4">
                    <form
                        action="[GANTI DENGAN URL PROSES PHP/BACKEND ANDA]"
                        method="POST"
                        enctype="multipart/form-data">
                        <!-- Nama Lengkap -->
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama_lengkap"
                                name="nama_lengkap"
                                required />
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin *</label>
                            <select
                                name="jenis_kelamin"
                                id="jenis_kelamin"
                                class="form-select"
                                required>
                                <option disabled selected>Pilih Jenis Kelamin...</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
                            <input
                                type="text"
                                class="form-control"
                                id="tempat_lahir"
                                name="tempat_lahir"
                                required />
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                            <input
                                type="date"
                                class="form-control"
                                id="tanggal_lahir"
                                name="tanggal_lahir"
                                required />
                        </div>

                        <!-- Jenjang Sekolah -->
                        <div class="mb-3">
                            <label for="jenjang" class="form-label">Jenjang Sekolah *</label>
                            <select
                                class="form-select"
                                id="jenjang"
                                name="jenjang"
                                required>
                                <option selected disabled value="">Pilih Jenjang...</option>
                                <option value="RA">RA</option>
                                <option value="MTs">MTs</option>
                                <option value="MA">MA</option>
                            </select>
                        </div>

                        <!-- Asal Sekolah -->
                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label">Asal Sekolah *</label>
                            <input
                                type="text"
                                class="form-control"
                                id="asal_sekolah"
                                name="asal_sekolah"
                                required />
                        </div>

                        <!-- Nama Orang Tua -->
                        <div class="mb-3">
                            <label for="nama_ortu" class="form-label">Nama Orangtua/Wali *</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama_ortu"
                                name="nama_ortu"
                                required />
                        </div>

                        <!-- Nomor HP -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor HP/WA *</label>
                            <input
                                type="tel"
                                class="form-control"
                                id="no_hp"
                                name="no_hp"
                                placeholder="Contoh: 081234567890"
                                required />
                        </div>

                        <!-- Upload Akte -->
                        <div class="mb-3">
                            <label for="akte" class="form-label">Foto/Scan Akte Kelahiran *</label>
                            <input
                                type="file"
                                class="form-control"
                                id="akte"
                                name="akte"
                                accept=".pdf,.doc,.docx,.png,.jpg,.jpeg"
                                required />
                            <div class="form-text">Maksimal ukuran file 1 MB.</div>
                        </div>

                        <!-- Upload KK -->
                        <div class="mb-3">
                            <label for="kk" class="form-label">Foto/Scan Kartu Keluarga *</label>
                            <input
                                type="file"
                                class="form-control"
                                id="kk"
                                name="kk[]"
                                accept=".pdf,.doc,.docx,.png,.jpg,.jpeg"
                                multiple
                                required />
                            <div class="form-text">
                                Upload maksimal 5 file, ukuran per file maks 1 MB.
                            </div>
                        </div>

                        <!-- Upload Ijazah/SKL -->
                        <div class="mb-3">
                            <label for="ijazah" class="form-label">Foto Ijazah atau SKL (Opsional)</label>
                            <input
                                type="file"
                                class="form-control"
                                id="ijazah"
                                name="ijazah"
                                accept=".pdf,.doc,.docx,.png,.jpg,.jpeg" />
                        </div>

                        <!-- Persetujuan -->
                        <div class="mb-4 form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="persetujuan"
                                required />
                            <label class="form-check-label" for="persetujuan">
                                Saya menyatakan data yang diisi adalah benar dan menyetujui
                                <a href="#">Syarat & Ketentuan</a>.
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg fw-bold">
                                KIRIM PENDAFTARAN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>