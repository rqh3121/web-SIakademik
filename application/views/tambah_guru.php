<form action="<?= base_url('guru/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label>Nama Guru</label>
        <input type="text" name="nama_guru" class="form-control">
        <?= form_error('nama_guru', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label>Mata Pelajaran</label>
        <input type="text" name="mata_pelajaran" class="form-control">
        <?= form_error('mata_pelajaran', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label>Alamat Guru</label>
        <textarea name="alamat" class="form-control"></textarea>
        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="no_telp" class="form-control">
        <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>

</form>