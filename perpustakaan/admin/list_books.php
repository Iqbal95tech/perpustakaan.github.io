<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "perpus");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data buku dari database
$sql = "SELECT judul, penulis, sinopsis, tanggal_terbit, harga FROM buku";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Buku</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #007BFF;
            color: white;
        }

        .text {
  display: flex;
  justify-content: center;
  align-items: center;
}

    </style>
</head>
<body>
    
    <div class="container">
        <h1>Daftar Buku</h1>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
       
                    <th>Tanggal Terbit</th>
                    <th>Harga</th>
                    <th>Aksi</th>
          
                </tr>
            </thead>
            <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['judul'] . "</td>";
                        echo "<td>" . $row['penulis'] . "</td>";
                        echo "<td>" . $row['tanggal_terbit'] . "</td>";
                        echo "<td>Rp " . number_format($row['harga'], 2, ',', '.') . "</td>";
                        echo "<td><a href='detail.html' class='btn-detail'>Detail</a></td>"; // Tombol detail
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada buku yang tersedia</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class=" d-flex justify-content-center button">
    <a class=" btn btn-primary" href="dashboard.php" role="button">Dashboard</a>
    </div>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>
</html>

<?php
$conn->close();
?>
