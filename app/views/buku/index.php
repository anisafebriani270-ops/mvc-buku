
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <?php
    $status = $_GET['status'] ?? '';

    if ($status === 'created') {
        echo '<p style="color: green;">Buku berhasil ditambahkan!</p>';
    } elseif ($status === 'updated') {
        echo '<p style="color: green;">Buku berhasil diperbarui!</p>';
    } elseif ($status === 'deleted') {
        echo '<p style="color: green;">Buku berhasil dihapus!</p>';
    } elseif ($status === 'error') {
        echo '<p style="color: red;">Terjadi kesalahan. Data buku gagal diproses.</p>';
    }
    ?>

    <p>
        <a href="index.php?action=create">+ Tambah Buku</a>
    </p>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php if (empty($buku)): ?>
                <tr>
                    <td colspan="7">Belum ada data buku.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($buku as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>

                        <td>
                            <?= htmlspecialchars($item['judul']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($item['penulis']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($item['penerbit']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars((string) $item['tahun_terbit']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($item['kategori']) ?>
                        </td>

                        <td>
                            <a href="index.php?action=edit&id=<?= (int) $item['id'] ?>">
                                Edit
                            </a>

                            |

                            <form
                                action="index.php?action=delete"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('Yakin ingin menghapus buku ini?');"
                            >
                                <input
                                    type="hidden"
                                    name="id"
                                    value="<?= (int) $item['id'] ?>"
                                >

                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>