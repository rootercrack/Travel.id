<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';

//tangkap request element form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$iddivisi = $_POST['divisi'];
$foto = $_POST['foto'];
$button = $_POST['proses'];

//menyimpan data ke sebuah array
$data = [
    $nip, // ? 1
    $nama, // ? 2
    $email, // ? 3
    $agama, // ? 4
    $iddivisi, // ? 5
    $foto // ? 6
];

//menciptakan object
$obj = new Pegawai();
switch ($button) {
    case 'simpan':
        $obj->simpan($data);
        break;

    case 'ubah':
        //tangkap hidden field "idx"
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        break;

    case 'hapus':
        //tangkap hidden field "idx"
        $id[] = $_POST['idx'];
        $obj->hapus($id);
        break;

    default:
        header('location:http://localhost/Travel.id/index.php?hal=dataPegawai');
        break;
}

//landing page
header('location:http://localhost/Travel.id/index.php?hal=dataPegawai');