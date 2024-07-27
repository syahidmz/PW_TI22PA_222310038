<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-4">
        <h1>Hello, <?php echo e(auth()->user()->name); ?></h1>

        <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\latihan-8\resources\views/home.blade.php ENDPATH**/ ?>