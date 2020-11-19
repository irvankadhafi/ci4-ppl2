<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Sign In</h1>
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
            <form action="/login/auth" method="post">
                <div class="mb-3">
                    <label for="InputForUsername" class="form-label">Username</label>
                    <input type="username" name="username_field" class="form-control" id="InputForUsername">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password_field" class="form-control" id="InputForPassword">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection() ?>
