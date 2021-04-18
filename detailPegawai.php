<?php
require_once 'models/Pegawai.php';
//tangkap id di url
$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);
?>

<div class="card" style="width: 22rem;">
    <?php
    $gambar = (!empty($rs['foto'])) ? $rs['foto'] : "zero.jpg";
    ?>

    <img src="img/foto_pegawai/?= $gambar ?>" width="40%" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title"><?= $rs['nama'] ?></h5>
        <p class="card-text">
            NIP : <?= $rs['nip'] ?>
            <br />Email : <?= $rs['email'] ?>
            <br />Agama : <?= $rs['agama'] ?>
            <br />Profesi : <?= $rs['profesi'] ?>
        </p>
        <a href="index.php?hal=dataPegawai" class="btn btn-primary">Back</a>
    </div>
</div>