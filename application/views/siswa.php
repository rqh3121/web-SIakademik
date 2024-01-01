<?= $this->session->flashdata("pesan"); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('siswa/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
            Siswa </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>No-Siswa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($siswa as $ssw) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $ssw->nama_siswa ?></td>
                        <td><?= $ssw->kelas_siswa ?></td>
                        <td><?= $ssw->alamat ?></td>
                        <td><?= $ssw->no_telp ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $ssw->id_siswa ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($siswa as $ssw) : ?>
    <div class="modal fade" id="edit<?= $ssw->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('siswa/edit/' . $ssw->id_siswa) ?>" method="POST">
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" value="<?= $ssw->nama_siswa ?>">
                            <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>

                        <div class=" form-group">
                            <label>Kelas Siswa</label>
                            <input type="text" name="kelas_siswa" class="form-control" value="<?= $ssw->kelas_siswa ?>">
                            <?= form_error('kelas_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>

                        <div class=" form-group">
                            <label>Alamat Siswa</label>
                            <textarea name="alamat" class="form-control"><?= $ssw->alamat ?></textarea>
                            <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" value="<?= $ssw->no_telp ?>">
                            <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class=" modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>