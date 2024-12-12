<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "perpus");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$title = $_POST['judul'];
$author = $_POST['penulis'];
$synopsis = $_POST['sinopsis'];
$publish_date = $_POST['tanggal_terbit'];
$price = $_POST['harga'];

// Query untuk menyimpan data buku
$sql = "INSERT INTO buku (judul, penulis, sinopsis, tanggal_terbit, harga) 
        VALUES ('$title', '$author', '$synopsis', '$publish_date', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Buku berhasil ditambahkan!";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: list_books.php");
    exit();


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
</head>
<body>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>
