<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
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
                <td class="bg-danger text-center p-3 text-light">
                    <h3>MAHASISWA</h3>
                    <p>Membuat layout website sederhana PPL2 Praktikum</p>
                </td>
            </tr>
            <tr>
                <td>
                    <nav class="navbar navbar-expand-lg navbar-light bg-success">
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
                <td height="100px" class="bg-danger text-center text-light">
                    <h3>Footer</h3>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
