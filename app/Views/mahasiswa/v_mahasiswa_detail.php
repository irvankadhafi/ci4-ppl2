<?= $this->extend('layouts/v_template') ?>

<?= $this->section('content') ?>
<div class="table-responsive">
    <table class="table table-bordered" style="width:50%;margin: auto; margin-bottom: 20px">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <th>NIM:</th>
                <td><?= $mhs->NIM ?></td>
            </tr>
            <tr>
                <th>NAMA:</th>
                <td><?= $mhs->NM_MHS ?></td>
            </tr>
            <tr>
                <th>TEMPAT TGL LAHIR:</th>
                <td><?= $mhs->TEL ?></td>
            </tr>
            <tr>
                <th>TANGGAL LAHIR:</th>
                <td><?= $mhs->TAL ?></td>
            </tr>
            <tr>
                <th>KELAS:</th>
                <td><?= $mhs->KELAS ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<a href="/mahasiswa">
    <span type="submit" class="btn btn-success my-2 mx-5">Kembali</span>
</a>
<?= $this->endSection() ?>
