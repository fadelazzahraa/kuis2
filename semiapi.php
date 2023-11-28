<!-- Ini API yang saya modifikasi dengan menambahkan fungsi header ke file index.php 
Ada fungsi yang saya comment karena dalam semiAPI ini tidak dipakai dan digantikan dengan langsung memanggil ke file dbfunction.php

-->


<?php
session_start();
require "dbconnect.php";
require "dbfunction.php";
header('Content-Type: application/json');

$pdo = pdo_connect();

if (isset($_GET['func'])) {
    switch ($_GET['func']) {
        default:
            echo json_encode([
                "status" => false,
                "message" => "Invalid Request"
            ]);
            break;
        // case "fetch":
        //     $data = fetchAllMK();
        //     echo json_encode([
        //         "status" => $data[0],
        //         "data" => $data[1]
        //     ]);
        //     break;
        // case "get":
        //     $datum = getMKByKode($_GET['kode']);
        //     echo json_encode([
        //         "status" => $datum[0],
        //         "data" => $datum[1]
        //     ]);
        //     break;
        case "delete":
            $status = deleteMK($_GET['kode']);
            echo json_encode([
                "status" => $status[0],
                "message" => $status[1]
            ]);
            header('location:index.php');
            break;
    }
}

if (isset($_POST['func'])) {
    switch ($_POST['func']) {
        default:
            echo json_encode([
                "status" => false,
                "message" => "Invalid Request"
            ]);
            break;

        case "create":
            $status = addMK($_POST['kode'], $_POST['nama'], $_POST['jumlahsks'], $_POST['deskripsi']);
            echo json_encode([
                "status" => $status[0],
                "message" => $status[1]
            ]);
            header('location:index.php');
            break;
        case "update":
            $status = editMK($_POST['kode'], $_POST['nama'], $_POST['jumlahsks'], $_POST['deskripsi']);
            echo json_encode([
                "status" => $status[0],
                "message" => $status[1]
            ]);
            header('location:index.php');
            break;

    }
}