<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTSPPW2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Pemain MU</h2>
        
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>nama pemain</th>
                    <th>nomor punggung</th>
                    <th>posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_utsppw2 as $index => $utsppw2)
                    <tr>
                        <td>{{ $utsppw2->id }}</td>
                        <td>{{ $utsppw2->namapemain }}</td>
                        <td>{{ $utsppw2->nomorpunggung }}</td>
                        <td>{{ $utsppw2->posisi }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
