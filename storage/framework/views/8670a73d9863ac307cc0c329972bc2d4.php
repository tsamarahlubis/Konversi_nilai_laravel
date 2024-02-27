<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center bg-secondary">Konversi Nilai</h1>
                    </div>
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <form action="/konversi" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="nilai_partisipasi">Nilai Partisipasi</label>
                                <input type="text" class="form-control" id="nilai_partisipasi" name="nilai_partisipasi"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_tugas">Nilai Tugas</label>
                                <input type="text" class="form-control" id="nilai_tugas" name="nilai_tugas" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_uts">Nilai UTS</label>
                                <input type="text" class="form-control" id="nilai_uts" name="nilai_uts" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_uas">Nilai UAS</label>
                                <input type="text" class="form-control" id="nilai_uas" name="nilai_uas" required>
                            </div>
                            <button type="submit" class="btn bg-success btn-block">Konversi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\tugas1-pemweb-lanjut-konversi-nilai-laravel-main\resources\views/konversinilai.blade.php ENDPATH**/ ?>