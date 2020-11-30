<?= $this->extend('layouts/v_template') ?>
<?= $this->section('content') ?>
<div class="mt-3">
    <h4 class="text-center">Form Registrasi User</h4>
    <hr>
    <div class="col-6">
        <form action="/auth/register" method="post">

            <div class="form-group">
                <label for="InputForName" class="form-label">Username</label>
                <input type="text" class="form-control" id="InputForName" name="username" placeholder="Masukkan username">
            </div>

            <div class="form-group">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword">
            </div>

            <div class="form-group">
                <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
