<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Saya</title>
</head>
<body>
    <h1>Diskon!</h1>
    <hr>
    <form action="" method="post">
        <table border="0" cellpadding="5">
            <tr>
                <td><label>Pilih Barang</label></td>
                    <td>: <select name="pilih_barang" id="pilih_barang">
                        <option style="display:none;" value=""></option>
                        <option value="keju">Keju - Rp.15000</option>
                        <option value="roti">Roti - Rp.7000</option>
                        <option value="selai">Selai - Rp.20000</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="barang">Jumlah Barang</label></td>
                <td>: <input type="text" name="jumlah_barang" id="jumlah_barang"></td>
            </tr>
        </table>
                <input type="radio" name="diskon" value="10"> Diskon 10%
                <input type="radio" name="diskon" value="15"> Diskon 15%
                <input type="radio" name="diskon" value="25"> Diskon 25%
                <br><br>
                <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    if($_POST['pilih_barang'] == "keju") {
        $harga = 15.000;
    }elseif($_POST['pilih_barang'] == "roti"){
        $harga = 7000;
    }elseif($_POST['pilih_barang'] == "selai"){
        $harga = 20000;
    }

    $total = $_POST['jumlah_barang'] * $harga;
if (isset($_POST['diskon'])){
    if ($_POST['diskon'] == "10") {
        $diskon = $total * 10/100;
        $total_harga = $total - $diskon;
        echo "Barang : " . $_POST['pilih_barang'] . "<br>";
        echo "Jumlah : "  . $_POST['jumlah_barang'] . "<br>";
        echo "Total Belanja : " . $total . "<br>";
        echo "Diskon : 10% " . "<br>"; 
        echo "Selamat anda mendapatkan diskon :" . $diskon . "<br>";
        echo "Anda harus membayar :" . $total_harga;
    }elseif($_POST['diskon'] == "15"){
        $diskon = $total * 15/100;
        $total_harga = $total - $diskon;
        echo "Barang : " . $_POST['pilih_barang'] . "<br>";
        echo "Jumlah : "  . $_POST['jumlah_barang'] . "<br>";
        echo "Total Belanja : " . $total . "<br>";
        echo "Diskon : 15%"  . "<br>";
        echo "Selamat anda mendapatkan diskon :" . $diskon . "<br>";
        echo "Anda harus membayar :" . $total_harga;
    }elseif($_POST['diskon'] == "25"){
        $diskon = $total * 25/100;
        $total_harga = $total - $diskon;
        echo "Barang : " . $_POST['pilih_barang'] . "<br>";
        echo "Jumlah : "  . $_POST['jumlah_barang'] . "<br>";
        echo "Total Belanja : " . $total . "<br>";
        echo "Diskon : 25% " . "<br>";
        echo "Selamat anda mendapatkan diskon :" . $diskon . "<br>";
        echo "Anda harus membayar :" . $total_harga;
    }
}
}
?>