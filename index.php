<?php
require "dbconnect.php";
require "dbfunction.php";

$matkuls = fetchAllMK()[1];
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
    <title>Dashboard | Sanapati Cendekia Center</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="col-lg-11 p-5 justify-content-center">

            <article class="card-body bg-dark">
                <h1 class="card-title text-center my-4 text-light">Dashboard</h1>
                <h3 class="card-title text-center mb-5 text-light">Sanapati Cendekia Center</h3>
                <hr style="border-top: 1px solid white;">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col" class="th-lg">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama Mata Kuliah</th>
                                <th scope="col">Jumlah SKS</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">
                                    <!-- <?php
                                    echo '<a href="#"><button type="button" class="btn btn-outline-success btn-sm">Add new</button></a>';
                                    ?> -->
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $idx = 1;
                            foreach ($matkuls as $matkul) {
                                echo '
                                <tr>
                                    <th scope="row">' . $idx . '</th>
                                    <td>' . $matkul['kode_mk'] . '</td>                                
                                    <td>' . $matkul['Nama_mk'] . '</td>                                
                                    <td>' . $matkul['Jumlah_sks'] . '</td>                                
                                    <td>' . $matkul['Deskripsi_mk'] . '</td>   
                                    <td>
                                        <a href="edit.php?kode=' . $matkul['kode_mk'] . '"><button type="button" class="btn btn-outline-primary btn-sm">Edit</button></a>
                                        <a href="semiapi.php?func=delete&kode=' . $matkul['kode_mk'] . '"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                                    </td>                             
                                </tr>
                                ';
                                $idx = $idx + 1;
                            }
                            echo '
                            <tr>
                                <th scope="row"></th>
                                <td></td>                                
                                <td></td>                                
                                <td></td>                                
                                <td></td>                                
                                <td>
                                    <a href="add.php"><button type="button" class="btn btn-outline-success btn-sm">Add new</button></a>
                                </td>                             
                            </tr>
                            ';
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr style="border-top: 1px solid white;">
                <p class="text-center text-light py-3">Created with ❤ by Fadel Azzahra</p>
            </article>


        </div>
    </div>

</body>

</html>