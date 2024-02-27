<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .card-title,
        .card-subtitle {
            color: #343a40;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Hasil Konversi Nilai</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nilai Akhir (NA): <?= $na ?></h5>
                        <h6 class="card-subtitle mb-2">Nilai Konversi Huruf (NH): <?= $nh ?></h6>
                        <a href="/" class="btn btn-primary mt-3">Kembali ke Halaman Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\konversi_nilai\konversi_nilai\resources\views/hasil_konversi.blade.php ENDPATH**/ ?>