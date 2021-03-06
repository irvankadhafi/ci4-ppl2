<?= $this->extend('layouts/v_template') ?>

<?= $this->section('content') ?>
<form method="GET" action="" class="form-inline my-3">
            <div class="form-group mr-2">
                <label for="exampleInputEmail1" class="mr-3">Pencarian</label>
                <input type="text" class="form-control" name="keyword" placeholder="Mencari Data Berdasarkan Nama">
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
            <a href="/auth/logout">
                <span type="submit" class="btn btn-danger mr-0">Logout</span>
            </a>
</form>
<div class="table-responsive">
    <table class="table table-bordered" style="width:90%;margin: auto; margin-bottom: 20px">
        <tr class="bg-primary-custom text-light">
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
            $url = (isset($_GET['keyword']) ? "?keyword=".$_GET['keyword']."&page=" : '?page=');
            $pageNum = (isset($_GET['page']) ? $_GET['page']:'0');
            for ($i=1; $i<=$pager ; $i++){
        ?>
                <a href="<?php echo $url.$i; ?>" class="btn btn-sm btn-success <?php echo ($pageNum==$i) ? 'active':''?>">
                    <?php echo $i; ?>
                </a>
        <?php
            }
        ?>
    </div>

</div>
<?= $this->endSection() ?>
