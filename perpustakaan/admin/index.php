<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Tambah Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 400px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-top: 10px;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Buku</h2>
        <form action="add_book.php" method="POST">
            <label for="title">Judul Buku</label>
            <input type="text" id="title" name="judul" required>

            <label for="author">Penulis</label>
            <input type="text" id="author" name="penulis" required>

            <label for="synopsis">Sinopsis</label>
            <textarea id="synopsis" name="sinopsis" rows="5" required></textarea>

            <label for="publish_date">Tanggal Terbit</label>
            <input type="date" id="publish_date" name="tanggal_terbit" required>

            <label for="price">Harga</label>
            <input type="number" id="price" name="harga" step="0.01" required>
            

            <button type="submit">Tambahkan Buku</button>
        </form>
    </div>
</body>
</html>
