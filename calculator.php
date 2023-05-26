<?php
class aritmatika{
    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    public function tambah() {
        return $this->angka1 + $this->angka2;
    }

    public function kurang() {
        return $this->angka1 - $this->angka2;
    }

    public function bagi() {
        return $this->angka1 / $this->angka2;
    }

    public function kali() {
        return $this->angka1 * $this->angka2;
    }
    

}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="POST" action="index.php">
 angka pertama <input type="text" name="angka1" size="3"> &nbsp;
 <select name="method" id="method" required>
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="bagi">/</option>
<option value="kali">*</option>
</select> &nbsp;
  angka kedua <input type="text" name="angka2" size="3"> &nbsp;
 <label>=</label> &nbsp;
 <input type="submit" value ="hitung" name="hitung">
 <form>
</body>
</html>

<?php

echo "<br>";
echo "hasilnya: ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $method = $_POST["method"];

    $hasil = new aritmatika($angka1, $angka2);

    switch ($method) {
        case "tambah":
            echo $hasil->tambah();
            break;
        case "kurang":
            echo $hasil->kurang();
            break;
        case "bagi":
            echo $hasil->bagi();
            break;
        case "kali":
            echo $hasil->kali();
            break;
        default:
            echo "Metode invalid";
            break;
    }
}
?>