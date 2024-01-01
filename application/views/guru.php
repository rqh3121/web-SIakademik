<?= $this->session->flashdata("pesan"); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('guru/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
            Guru </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Alamat</th>
                    <th>No-Guru</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($guru as $gr) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $gr->nama_guru ?></td>
                    <td><?= $gr->mata_pelajaran ?></td>
                    <td><?= $gr->alamat ?></td>
                    <td><?= $gr->no_telp ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $gr->id_guru ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($guru as $gr) { ?>
<div class="modal fade" id="edit<?= $gr->id_guru ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('guru/edit/' . $gr->id_guru) ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input type="text" name="nama_guru" class="form-control" value="<?= $gr->nama_guru ?>">
                        <?= form_error('nama_guru', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="mata_pelajaran" class="form-control"
                            value="<?= $gr->mata_pelajaran ?>">
                        <?= form_error('mata_pelajaran', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Alamat Guru</label>
                        <textarea name="alamat" class="form-control"><?= $gr->alamat ?></textarea>
                        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="<?= $gr->no_telp ?>">
                        <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>