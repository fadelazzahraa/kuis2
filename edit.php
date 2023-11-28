<?php

require "dbconnect.php";
require "dbfunction.php";

if (isset($_GET['kode'])) {
    $matkul = getMKByKode($_GET['kode'])[1];
} else {
    header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>Edit | Sanapati Cendekia Center</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="col-lg-11 p-5 justify-content-center">

            <article class="card-body bg-dark">
                <h1 class="card-title text-center my-4 text-light">Edit</h1>
                <h3 class="card-title text-center mb-5 text-light">Sanapati Cendekia Center</h3>
                <hr style="border-top: 1px solid white;">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <form class="" method="post" action="semiapi.php" enctype="multipart/form-data"
                            onsubmit="onSubmit();">
                            <input class="form-control mb-2" placeholder="Kode Mata Kuliah" type="text"
                                value="<?= $matkul['kode_mk'] ?>" disabled>
                            <input type="hidden" name="kode" value="<?= $matkul['kode_mk'] ?>">
                            <input name="nama" class="form-control my-2" placeholder="Nama Mata Kuliah" type="text"
                                value="<?= $matkul['Nama_mk'] ?>" required>
                            <input name="jumlahsks" class="form-control my-2" placeholder="Jumlah SKS" type="number"
                                value="<?= $matkul['Jumlah_sks'] ?>" required>
                            <textarea name="deskripsi" class="form-control mt-2 mb-4" placeholder="Deskripsi"
                                required><?= $matkul['Deskripsi_mk'] ?></textarea>
                            <input type="hidden" name="func" value="update">
                            <button type="submit" class="btn btn-primary btn-block mb-2">Edit!</button>
                            <script>
                                function onSubmit() {
                                    if (window.confirm("Lanjutkan untuk mengedit data?")) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div>
                <hr style="border-top: 1px solid white;">
                <p class="text-center text-light"><a href="index.php" class="btn">Return to Dashboard</a></p>
            </article>


        </div>
    </div>

</body>

</html>