<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mahasiswa_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$nim = $_POST['nim'];


$sql = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
