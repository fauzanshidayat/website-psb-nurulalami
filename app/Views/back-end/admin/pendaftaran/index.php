<?= $this->extend('back-end/layouts/main') ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendaftar</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message'); ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenjang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pendaftar as $row): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= esc($row['nama_lengkap']); ?></td>
                                <td><?= esc($row['jenis_kelamin']); ?></td>
                                <td><?= esc($row['tempat_lahir']); ?></td>
                                <td><?= esc($row['tanggal_lahir']); ?></td>
                                <td><?= esc($row['jenjang']); ?></td>
                                <td>
                                    <a href="/dashboard/pendaftar/detail/<?= $row['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                                    <a href="/dashboard/pendaftar/delete/<?= $row['id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>