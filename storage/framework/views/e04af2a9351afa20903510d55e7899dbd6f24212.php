<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-info">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo $__env->yieldContent('menu1'); ?>">
                    <a class="nav-link" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('menu2'); ?>">
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('menu3'); ?>">
                    <a class="nav-link" href="/matakuliah">Mata Kuliah</a>
                </li>
            </ul>    
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH D:\laravel\src\tugas2\resources\views/master.blade.php ENDPATH**/ ?>