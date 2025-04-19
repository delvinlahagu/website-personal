<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Register</title>
</head>
<body>

<?php
// Inisialisasi variabel hasil input
$nama = $nim = $tgl_lahir = $jenkel = $jurusan = $no_hp = $alamat = "";
$hobi = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $nim = isset($_POST['nim']) ? htmlspecialchars($_POST['nim']) : '';
    $tgl_lahir = isset($_POST['tgl_lahir']) ? htmlspecialchars($_POST['tgl_lahir']) : '';
    $jenkel = isset($_POST['jenkel']) ? htmlspecialchars($_POST['jenkel']) : '';
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];
    $jurusan = isset($_POST['jurusan']) ? htmlspecialchars($_POST['jurusan']) : '';
    $no_hp = isset($_POST['no_hp']) ? htmlspecialchars($_POST['no_hp']) : '';
    $alamat = isset($_POST['alamat']) ? nl2br(htmlspecialchars($_POST['alamat'])) : '';

    echo "<h3>Hasil Input:</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td>Nama Lengkap</td><td>$nama</td></tr>";
    echo "<tr><td>NIM</td><td>$nim</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>$tgl_lahir</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>$jenkel</td></tr>";
    echo "<tr><td>Hobi</td><td>";
    if (!empty($hobi)) {
        echo "<ul>";
        foreach ($hobi as $h) {
            echo "<li>" . htmlspecialchars($h) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Tidak ada hobi yang dipilih.";
    }
    echo "</td></tr>";
    echo "<tr><td>Jurusan</td><td>$jurusan</td></tr>";
    echo "<tr><td>Nomor HP</td><td>$no_hp</td></tr>";
    echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
    echo "</table><br><hr>";
}
?>

<h2>Form Register</h2>

<form method="POST" action="">
    <table border="0" cellpadding="6" cellspacing="0">
        <tr>
            <td><label for="nama">Nama Lengkap</label></td>
            <td><input type="text" id="nama" name="nama" required></td>
        </tr>
        <tr>
            <td><label for="nim">NIM</label></td>
            <td><input type="text" id="nim" name="nim" required></td>
        </tr>
        <tr>
            <td><label for="tgl_lahir">Tanggal Lahir</label></td>
            <td><input type="date" id="tgl_lahir" name="tgl_lahir" required></td>
        </tr>
        <!-- <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenkel" value="Pria" id="pria" required>
                <label for="pria">Pria</label>
                <input type="radio" name="jenkel" value="Wanita" id="wanita">
                <label for="wanita">Wanita</label>
            </td>
        </tr> -->
        <!-- <tr>
            <td>Hobi</td>
            <td>
                <input type="checkbox" name="hobi[]" value="Memancing" id="memancing">
                <label for="memancing">Memancing</label><br>
                <input type="checkbox" name="hobi[]" value="Memasak" id="memasak">
                <label for="memasak">Memasak</label><br>
                <input type="checkbox" name="hobi[]" value="Melukis" id="melukis">
                <label for="melukis">Melukis</label>
            </td>
        </tr> -->
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>
                <select id="jurusan" name="jurusan" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Sumber Daya Akuatik">Sumber Daya Akuatik</option>
                    <option value="Agroteknologi">Agroteknologi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="no_hp">Nomor HP</label></td>
            <td><input type="text" id="no_hp" name="no_hp" required></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><textarea id="alamat" name="alamat" rows="4" cols="30" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input type="submit" name="submit" value="Simpan">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
