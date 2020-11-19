<?= $this->extend('v_template') ?>
<?= $this->section('content') ?>
    <div class="container">
        <form method="GET" action="" class="form-inline my-3">
            <div class="form-group mr-2">
                <label for="exampleInputEmail1" class="mr-3">Pencarian</label>
                <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
            </div>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary mx-2">Submit</button>
                <a href="/mahasiswa">
                <span type="submit" class="btn btn-danger">Cari Ulang</span>
            </a>
            </div>
            <a href="/mahasiswa/create">
                <span type="submit" class="btn btn-success my-2 mx-5">Tambah Mahasiswa</span>
            </a>
            <a href="/logout">
                <span type="submit" class="btn btn-danger mr-0">Logout</span>
            </a>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-striped text-center mb-2">
            <tr class="bg-primary text-light">
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['NIM'] ?></td>
                    <td><?= $mhs['NM_MHS'] ?></td>
                    <td><?= $mhs['KELAS'] ?></td>
                    <td style="text-align: center">
                        <a href="<?php echo base_url('mahasiswa/edit/'.$mhs['NIM']); ?>">
                            <span type="submit" class="btn btn-sm btn-primary">Edit</span>
                        </a>
                        <a href="<?php echo base_url('mahasiswa/delete/'.$mhs['NIM']); ?>">
                            <span type="submit" class="btn btn-sm btn-danger">Hapus</span>
                        </a>
                        <a href="<?php echo base_url('mahasiswa/detail/'.$mhs['NIM']); ?>">
                            <span type="submit" class="btn btn-sm btn-success">Detail</span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?= $this->endSection() ?>
