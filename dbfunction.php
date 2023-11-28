<?php
function fetchAllMK()
{
    try {
        $pdo = pdo_connect();
        $stmt = $pdo->prepare('SELECT * FROM tbl_fadelazzahra');
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return [true, $data == false ? null : $data];
    } catch (Exception $ex) {
        return [false, $ex->getMessage()];
    }
}
function getMKByKode($kode)
{
    try {
        $pdo = pdo_connect();
        $stmt = $pdo->prepare('SELECT * FROM tbl_fadelazzahra WHERE kode_mk = ?');
        $stmt->execute([$kode]);
        $datum = $stmt->fetch(PDO::FETCH_ASSOC);

        return [true, $datum == false ? null : $datum];
    } catch (Exception $ex) {
        return [false, $ex->getMessage()];
    }
}
function addMK($kode, $nama, $jumlahsks, $deskripsi)
{
    try {
        $pdo = pdo_connect();
        $stmt = $pdo->prepare('INSERT INTO tbl_fadelazzahra VALUES (?, ?, ?, ?)');
        $stmt->execute([$kode, $nama, $jumlahsks, $deskripsi]);

        return [true, 'Add success'];
    } catch (Exception $ex) {
        return [false, $ex->getMessage()];
    }
}
function editMK($kode, $nama, $jumlahsks, $deskripsi)
{
    try {
        $pdo = pdo_connect();
        $stmt = $pdo->prepare('UPDATE tbl_fadelazzahra SET Nama_mk = ?, Jumlah_sks = ?, Deskripsi_mk = ? WHERE kode_mk = ?');
        $stmt->execute([$nama, $jumlahsks, $deskripsi, $kode]);

        return [true, 'Edit success'];
    } catch (Exception $ex) {
        return [false, $ex->getMessage()];
    }
}
function deleteMK($kode)
{
    try {
        $pdo = pdo_connect();
        $stmt = $pdo->prepare('DELETE FROM tbl_fadelazzahra WHERE kode_mk = ?');
        $stmt->execute([$kode]);

        return [true, 'Delete success'];
    } catch (Exception $ex) {
        return [false, $ex->getMessage()];
    }
}


?>