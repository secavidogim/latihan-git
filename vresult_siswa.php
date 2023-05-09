<!DOCTYPE html>
<html lang=en>

<head>
    <title>Result Siswa</title>
    <link href="<?php echo base_url() ?>assets/css.css" rel="stylesheet">
</head>

<body>
    <div class="flexcol">
        <div><h3>Hasil Data Siswa</h3></div>
        <table>
            <colgroup>
                <col style="width: auto">
                <col style="width: auto">
            </colgroup>
            <tr>
                <td>Nama</td>
                <td><?= $name; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><?= $nisnumber; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?= $class; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $birthday; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?= $birthplace; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $address; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $gender; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?= $religion; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>