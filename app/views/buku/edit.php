<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>

    <h1>Edit Buku</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <label>Judul Buku:</label><br>
        <input
            type="text"
            name="judul"
            value="<?= htmlspecialchars($item['judul']) ?>"
            required
        >
        <br><br>

        <label>Penulis:</label><br>
        <input
            type="text"
            name="penulis"
            value="<?= htmlspecialchars($item['penulis']) ?>"
            required
        >
        <br><br>

        <label>Penerbit:</label><br>
        <input
            type="text"
            name="penerbit"
            value="<?= htmlspecialchars($item['penerbit']) ?>"
            required
        >
        <br><br>

        <label>Tahun Terbit:</label><br>
        <input
            type="number"
            name="tahun_terbit"
            value="<?= htmlspecialchars((string) $item['tahun_terbit']) ?>"
            min="1"
            required
        >
        <br><br>

        <label>Kategori:</label><br>
        <input
            type="text"
            name="kategori"
            value="<?= htmlspecialchars($item['kategori']) ?>"
            required
        >
        <br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="index.php">Kembali ke Daftar Buku</a>

</body>
</html>