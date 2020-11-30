<?= $this->extend('layouts/v_template') ?>

<?= $this->section('content') ?>
<div class="mt-3">
    <h4 class="text-center">Form Tambah Mahasiswa</h4>
    <hr>
    <div class="col-6 m-auto">
        <form action="<?= route_to('mhs_store') ?>" method="post">
            <?php foreach ($mahasiswa as $mhs) : ?>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?= $mhs->NIM ?>" readonly>
                </div>

                <div class="form-group">
                    <label>NAMA</label>
                    <input type="text" name="nama" class="form-control" value="<?= $mhs->NM_MHS ?>">
                </div>

                <div class="form-group">
                    <label>TEMPAT LAHIR</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $mhs->TEL ?>">
                </div>

                <div class="form-group">
                    <label>TGL LAHIR</label>
                    <input type="text" name="tgl_lahir" class="form-control" value="<?= $mhs->TAL ?>">
                </div>

                <div class="form-group">
                    <label>KELAS</label>
                    <input type="text" name="kelas" class="form-control" value="<?= $mhs->KELAS ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/mahasiswa">
                        <span type="submit" class="btn btn-success float-right">Kembali</span>
                    </a>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
