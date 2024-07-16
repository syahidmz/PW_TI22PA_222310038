<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Profile</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Type</th>
                    <th>Rate</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row['Course']); ?></td>
                        <td><?php echo e($row['Type']); ?></td>
                        <td>
                            <?php for($i = 5; $i >= 1; $i--): ?>
                                <?php if($i <= $row['Rate']): ?>
                                    ★
                                <?php else: ?>
                                    ☆
                                <?php endif; ?>
                            <?php endfor; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH E:\Kuliah\4\Lab Pemrograman Web\Tugas\Tugas_Pertemuan_6_PW\resources\views/profile.blade.php ENDPATH**/ ?>