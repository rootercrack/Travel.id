<?php
require_once 'models/Pegawai.php';
//ciptakan objek dari class pegawai
$obj = new Pegawai();
//panggil method & tampilkan data
$rs = $obj->dataPegawai();
?>

<h3 style="margin-bottom: 10px;">Data Pegawai</h3>
<?php
if (isset($member)) {
?>
    <a href="index.php?hal=formPegawai" class="btn btn-primary" style="margin-bottom: 10px;">Tambah <i class="fas fa-plus-circle"></i></a>
<?php } ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Profesi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rs as $pgw) {
        ?>
            <tr>

                <td><?= $no; ?></td>
                <td><?= $pgw['nip']; ?></td>
                <td><?= $pgw['nama']; ?></td>
                <td><?= $pgw['email']; ?></td>
                <td><?= $pgw['agama']; ?></td>
                <td><?= $pgw['profesi']; ?></td>
                <td>
                    <form method="POST" action="controllers/pegawaiController.php">
                        <a href="index.php?hal=detailPegawai&id=<?= $pgw['id']; ?>" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                        <?php
                        $role = $member['role'];
                        if (isset($member)) {
                        ?>
                            <a href="index.php?hal=formEditPegawai&id=<?= $pgw['id']; ?>" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
                            <?php
                            if ($role != 'staff') {
                            ?>
                                <button name="proses" value="hapus" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            <?php } ?>
                            <input type="hidden" name="idx" value="<?= $pgw['id']; ?>">
                        <?php } ?>
                    </form>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>

    </tbody>
</table>