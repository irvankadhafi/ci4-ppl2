<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
<a href="/mahasiswa/create">
    <span type="submit" class="btn btn-primary my-2 mx-5">Tambah Mahasiswa</span>
</a>

<a href="/mahasiswa/cari">
    <span type="submit" class="btn btn-success my-2 mx-5">Cari Mahasiswa</span>
</a>
<div class="table-responsive">
    <table class="table table-bordered" style="width:90%;margin: auto; margin-bottom: 20px">
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
    <div class="text-center">
        <?php
            for ($i=1; $i<=$pager ; $i++){
        ?>
                <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php
            }
        ?>
    </div>

</div>
<?= $this->endSection() ?>
