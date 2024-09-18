<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h4>Tambah Buku</h4>

        <!-- Form untuk menambah buku -->
        <form method="POST" action="/buku/store">
            <!-- Token CSRF -->
            @csrf

            <!-- Input judul -->
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" required>
            </div>

            <!-- Input penulis -->
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis" required>
            </div>

            <!-- Input harga -->
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" required>
            </div>

            <!-- Input tanggal terbit -->
            <div class="form-group">
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" class="form-control" name="tgl_terbit" id="tgl_terbit" required>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <!-- Tombol kembali ke daftar buku -->
        <a href="/buku" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
