<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<!--<div class="container">-->
<!--    <div class="card bg-primary text-center mt-2">-->
<!--        <h3>MAHASISWA</h3>-->
<!--        <p>Membuat layout website sederhana PPL2 Praktikum</p>-->
<!--    </div>-->
<!--</div>-->
<div class="container">
    <div class="table-responsive">
        <table width=90% border=0 align="center" class="mb-2 mt-2 rounded">
            <tr>
                <td class="bg-primary-custom text-center p-3 text-light">
                    <h3>MAHASISWA</h3>
                    <p>Membuat layout website sederhana PPL2 Praktikum</p>
                </td>
            </tr>
            <tr>
                <td>
                    <nav class="navbar navbar-expand-lg navbar-light bg-success-custom">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $this->renderSection('content') ?>
                </td>
            </tr>
            <tr>
                <td height="100px" class="bg-danger-custom text-center text-light">
                    <h3>Footer</h3>
                </td>
            </tr>
        </table>
    </div>
</div>
<script src="/assets/bootstrap/jquery/jquery.min.js"></script>
<script src="/assets/bootstrap/popper.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
