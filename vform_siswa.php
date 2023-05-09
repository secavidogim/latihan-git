<!DOCTYPE html>
<html lang=en>

<head>
    <title>Form Siswa</title>
    <link href="<?php echo base_url() ?>assets/css.css" rel="stylesheet">
</head>

<body>
    <div class="flexcol">
        <div><h3>Input Data Siswa</h3></div>
        <form action="<?php echo base_url('siswa/print'); ?>" method="post">
            <table>
                <colgroup>
                    <col style="width: auto">
                    <col style="width: auto">
                </colgroup>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nisnumber" id="nisnumber"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="class" id="class"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="birthday" id="birthday"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="birthplace" id="birthplace"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="address" id="address"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" id="male" name="gender" value="Laki-laki"><label for="male">Laki-laki</label>
                        <input type="radio" id="female" name="gender" value="Perempuan"><label for="female">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="religion" id="religion">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div><input type="submit" value="Submit"></td></div>
        </form>
    </div>
</body>

</html>