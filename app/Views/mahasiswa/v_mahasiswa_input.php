<?= $this->extend('layouts/v_template') ?>
<?= $this->section('content') ?>
<div class="mt-3">
    <h4 class="text-center">Form Tambah Mahasiswa</h4>
    <hr>
    <div class="col-6">
        <form action="<?= route_to('mhs_store') ?>" method="post">

            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="NIM">
            </div>

            <div class="form-group">
                <label>NAMA</label>
                <input type="text" class="form-control" name="nama" placeholder="NAMA MAHASISWA">
            </div>

            <div class="form-group">
                <label>TEMPAT LAHIR</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="TEMPAT LAHIR MAHASISWA">
            </div>

            <div class="form-group">
                <label>TGL LAHIR</label>
                <input type="text" class="form-control" name="tgl_lahir" placeholder="TGL LAHIR MAHASISWA">
            </div>

            <div class="form-group">
                <label>KELAS</label>
                <input type="text" class="form-control" name="kelas" placeholder="KELAS MAHASISWA">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
