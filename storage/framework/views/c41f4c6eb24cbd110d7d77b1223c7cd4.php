<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">Konversi Nilai</span>
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
                            <div class="input-field">
                                <input type="text" id="nilai_partisipasi" name="nilai_partisipasi" required>
                                <label for="nilai_partisipasi">Nilai Partisipasi</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="nilai_tugas" name="nilai_tugas" required>
                                <label for="nilai_tugas">Nilai Tugas</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="nilai_uts" name="nilai_uts" required>
                                <label for="nilai_uts">Nilai UTS</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="nilai_uas" name="nilai_uas" required>
                                <label for="nilai_uas">Nilai UAS</label>
                            </div>
                            <button type="submit" class="btn waves-effect waves-light">Konversi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\konversi_nilai\konversi_nilai\resources\views/konversinilai.blade.php ENDPATH**/ ?>