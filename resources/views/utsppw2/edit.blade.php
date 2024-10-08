<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h4>Edit Buku</h4>

        <!-- Form untuk mengedit buku -->
        <form method="POST" action="/buku/<?php echo $buku->id; ?>">
            <!-- Token CSRF -->
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <!-- Method PUT karena Laravel menggunakan PUT untuk update -->
            <input type="hidden" name="_method" value="PUT">

            <!-- Input judul -->
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $buku->judul; ?>" required>
            </div>

            <!-- Input penulis -->
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis" value="<?php echo $buku->penulis; ?>" required>
            </div>

            <!-- Input harga -->
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $buku->harga; ?>" required>
            </div>

            <!-- Input tanggal terbit -->
            <div class="form-group">
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" class="form-control" name="tgl_terbit" id="tgl_terbit" value="<?php echo $buku->tgl_terbit; ?>" required>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <!-- Tombol kembali ke daftar buku -->
        <a href="/buku" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
