
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mobil</title>
</head>
<body>
    <h1>Tambah Mobil</h1>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Nama" required>
        <input type="text" name="brand" placeholder="Merk" required>
        <input type="number" name="price" placeholder="Harga" required>
        <textarea name="description" placeholder="Deskripsi"></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
