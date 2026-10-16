
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    <form action="" method="POST">
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" required>
        <br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" required>
        <br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" required>
        <br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" required>
        <br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" required>
        <br><br>

        <button type="submit">Simpan Buku</button>
    </form>

    <br>
    <a href="index.php">Kembali ke Daftar Buku</a>
</body>
</html>
