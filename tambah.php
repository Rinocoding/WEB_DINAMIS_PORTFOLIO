<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <a href="index.php">Indeks</a>
    <h1>Tambah data mahasiswa</h1>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Tulisan">Tulisan</label>
                <input type="text" name="Tulisan" id="Tulisan" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>
